<?php
// This contains the user logout script
session_start();

if(isset($_SESSION['user_id'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    header("Location: index.php");
} else {
    header("Location: index.php");
}
?>
