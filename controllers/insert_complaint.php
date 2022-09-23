<?php 

	include 'db_connection.php';

	$headline = $_POST['your_headline'];
	$message = $_POST['your_message'];
	$sender = $_POST['your_sender'];
	$status = $_POST['your_status'];


	$query = "INSERT INTO complaint (headline, message, sender, status, User_ID_complaint) VALUES ('".$headline."','".$message."','".$sender."','".$status."','".$sender."')";
	$result = $GLOBALS['mysqli']->query($query);

	if(!$result){
		die('There was an error running the query.');
	}else{
		header("Location: ../views/complaint.php");
	}


?>