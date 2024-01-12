<?php

if (empty($_SESSION["admin"])) {
    header("Location: index.php");
}

if ($_SESSION["login"]) {
    $userData = User::getUser($_SESSION["user_id"]);
//    dd($userData);
}

if (isset($_POST['logout'])) {
    $logout = new User($_SESSION["user_id"]);
    $logout->logout();
}

$tags = Tag::getTags();

if(isset($_GET["tag_id"])) {
    $tagId = filter_input(INPUT_GET, "tag_id", FILTER_SANITIZE_SPECIAL_CHARS);
    Tag::deleteTag($tagId);
    header("location: index.php?page=dashboard&add_tag=true");
}

if(isset($_POST["editTag"])) {
    $tag = filter_input(INPUT_POST, "tag", FILTER_SANITIZE_SPECIAL_CHARS);
    $tagId = filter_input(INPUT_POST, "tag_id", FILTER_SANITIZE_SPECIAL_CHARS);
    Tag::updateTag($tag, $tagId);
    header("location: index.php?page=dashboard&add_tag=true");
}

if(isset($_POST["add_tag"])) {
    $tag = filter_input(INPUT_POST, "tag", FILTER_SANITIZE_SPECIAL_CHARS);
    Tag::addTag($tag);
    exit;
}

$categories = category::getCategories();

if(isset($_POST["add_category"])) {
    $category = filter_input(INPUT_POST, "category", FILTER_SANITIZE_SPECIAL_CHARS);
    Category::addCategory($category);
    echo "category added successfully";
    exit;
}

if(isset($_POST["editCategory"])) {
    $category = filter_input(INPUT_POST, "category", FILTER_SANITIZE_SPECIAL_CHARS);
    $categoryId = filter_input(INPUT_POST, "category_id", FILTER_SANITIZE_SPECIAL_CHARS);
    Category::updateCategory($category, $categoryId);
    header("location: index.php?page=dashboard&add_category=true");
}

if(isset($_GET["category_id"])) {
    $categoryId = filter_input(INPUT_GET, "category_id", FILTER_SANITIZE_SPECIAL_CHARS);
    Category::deleteCategory($categoryId);
    header("location: index.php?page=dashboard&add_category=true");
}






