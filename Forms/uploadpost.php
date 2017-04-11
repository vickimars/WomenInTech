
<!-- New Post Form -->

<div id="postbox">

<form id="new_post" name="new_post" method="post" action="">

<p><label for="title">Title</label><br />

<input type="text" id="title" value="" tabindex="1" size="20" name="title" />

</p>

<p><label for="description">Description</label><br />

<textarea id="description" tabindex="3" name="description" cols="50" rows="6"></textarea>

</p>


<p><label for="post_tags">Tags</label>

<input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>

<p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

<input type="hidden" name="post_type" id="post_type" value="post" />

<input type="hidden" name="action" value="post" />

<button onclick="myFunction()">upload</button>

<p id="demo"></p>

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
