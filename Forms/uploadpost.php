<?php
include 'Controller/upload.php';
include 'Forms/connection.php';
include 'Forms/functions.php';
?>
<!-- New Post Form -->

<div id="postbox">

<form id="new_post" name="new_post" method="post" action="">

<p><label for="title">Title</label><br />

<input type="text" id="title" value="" tabindex="1" size="20" name="Title" />

</p>

<p><label for="description">Description</label><br />

<textarea id="description" tabindex="3" name="Post" cols="50" rows="6"></textarea>

</p>
<p><label for="title">Username</label><br />

<input type="text" id="username" value="" tabindex="1" size="20" name="Username" />

</p>
<p>Tags:</p>
<input type="hidden" name="phptag" value="0" />
<input type="hidden" name="mojitotag" value="0" />
<input type="hidden" name="funnytag" value="0" />
<input type="hidden" name="journeytag" value="0" />

<p><label><input type="checkbox" name ="phptag" value = "1"> PHP</label><br /></p>
<p><label><input type="checkbox" name ="mojitotag" value = "1"> Mojito</label><br /></p>
<p><label><input type="checkbox" name ="funnytag" value = "1"> Funny</label><br /></p>
<p><label><input type="checkbox" name ="journeytag" value = "1"> Journey</label><br /></p>








<!--<p><label for="post_tags">Tags</label>

<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>-->

<p align="left"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" onclick="myFunction()"/></p>

<input type="hidden" name="post_type" id="post_type" value="post" />

<input type="hidden" name="action" value="post" />



<p id="demo"></p>

<?php
if(isset($_POST["submit"])){
    add_post($pdo, $_POST);
}
?>
<!-- pop-up-->
<script>
function myFunction() {
    var x;
    if (confirm("Are you sure you want to upload this form!") == true) {
        x = "Yes";
    } else {
        x = "Cancel";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>

</form>

</div>
