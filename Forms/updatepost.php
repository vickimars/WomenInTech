<?php
include 'Controller/upload.php';
include 'Forms/connection.php';
include 'Forms/functions.php';
?>
<!-- New Post Form -->

<div id="postbox">

<form id="new_post" name="new_post" method="post" action="">
<p><label for="id">Post ID</label><br />

<input type="text" id="id" value="" tabindex="1" size="20" name="id" />

</p>
<p><label for="title">Title</label><br />

<input type="text" id="title" value="" tabindex="1" size="20" name="Title" />

</p>

<p><label for="description">Description</label><br />

<textarea id="description" tabindex="3" name="Post" cols="50" rows="6"></textarea>

</p>



<!--<p><label for="post_tags">Tags</label>

<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>-->

<p align="left"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" onclick="myFunction()"/></p>

<input type="hidden" name="post_type" id="post_type" value="post" />

<input type="hidden" name="action" value="post" />



<p id="demo"></p>

<?php
update_bland($pdo);
if(isset($_POST["submit"])){
    update_post($pdo, $_POST);
}
?>

</form>

</div>
