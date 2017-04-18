
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

    <h3><br>
        Log in:<br>
</h3>

<!-- Using JL's login form
-->
<form action="" method="post">
<div>
<p>
<h5><label for="username">Username: </label></h5>
<input name="username" type="text"/>
</p>
</div>
<div>
    <p>
    <h5><label for="password">Password: </label></h5>
<input name="password" type="password"/>
</p>
</div>
    <p><p>
    <div>
<!--<button type="submit">Login</button>-->
<input type="submit" value="Login" tabindex="6" id="submit" name="submit"/></p>
</p></div>
</form>

