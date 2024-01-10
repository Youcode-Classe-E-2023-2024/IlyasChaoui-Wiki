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

if (isset($_GET['deleteTag']) && $_GET['deleteTag'] == 'true') {
    if (isset($_GET['tag_id'])) {
        $tag_id = $_GET['tag_id'];
        Tag::deleteTag($tag_id);
        header('Location: index.php?page=dashboard');
        exit();
    }
}

if(isset($_POST["delete_tag"])) {
    $tagId = filter_input(INPUT_POST, "tag_id", FILTER_SANITIZE_SPECIAL_CHARS);
    Tag::deleteTag($tagId);
    echo "tag deleted successfully";
    exit;
}

if(isset($_POST["add_tag"])) {
    $tag = filter_input(INPUT_POST, "tag", FILTER_SANITIZE_SPECIAL_CHARS);
    Tag::addTag($tag);
    echo "tag added successfully";
    exit;
}

if(isset($_GET["get_tags"])) {
    $tags = Tag::getTags();
    echo json_encode($tags);
    exit;
}

if(isset($_POST["add_category"])) {
    $category = filter_input(INPUT_POST, "category", FILTER_SANITIZE_SPECIAL_CHARS);
    Category::addCategory($category);
    echo "category added successfully";
    exit;
}




