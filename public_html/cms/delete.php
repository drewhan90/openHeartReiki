<?php
include("dbconfig.php");

if(!$dbconfig){

	  echo "Connection Failed";
}
else {

	$deleteQuery = "DELETE FROM files_table WHERE id = '$_GET[id]'";

 	$result = mysqli_query($dbconfig, $deleteQuery);



 	// if delete successful

 	if($result) {

 	// send to data display page

 		header('Location: dashboard.php');

 	}

 	else {

 		echo "Could not delete";
 	}

}

?>

