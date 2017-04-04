<?php
//application functions: create, read, update, delete

function get_post_list() {
    //include 'connection.php';
  
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
    return $db->query('SELECT user_id, user_name, user_pass, user_email, user_date, user_level FROM users');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "</br>";
        return array();
    }
}

function add_post($title, $post, $author, $username, $date){
    //include 'connection.php';
    
    $sql = 'INSERT INTO posts(title, post, author, username, date) VALUES(?, ?, ?, ?, ?)';
    
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $title, PDO::PARAM_STR);
        $results->bindValue(2, $post, PDO::PARAM_STR);
		$results->bindValue(3, $author, PDO::PARAM_STR);
		$results->bindValue(4, $username, PDO::PARAM_STR);
		$results->bindValue(5, $date, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function add_user($user_name, $user_pass, $user_email, $user_date, $user_level){
    //include 'connection.php';
    
    $sql = 'INSERT INTO users(user_name, $user_pass, $user_email, $user_date, $user_level) VALUES(?, ?, ?, ?, ?)';
    
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $user_name, PDO::PARAM_STR);
		$results->bindValue(2, $user_pass, PDO::PARAM_STR);
		$results->bindValue(3, $user_email, PDO::PARAM_STR);
		$results->bindValue(4, $user_date, PDO::PARAM_STR);
		$results->bindValue(5, $user_level, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}
