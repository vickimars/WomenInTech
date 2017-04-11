<?php
/*
 * Application functions: create, read, update, delete
 * get_post_list, get_user_list, get_user, get_user_id
 * add_user, add_post (includes update)
 * delete_post, delete_user
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

function get_user_list() {
    //include 'connection.php';
    
    try {
    return $db->query('SELECT id, username, pword, email, user_date, user_level FROM users');
    //userdate to add to db?
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
include 'Forms/connection.php';
    if ($id) {
        $sql = 'UPDATE posts SET title = ?, post = ?, author = ?, username = ?, date = ? WHERE id = ?';
    } else {
    $sql = 'INSERT INTO posts(title, post, author, username, date) VALUES(?, ?, ?, ?, ?)';
    }
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
     if ($id) {
        $sql = 'UPDATE users SET username = ?, password = ?, email = ? about_me = ?'; 
    } else {
    $sql = 'INSERT INTO users(username, password, email, about_me) VALUES(?, ?, ?, ?)';
    }
     
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

//Delete functions
function delete_post($id) {
    //include 'connection.php';
    $sql = 'DELETE FROM posts WHERE id = ?';
  
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return false;
    }
    return true;
}

function delete_user($id) {
    //include 'connection.php';
    $sql = 'DELETE FROM users WHERE id = ?';
  
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return false;
    }
    return true;
}