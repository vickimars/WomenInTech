<?php

session_start();
 include 'Controller/connection.php'; 
//include 'session.php';
 //adding some changes for commit testing
$login_session = $_SESSION['username'];
?>

<html>
    <body>
        <h1>Success!
        </h1>
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="/WomenInTech/Forms/logout.php">Log Out</a></b>
        <p>
        <ul>
            <li><a href='account.php'>Account Information</a></li>
            <li><a href='uploadblogpost.php'>Upload a post</a></li>
        </ul>
        </p>    
         <?php include 'View/footer.html';?>
    </body>
    
</html>