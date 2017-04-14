<?php
// This is the home page of our application
?>


<!doctype html>
<html>
<head><title>Women in Tech Blog</title></head>

<body>

<h1>Women in Tech Blog</h1>


<?= 

include 'Forms/connection.php';
include 'Forms/functions.php';
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
$username = 'Aimi';
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

    

    
//require_once 'Forms/connection.php';
   
//$results = $pdo->query("SELECT id, username, password, email, about_me FROM users");
//echo $results->setFetchMode(PDO::FETCH_ASSOC);


//$user_info = get_user('aelias');
//var_dump($user_info);
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


