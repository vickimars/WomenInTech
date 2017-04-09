<?php
// It contains the login form
?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	login($users, $_POST['username'], $_POST['pword']);
}
?>
 
<!doctype html>
<html>
<head><title>Welcome to our Blog</title></head>
<body>

<h1>Women in Tech Blog</h1>

<?php echo View\display('loginform'); ?>

