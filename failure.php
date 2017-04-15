<?php

/* 
 * Tester to check if failure
 */
?>
<html>
    <body>
        <h1>Uh Oh!
        </h1>
        Look's like we can't get you in. Try again:
       <?php 
       require_once 'Forms/connection.php';
       require_once 'Forms/functions.php';
       include 'Forms/login.php';
       ?>
    </body>
    
</html>

