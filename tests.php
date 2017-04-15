<?php
// This is the home page of our application
?>


<!doctype html>
<html>
<head><title>Women in Tech Blog</title></head>

<body>

<h1>Women in Tech Blog</h1>


<?= 

require_once 'Forms/connection.php';
require_once 'Forms/functions.php';
/*
try {
   $results = $pdo->prepare("SELECT username, password, email FROM users WHERE username = 'Aimi'");

  $results->execute();
    
  } catch (Exception $e) {
     echo "Error!: " . $e->getMessage() . "</br>";
        
  }
   
  $stmt = $results->fetch(PDO::FETCH_ASSOC);
var_dump($stmt);
*/
/*
$users = [];
$username = 'Aimi';
$users = get_user($username);
var_dump($users);
*/
/*

    try {
    $result = $pdo->prepare("SELECT email, username, password FROM users WHERE username = ?");
    $result->bindParam(1, $username, PDO::PARAM_STR);
    


    $result->execute();
    
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
   $stmt2 = $result->fetch(PDO::FETCH_ASSOC);
   
    var_dump($stmt2);
 */
/*$username = 'Aimi';
    try {
    $result = $pdo->prepare("SELECT password FROM users WHERE username = ?");
    $result->bindParam(1, $username, PDO::PARAM_STR);
    


    $result->execute();
    
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
   $user = $result->fetch();
var_dump($user);
    */
//require_once 'Forms/connection.php';
   
//$results = $pdo->query("SELECT id, username, password, email, about_me FROM users");
//echo $results->setFetchMode(PDO::FETCH_ASSOC);


//$user_info = get_user('aelias');
//var_dump($user_info);
//
//$hash = password_hash("dogs", PASSWORD_DEFAULT);
$hash= '$2y$10$U.Kz/PEubaCCitBD/56a3uH5gTk5n4KhTC7HLXAs5syvsjhXLkB.C';
    if (password_verify('testing', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
include 'Forms/login.php';
//include 'Forms/register.php';?>



<!--- Testing our forms above, commented out for now
<input type="submit" value="" />
//display('user', ['heading' => 'User', 'users' => $users, 'blog' => $blog]); 
//display('items', ['heading' => 'Blog', 'blog' => $blog]);
//display('users', ['heading' => 'All Users', 'users' => $users]);

 //if($_SERVER['REQUEST_METHOD'] == 'GET'): 
	//display('newitem');
//else: 
//echo display('item', \Blog\App\add_item($blog, $_POST) + ['heading' => 'New Item']); 

//endif; 
-->
</body>
</html>


