<?php 
require('Controller/connection.php');

$stmt = $pdo->prepare('SELECT id, Title, Post, username, date FROM blogposts WHERE id = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();
//if post does not exist redirect user.

if($row['id'] == ''){
	header('Location: ./');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['Title'];?></title>
</head>
<body>
    <h1>Blog</h1>
		<?php	
                    echo '<div>';
                    echo '<h1>'.$row['Title'].'</h1>';
                    echo '<p>Posted on '.date('jS M Y', strtotime($row['date'])).'</p>';
                    echo '<p>Posted by '.$row['username'].'</p>';
                    echo '<p>'.$row['Post'].'</p>';
                    echo '</div>';
		?>
	</div>
</body>
</html>