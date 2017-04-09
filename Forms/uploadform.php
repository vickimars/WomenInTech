<form action="upload.php" 
	method="post"      
	enctype="multipart/form-data" >

  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000" />

  <input type="file" name="myfile" />
  <input type="submit" value="send" />
</form>