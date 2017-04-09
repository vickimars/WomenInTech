<?php

include 'functions.php';
      
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
 $pdo = new PDO ($_POST['username'], $_POST['password']);
}
 //user_id, user_name, user_pass,

/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_pword']){ 
$error_message = 'Passwords should match<br>'; 
}

$email = "john.doe@example.com";
?>
<html>
<head><title>Blog Post</title></head>
<body>

<h1>Login Page</h1>

<?php echo 'login form'; ?>
</body>
</html>
