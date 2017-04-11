<?php
// It contains the login form


include 'controller/login.php';


?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	login($_POST['username'], $_POST['password']);
}
?>
 
<!doctype html>
<html>
<head><title>User Log In</title></head>
<body>

    <h1><br>
        Log in:<br>
</h1>

<!-- Using JL's login form
-->
<form action="index.php" method="post">
<div>
<label for="username">Username: </label>
<input name="username" type="text"/>
</div>

<div>
<label for="password">Password: </label>
<input name="password" type="password"/>
</div>

<button type="submit">Login</button>
</form>
