<?php
// This contains the user logout script

session_start();

if(isset($_SESSION['id'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    header("Location: /WomenInTech/index.php");
} else {
    header("Location: /WomenInTech/index.php");
}
?>
