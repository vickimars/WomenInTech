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
    <?php include 'View/header.php';?>
    <title>BCD - <?php echo $row['Title'];?></title>
</head>
<body>
    <?php include 'View/bodynav.php';?>
    <div class="pages">
        <div class="headings"><h1><?php echo $row['Title'];?></h1></div>
		<?php	
                    echo '<div>';
                   echo '<img src="Uploads/Posts/'.$row['id'].".jpg\" class = \"img-responsive\">";
                    echo '<h5><p>Posted on '.date('jS M Y', strtotime($row['date'])).'</p></h5>';
                    echo '<h4><p>'.$row['Post'].'</p><h4>';				
                    echo '</div>';
		?>
	</div>
    <?php include 'View/footer.html';?>
</body>
</html>