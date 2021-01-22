<?php
session_start();
if(!empty($_SESSION["userId"])) {
    header('Location: ./views/dashboard.php');
} else {
    header('Location: ./views/sign-in.php');
}
?>