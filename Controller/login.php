<?php
/*
 * Login Functions 
 * 
 */


require_once 'Forms/functions.php';


session_start();

function login($username, $password) {
	$user = get_user($username);

	if(password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username; 
            header('Location: success.php');
        } else {
            die("Please log in");
	}
}

function logout() {
    session_destroy();
}

function require_login() {
    if (!isset($_SESSION['username'])) {
        header('Location: failure.php');
        exit;
    } 
}


/* Keeping original code for reference ( by JL/VM)
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
 $pdo = new PDO ($_POST['username'], $_POST['password']);
}
 //user_id, user_name, user_pass,

//Password Matching Validation 
if($_POST['password'] != $_POST['confirm_pword']){ 
$error_message = 'Passwords should match<br>'; 
}

$email = "john.doe@example.com";
?>

*/
