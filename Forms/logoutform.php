<?php
// This contains the user logout script
include 'controller/controller.php';
include 'controller/login.php';
include 'controller/register.php';
include 'controller/upload.php';

session_start();

if(isset($_SESSION['id'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    header("Location: index.php");
} else {
    header("Location: index.php");
}
?>
