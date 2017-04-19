<?php
session_start();
/* 
 * User Account Details
 *
 */

require_once 'forms/functions.php';
$user_info = get_user($_SESSION['username']);
$user_posts = get_user_posts($_SESSION['username']);

/*
 * If session = user id, display user info using get_user() function
 * else display login/register page
 */
 ?>

<html>
    <head>
         <?php include 'view/header.php';?>
        <title>Account Info</title>
    </head>
    <body>
        <?php include 'view/bodynav.php';?>
 <div class="pages">
        <div class="headings">
            <div>
        <h1>Your Account</h1>
        <p>
            Username:<br>
        <ul><b><?php 
        print_r($user_info['username']);?></b></ul>
            <br>
            
        </p>
        <p>
            Email:<br>
            <ul><b><?php
            print_r($user_info['email']);?></b></ul>
            <br>    
        </p>
        <p>
            Posts by you:
            <?php
            foreach ($user_posts as $post_id){
                print_r("<ul>".$post_id['Title']."</ul>");
            }
            ?>

        </p>
  <div> 
        <p>
            Update your account information:
            
        </p>
        
  </div></div></div></div>
         <?php include 'view/footer.html';?>
        
    </body>    
    
    
    
</html>