<?php require('Controller/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'View/header.php';
    
    //a?>

</head>
<body>
     <?php include 'View/bodynav.php';?>
    
    <!-- about-page -->
	
    <div class="pages">
        <div class="about">
            <div class="headings" bg-color="white">
			<div class="about-text">
				 <h1>All Posts To Date</h1>
			</div>	
				<div class="blog">
		<div class="blog-left">
			
         
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
			
				<div class="clearfix"> </div></div>
			
		     
				
            

       
                                <div class="blog-right"><h3>Posts By Tags:</h3>
                                    <p>
                                    <h4><span class="label label-warning"><a href="postbytag.php?tag=phptag">PHP</a></span><br></h4>
                                    <h4><span class="label label-warning"><a href="postbytag.php?tag=mojitotag">Mojito</a></span><br></h4>
                                    <h4><span class="label label-warning"><a href="postbytag.php?tag=funnytag">Funny</a></span><br></h4>
                                    <h4><span class="label label-warning"><a href="postbytag.php?tag=journeytag">Journey</a></span><br></h4>
                                
                                </p>
                                </div>
         
             </div>
     </div>
    <div class="clearfix"> </div>		
<!-- //about-page -->
		</div>
	</div>


    
  
     <?php include 'View/footer.html';?> 
</body>
</html>
