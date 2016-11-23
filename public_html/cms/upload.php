<?php 
    // CONNECT TO DATABASE
    include("dbconfig.php");
    
    if(!$dbconfig){
        echo "Connection Failed";
    }
    else {
    	
    		//Loop through each file
    		for($i=0; $i<count($_FILES['file']['name']); $i+=1) {
    			//Get the temp file path
    			$tmpFilePath = $_FILES['file']['tmp_name'][$i];
    			//Make sure we have a filepath
    			if($tmpFilePath != ""){
    				//save the filename
    				$shortname = $_FILES['file']['name'][$i];
    				//save the url and the file
    				$filePath = "../img/uploads" . date('d-m-Y-H-i-s').'-'.$_FILES['file']['name'][$i];
    				//Upload the file into the temp dir
    				if(move_uploaded_file($tmpFilePath, $filePath)) {
    					$files[] = $shortname;
    					//insert into db 
    					//use $shortname for the filename
    					//use $filePath for the relative url to the file
    				}
    			}
    		}
    	
    }
?>