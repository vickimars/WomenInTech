<?php

/* 
 * Tester to check if failure
 */
?>
<html>
    <head><?php include 'View/header.php';?></head>
    <body>
       <?php include 'View/bodynav.php';?>
         <div class="pages">
        <div class="headings">
        <div class="alert alert-danger" role="alert">
					<strong>Uh Oh!</strong> Look's like we can't get you in. Try again:
				   </div>
        
       <?php 
       require_once 'Controller/connection.php';
       require_once 'Forms/functions.php';
       include 'Forms/login.php';
       ?>

        </div>
        </div>
     <?php include 'View/footer.html';?>
    </body>
    
</html>

