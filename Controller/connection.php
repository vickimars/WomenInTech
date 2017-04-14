<?php
Namespace Controller;

<<<<<<< HEAD
        $dsn = "mysql:host=127.0.0.1:3306;dbname=BlogDatabase"  ;
        $username = "root";
=======
        $dsn = "mysql:host=127.0.0.1:3306;dbname=library"  ;
        $dbusername = "root";
>>>>>>> refs/remotes/origin/master
        $password = null;
        $options = null;
try {
      $pdo = new PDO($dsn, $dbusername, $password);
} catch (PDOException $e) {
	die($e->getMessage());  //die() for illustration
					//always handle errors 
					//better than die!
}
  
