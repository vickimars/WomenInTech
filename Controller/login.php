<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	\Cart\Auth\login($pdo, $_POST['username'], $_POST['password']);
}
?>
 
<!doctype html>
<html>
<head><title>Blog Post</title></head>
<body>

<h1>Login Page</h1>

<?php echo 'login form'; ?>

</body>
</html>
