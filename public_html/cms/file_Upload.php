<?php 
    if(!empty($_FILES)){
        // CONNECT TO DATABASE
        include("dbconfig.php");
        
        if(!$dbconfig){
            echo "Connection Failed";
        }
        else {
            $targetDir = "../img/uploads/";
            $fileName = $_FILES['file']['name'];
            $targetFile = $targetDir.$fileName;
            
            if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
                //insert file information into db table
                $dbconfig->query("INSERT INTO files_table (file_name, uploaded) VALUES('".$fileName."','".date("Y-m-d H:i:s")."')");
            }
        }
    }
?>