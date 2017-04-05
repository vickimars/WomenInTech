<?php

/* Form Required Field Validation */
foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$error_message = "Please complete all fields";
	break;
	}
}
/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_password']){ 
$error_message = 'Passwords should match<br>'; 
}

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}

?>
