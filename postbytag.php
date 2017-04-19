<?php 
require('Controller/connection.php');
$tag = $_GET['tag'];
$sql = "SELECT id, Title, Post, username, date FROM blogposts WHERE $tag = 1 ORDER BY id DESC";




if(!ISSET($_GET['tag'])){
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
            <h3><span class="label label-warning"><?php echo ($tag)?></span></h3>
		<?php	/*

                    echo '<div>';
                   echo '<img src="Uploads/Posts/'.$row['id'].".jpg\" class = \"img-responsive\">";
                   echo '<h2>'.$row['Title'].'</h2>';
                   echo 'Written by: '.$row['username'];
                    echo '<p>Posted on '.date('jS M Y', strtotime($row['date'])).'</p>';
                    echo '<div class ="newspaper"><h5><p>'.$row['Post'].'</p><h5>';				
                    echo '</div></div>';*/

		?>
                        <?php
                       
                try {
                    $stmt = $pdo->query($sql);
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
	</div>
 </div>
    <div class="footer"><?php include 'View/footer.html';?></div>
</body>
</html>