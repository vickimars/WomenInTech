
<?php
// Login Form
require_once 'Controller/login.php';
?>

    
<?php

if(isset($_POST["submit"])){
    $pass = $_POST['password'];
    login($_POST['username'], $pass);
     
}
?>
 
<!doctype html>
<html>
<head><title>User Log In</title></head>
<body>

    <h5><br>
        Log in:<br>
</h5>

<!-- Using JL's login form
-->
<form action="" method="post">
<div>
<p>
<label for="username">Username: </label>
<input name="username" type="text"/>
</p>
</div>
<div>
    <p>
<label for="password">Password: </label>
<input name="password" type="password"/>
</p>
</div>
    <p>
<!--<button type="submit">Login</button>-->
<input type="submit" value="Login" tabindex="6" id="submit" name="submit"/>
    </p>
</form>

