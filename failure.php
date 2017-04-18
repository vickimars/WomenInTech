<?php

/* 
 * Tester to check if failure
 */
?>
<html>
    <body>
       
        <div class="alert alert-danger" role="alert">
					<strong>Uh Oh!</strong> Look's like we can't get you in. Try again:
				   </div>
        Look's like we can't get you in. Try again:
       <?php 
       require_once 'Forms/connection.php';
       require_once 'Forms/functions.php';
       include 'Forms/login.php';
       ?>
    </body>
    
</html>

