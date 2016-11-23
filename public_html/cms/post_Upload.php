<?php
if(isset($_POST['post-blog'])){
						        // CONNECT TO DATABASE
	include("dbconfig.php");

	if(!$dbconfig){
		echo "Connection Failed";
	}
	else {
		$title = mysqli_real_escape_string($dbconfig,$_POST['title']);
		$category = mysqli_real_escape_string($dbconfig,$_POST['category']);
		$thumbnail = mysqli_real_escape_string($dbconfig,$_POST['thumbnail']);
		$comment = mysqli_real_escape_string($dbconfig,$_POST['editor1']);

		if(isset($_POST['title']) AND isset($_POST['editor1'])){
			$dbconfig->query("INSERT INTO blog_table (title, category, thumbnail, comment, uploaded) VALUES('".$title."','".$category."','".$thumbnail."','".$comment."','".date("Y-m-d")."')");
		}
	}
}
?>