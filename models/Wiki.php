<?php

class Wiki
{
    static function addWiki($title, $content, $tags, $category, $creator, $created_date)
    {
        global $db;
        $sql = "INSERT INTO wiki (title, content, category_id, creator, created_date) VALUES (:title, :content, :category, :creator, :created_date)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':creator', $creator);
        $stmt->bindParam(':created_date', $created_date);
        $stmt->execute();
        $wikiId = $db->lastInsertId();

        foreach ($tags as $tag) {
            Tag::wiki_tag($tag, $wikiId);
        }
    }

    static function updateWiki($wiki_id, $tags, $title, $content, $category, $updated_date, $oldTags)
    {
        global $db;
        $sql = "UPDATE wiki SET  title = :title, content = :content, category_id = :category_id, updated_date = :updated_date WHERE wiki_id = :wiki_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $title, 2);
        $stmt->bindParam(':content', $content, 2);
        $stmt->bindParam(':category_id', $category, 1);
        $stmt->bindParam(':updated_date', $updated_date, 1);
        $stmt->bindParam(':wiki_id', $wiki_id, 1);
        $stmt->execute();

        foreach ($oldTags as $tag) {
            Tag::deleteWiki_Tag($wiki_id);
        }

        foreach ($tags as $tag) {
            Tag::wiki_tag($tag, $wiki_id);
        }
    }

    static function deleteWiki($wiki_id)
    {
        global $db;
        $sql = "DELETE FROM wiki WHERE wiki_id = :wiki_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':wiki_id', $wiki_id);
        $stmt->execute();
    }

    function archiveWiki($wiki_id)
    {
        global $db;
        $sql = "UPDATE wiki SET archived=1 WHERE wiki_id = :wiki_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':wiki_id', $wiki_id);
        $stmt->execute();
    }

    static function getWikis()
    {
        global $db;
        $sql = "SELECT * FROM wiki 
         JOIN category 
         ON wiki.category_id = category.category_id
         WHERE archived = 0";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function lastWikis()
    {
        global $db;
        $result = $db->query("SELECT *
        FROM wiki
        JOIN category 
        ON wiki.category_id = category.category_id
        WHERE archived = 0
        ORDER BY created_date DESC
        LIMIT 3;
        ");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    static function lasCategories()
    {
        global $db;
        $result = $db->query("SELECT *
        FROM category
        ORDER BY created_at DESC
        LIMIT 4;
        ");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function getArchivedWikis()
    {
        global $db;
        $sql = "SELECT * FROM wiki WHERE archived = 1";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function getWiki($wikiId)
    {
        global $db;
        $sql = "SELECT wiki.*, users.username, users.picture, users.email, category.category FROM wiki 
         JOIN users ON wiki.creator = users.user_id
         JOIN category ON wiki.category_id = category.category_id
         WHERE archived = 0 AND wiki_id = ? ORDER BY wiki_id DESC";
        $stmt = $db->prepare($sql);
        $stmt->execute([$wikiId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}