<?php
// It contains the login form

include 'lib/Blog/Db/blog_db.php';
include 'lib/Blog/Auth/blog_auth.php';
include 'lib/Blog/View/blog_view.php';

?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	Blog\Auth\login($users, $_POST['username'], $_POST['password']);
}
?>
 
<!doctype html>
<html>
<head><title>Welcome to our Blog</title></head>
<body>

<h1>Women in Tech Blog</h1>

<?php echo Blog\View\display('loginform'); ?>

