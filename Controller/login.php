<?php
        $dsn = "mysql:host=localhost;dbname=users"  ;
        $user = "root";
        $password = null;
        $options = null;
try {
      $pdo = new PDO($dsn, $username, $pword);
} catch (PDOException $e) {
	die($e->getMessage());  //die() for illustration
					//always handle errors 
					//better than die!
}
        
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
 $pdo = new PDO ($_POST['username'], $_POST['pword']);
}
 //user_id, user_name, user_pass,
?>

<html>
<head><title>Blog Post</title></head>
<body>

<h1>Login Page</h1>

<?php echo 'login form'; ?>
</body>
</html>
