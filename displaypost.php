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
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
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
     <?php include 'View/bodynav.php';?>
 <div class="pages">
        <div class="headings">
 
		<?php	

                    echo '<div>';
                   echo '<img src="Uploads/Posts/'.$row['id'].".jpg\" class = \"img-responsive\">";
                   echo '<h2>'.$row['Title'].'</h2>';
                   echo 'Written by: '.$row['username'];
                    echo '<p>Posted on '.date('jS M Y', strtotime($row['date'])).'</p>';
                    echo '<div class ="newspaper"><h5><p>'.$row['Post'].'</p><h5>';				
                    echo '</div></div>';

		?>
	</div>
 </div>
    <div class="footer"><?php include 'View/footer.html';?></div>
</body>
</html>