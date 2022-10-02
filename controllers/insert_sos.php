<?php 

	include 'db_connection.php';

	$type = $_POST['job_type'];
	$desc = $_POST['job_description'];
	$sender = $_POST['sender'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../img/" . $filename;


	$query = "INSERT INTO sos (SOS_Type, SOS_Description, filename, SOS_Status, User_ID_SOS) VALUES ('".$type."','".$desc."','".$filename."','Open','".$sender."')";

	$result = $GLOBALS['mysqli']->query($query);

	if(!$result){
		die('There was an error running the query.');
	}else{
		header("Location: ../views/sos.php");
	}

	if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

?>