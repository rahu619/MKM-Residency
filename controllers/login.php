<?php

require "../DB/dbhandler.php";

if ($_POST) {

//login credentials
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    $dbObj = new dbhandler();

    $userid = $dbObj->ifUserExists($username, $pwd);

    $page = "";
    if ($userid) {
        session_start();
        $_SESSION["userID"] = $userid;
        $page = "adminhome.php";
    } else {
        $page = "home.php";
    }

    header("Location: /savory/" . $page);
    exit;

}
