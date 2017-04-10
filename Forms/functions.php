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

function add_post($pdo,$post){
    //include 'connection.php';
    
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
    //include 'connection.php';
 //userdate to include in db?   
    $sql = 'INSERT INTO users(username, password, email, about_me) VALUES(?, ?, ?, ?)';
    
    try {
        $results = $pdo->prepare($sql);
        $results->bindValue(1, $user['username'], PDO::PARAM_STR);
		$results->bindValue(2, $user['password'], PDO::PARAM_STR);
		$results->bindValue(3, $user['email'], PDO::PARAM_STR);
		$results->bindValue(4, $user['bio'], PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}
