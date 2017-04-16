<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<title>Upload your blog</title>
        <h1>Upload your blog</h1>
            <body>
<form method="post"  enctype="multipart/form-data" action="uploadDK.php">
<table>
<tr>
<td width="250">Name: </td>
<td>
<input name="fname" type="text" id="fname" /><br />
</td>
</tr>
<tr>
<td width="250">Email: </td>
<td>
<input name="email" type="text" id="email" /><br />
</td>
</tr>
<tr>
<td width="250">Gender: </td>
<td id="mainselection">
<select name="type" id="type">
    <option></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>

</select>
</td>
</tr>
<tr>
<td width="250">Blog: </td>
<td>
<textarea id="content" name="content" rows="10" cols="50" style="border-style:groove;box-shadow: 4px 4px 4px 4px #888888;"placeholder="Please write your blog here..."></textarea>
</td>
</tr>
<tr>
<td width="250">Add an image or file: </td>
<td>
<input name="image" type="file" id="file">
</td>
</tr>

<tr>
<td width="250"> </td>
<td>
<input name="add" type="submit" id="add" value="Submit Blog">
<form onsubmit="myFunction()"></form>

<script>
    function myFunction() {
 location.href = "index";
}
    </script>
</td>
</tr>
</table>
</form>
    </head>
        
    </body>
</html>
