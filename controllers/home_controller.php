<?php

if (isset($_SESSION["login"])) {
    $userData = User::getUser($_SESSION["user_id"]);
//    dd($userData);
}

if (isset($_POST['logout'])) {
    $logout = new User($_SESSION["user_id"]);
    $logout->logout();
}

$categories = category::getCategories();

$tags = Tag::getTags();

if (isset($_POST["create_wiki"])) {
    extract($_POST);
    $date = date("U");
    Wiki::addWiki($title, $description, $tag, $category, $_SESSION["user_id"], $date);
    unset($_POST);
    header("location: index.php?page=home");
}

$wikis = Wiki::getWikis();


