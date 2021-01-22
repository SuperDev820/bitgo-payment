<?php 
session_start();
$_SESSION["userId"] = "";
session_destroy();
header("Location: ../index.php");