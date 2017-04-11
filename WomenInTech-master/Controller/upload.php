 <?php
 include 'forms/uploadpost.php';
 
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] )) {

	// Do some minor form validation to make sure there is content
	if (isset ($_POST['title'])) {
		$title =  $_POST['title'];
	} else {
		echo 'Please enter a title';
	}
	if (isset ($_POST['description'])) {
		$description = $_POST['description'];
	} else {
		echo 'Please enter the content';
	}
	$tags = $_POST['post_tags'];

	// Add the content of the form to $post as an array
	$post = array(
		'post_title'	=> $title,
		'post_content'	=> $description,
		'post_category'	=> $_POST['cat'],  // Usable for custom taxonomies too
		'tags_input'	=> $tags,
		'post_status'	=> 'publish',			// Choose: publish, preview, future, etc.
		'post_type'	=> $_POST['post_type']  // Use a custom post type if you want to
	);
	
} // end IF

; 

?>