<?php
/*
 * Login Functions 
 * 
 */

function login($username,$pass) {
  include 'Controller/connection.php';  
session_start();	
    try {
        
    $result = $pdo->prepare("SELECT password FROM users WHERE username = ?");
    $result->bindParam(1, $username, PDO::PARAM_STR);
    $result->execute();
    
    } catch (Exception $e) {
        
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
    
$user = $result->fetch();
   

	if(password_verify($pass, $user['password'])) {
            $_SESSION['username'] = $username; 
            echo "login successful, ";
            echo ($_SESSION['username'])."!";
            header('Location: /WomenInTech/successful.php');
            
        } else {
           
            echo "Password incorrect";
            header('Location: /WomenInTech/failure.php');
	}
}

function logout() {
    session_destroy();
}

function require_login() {
    if (!isset($_SESSION['username'])) {
        header('Location: /WomenInTech/userlogin.php');
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
=======
 ob_start();
 session_start();
 if( isset($_SESSION['username'])!="" ){
  header("Location: index.php");
 }
 include_once 'connection.php';
 
 //include 'forms/login.php';
 

 $error = false;


 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $username = trim($_POST['name']);
  $username = strip_tags($name);
  $username = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $password = trim($_POST['pass']);
  $password = strip_tags($pass);
  $password = htmlspecialchars($pass);
  
  // basic name validation
  if (empty($username)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "The e-mail you ave provided  is already in use.";
   }
  }
  // password validation
  if (empty($password)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "your password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $password);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($username);
    unset($email);
    unset($password);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
 }
  


*/
