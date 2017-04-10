<!--<<<<<<< HEAD

=======
>>>>>>> refs/remotes/origin/master -->
<!DOCTYPE HTML>  

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php

include 'functions.php'
include 'connection.php';
require_once 'functions.php';
>>>>>>> origin/master

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["bio"])) {
    $bio = "";
  } else {
    $bio = test_input($_POST["bio"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

<<<<<<< HEAD

   
// define variables and set to empty values

$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password = $bio = "";
?>
i
   <h2>Women in Tech Blog <br>   
Registration</h2>
=======
    <h2>Registration</h2>
>>>>>>> origin/master
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
  About me: <textarea name="bio" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $bio;

add_user($pdo,$_POST);
?>

</body>
</html>
