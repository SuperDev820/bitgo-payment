<?php
namespace Phppot;

use \Phppot\Member;
if ( isset($_POST["email"]) && isset($_POST["password"])) {
    session_start();
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once "Member.php";
    echo "Invalid";
    $member = new Member();
    $isLoggedIn = $member->processLogin($email, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        echo "Invalid";
    }
    header('Location: ../index.php');
    exit();
}