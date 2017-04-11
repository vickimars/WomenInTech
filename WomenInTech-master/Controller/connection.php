<?php
Namespace Controller;

        $dsn = "mysql:host=127.0.0.1:3306;dbname=BlogDatabase"  ;
        $username = "root";
        $password = null;
        $options = null;
try {
      $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
	die($e->getMessage());  //die() for illustration
					//always handle errors 
					//better than die!
}
  
