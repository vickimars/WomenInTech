<?php
// It contains the login form

include 'controller/controller.php';
include 'controller/login.php';
include 'controller/register.php';
include 'controller/upload.php';

?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	login($users, $_POST['username'], $_POST['password']);
}
?>
 
<!doctype html>
<html>
<head><title>Welcome to our Blog</title></head>
<body>

<h1>Women in Tech Blog</h1>

<?php echo Forms\login\display('login'); ?>

