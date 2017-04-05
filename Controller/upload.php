 <?php

namespace Controller;

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';

function upload_file() {
	if (empty($_FILES[InputKey])) {	//if no file uploaded
		die("You have not uploaded a file");
	}

	if ($_FILES[InputKey]['error'] > 0) { 
		die("value greater than zero" .[InputKey]['error']);//value of 0 would be a success
	}


	if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
		die(": " . $_FILES[InputKey]['You have uploaded an incorrect file type']);//not a jpeg//
	}


	$tmpFile = $_FILES[InputKey]['tmp_name'];//file moved to temporary location

	//DOMAIN SPECIFIC: ., move the file from a temporary location
	$dstFile = 'uploads/' . $_FILES[InputKey]['name'];

	if (!move_uploaded_file($tmpFile, $dstFile)) {//checks that the right file has been moved
		die("Handle Error");// ask why ! move uploaded file?
	}
		
	//Clean up the temp file
	if (file_exists($tmpFile)) {
		unlink($tmp); 
	}
}