<?php
namespace Phppot;

use \Phppot\Member;
if ( isset($_POST["user_name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once "Member.php";

    $member = new Member();
    $isUsedEmail = $member->getMemberByEmail($email);
    if ($isUsedEmail) {
        $_SESSION["errorMessage"] = "Email is already used.";
        header('Location: ../views/sign-up.php');
        exit();
    }

    $isSignedUp = $member->processSignup($username, $email, $password);
    if (! $isSignedUp) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        header('Location: ../views/sign-up.php');
        exit();
    }
    header('Location: ../views/sign-in.php');
    exit();
}