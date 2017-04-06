<?php

include 'controller/login.php';
//namespace Controller//


//function login($user, $username, $pword) {//
	//$user = \Cart\Db\read_user($user, $username, $pword);//

	if($users && password_verify($pword, $users['user_password'])) {
		$_SESSION['user_name'] = $username;
		header('Location: product.php');
	} else {
		trigger_error('ERROR: login failed');
	}


function logout() {
	session_destroy();
}

function require_login() {
	if(empty($_SESSION['username'])) {
		header('Location: login.php');
	}
}
