<?php 

	include 'db_connection.php';

	$type = $_POST['job_type'];
	$desc = $_POST['job_description'];
	$sender = $_POST['sender'];

	$query = "INSERT INTO sos (SOS_Type, SOS_Description, SOS_Status, User_ID_SOS) VALUES ('".$type."','".$desc."','Not Started','".$sender."')";
	$result = $GLOBALS['mysqli']->query($query);

	if(!$result){
		die('There was an error running the query.');
	}else{
		header("Location: ../views/sos.php");
	}


?>