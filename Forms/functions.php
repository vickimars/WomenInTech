<?php
/*
 * Application functions: create, read, update, delete
 */

function get_post_list() {
include 'connection.php';
  
    try {
    return $db->query('SELECT post_id, title, post, author, username, date FROM posts');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return array();
    }
}




//updated Get functions (AE)
function get_user($username) {
include 'Forms/connection.php';
    
    try {
    $results = $pdo->prepare("SELECT username, password, email, about_me FROM users WHERE username = ?");
    $results->bindValue(1, $username, PDO::PARAM_STR);

    $results->execute();
    
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
   
    return $results->fetchAll();
}

function get_all_users() {
include 'Forms/connection.php';
    
    try {
    $results = $pdo->prepare("SELECT * FROM users");
    $results->execute();
    
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        
    }
   
    return $results->fetchAll();
}

function add_post($pdo,$post){
include 'connection.php';
    
    $sql = 'INSERT INTO posts(title, post, author, username, date) VALUES(?, ?, ?, ?, ?)';
    
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $post['title'], PDO::PARAM_STR);
        $results->bindValue(2, $post['post'], PDO::PARAM_STR);
		$results->bindValue(3, $post['author'], PDO::PARAM_STR);
		$results->bindValue(4, $post['username'], PDO::PARAM_STR);
		$results->bindValue(5, $post['date'], PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}


//This function has been tested and works!
function add_user($pdo, $user){
include 'Forms/connection.php';
 //userdate to include in db?   
    $sql = 'INSERT INTO users(username, password, email, about_me) VALUES(?, ?, ?, ?)';
    
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $user['username'], PDO::PARAM_STR);
		$results->bindValue(2, password_hash($user['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
		$results->bindValue(3, $user['email'], PDO::PARAM_STR);
		$results->bindValue(4, $user['bio'], PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}
