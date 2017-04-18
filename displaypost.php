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
    <style> 
.newspaper {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
    -webkit-column-rule: 1px solid lightblue; /* Chrome, Safari, Opera */
    -moz-column-rule: 1px solid lightblue; /* Firefox */
    column-rule: 1px solid lightblue;
}

h2 {
    -webkit-column-span: all; /* Chrome, Safari, Opera */
    column-span: all;
}
</style>

</head>
<body>
    <h1>Blog</h1>
		<?php	

                    echo '<div class>';
                   echo '<img src="Uploads/Posts/'.$row['id'].".jpg\" class = \"img-responsive\">";
                    echo '<h5><p>Posted on '.date('jS M Y', strtotime($row['date'])).'</p></h5>';
                    echo '<div class ="newspaper"><h4><p>'.$row['Post'].'</p><h4>';				
                    echo '</div></div>';

		?>
	</div>
</body>
</html>