<?php

include_once '_config/config.php';
include_once '_functions/functions.php';
include_once '_config/db.php';

spl_autoload_register(function ($class) {
    include_once 'models/' . $class . '.php';
});

// Commented out as it seems you're not using these lines currently
// $database = new Database();
// $con = $database->dbh;


// Determine the requested page
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

if (isset($_SESSION["login"]) && isset($_GET['page']) && ($_GET['page'] == "login" || $_GET['page'] == "register")) {
    $page = 'home';
} else if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

// Check if the controller for the determined page exists
$all_pages = scandir('controllers');
if (in_array($page . '_controller.php', $all_pages)) {
    include_once 'controllers/' . $page . '_controller.php';
    if (isset($_SESSION["admin"]) && $page == "dashboard")
        include_once 'views/dashboard_layout.php';
    else
        include_once 'views/_layout.php';
} else {
    header('Location: 404.html');
}
