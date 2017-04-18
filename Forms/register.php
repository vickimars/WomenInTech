
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
include 'functions.php';
include 'Controller/connection.php';
   
// define variables and set to empty values

$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password = $bio = "";
?>
    <h2>Registration</h2>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <br><input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Email: <br><input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <br><input type="text" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
  About me: <br><textarea name="bio" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

if(isset($_POST["submit"])){
add_user($pdo,$_POST);}

?>

</body>
</html>
