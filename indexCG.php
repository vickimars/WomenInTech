<?php require('Controller/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'View/header.php';?>

</head>
<body>
     <?php include 'View/bodynav.php';?>
     <div class="pages">
        <div class="headings">
	<h1>All Posts To Date</h1>
            <?php
                try {
                    $stmt = $pdo->query('SELECT id, Title, Post, username, date FROM blogposts ORDER BY id DESC');
			while($row = $stmt->fetch()){
				echo '<div>';
                                echo '<h1><a href="displaypost.php?id='.$row['id'].'">'.$row['Title'].'</a></h1>';
                                echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['date'])).'</p>';
				//echo '<p>'.$row['Post'].'</p>';				
				echo '<p><a href="displaypost.php?id='.$row['id'].'">Read more</a></p>';				
				echo '</div>';
				}
		} catch(Exception $e) {
		 echo $e->getMessage();
	}
?>
        </div></div>
     <?php include 'View/footer.html';?>
</body>
</html>
