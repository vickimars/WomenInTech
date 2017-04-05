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
    return $db->query('SELECT id, username, pword, email, user_date, user_level FROM users');
    //userdate to add to db?
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

function add_user($username, $pword, $email, $user_date, $user_level){
    //include 'connection.php';
 //userdate to include in db?   
    $sql = 'INSERT INTO users(username, $pword, $email, $user_date, $user_level) VALUES(?, ?, ?, ?, ?)';
    
    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $username, PDO::PARAM_STR);
		$results->bindValue(2, $pword, PDO::PARAM_STR);
		$results->bindValue(3, $email, PDO::PARAM_STR);
		//$results->bindValue(4, $user_date, PDO::PARAM_STR);
		$results->bindValue(5, $user_level, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}
