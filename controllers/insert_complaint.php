<?php 

	include 'db_connection.php';

if (isset($_POST['submit'])) {
	$headline = $_POST['your_headline'];
	$message = $_POST['your_message'];
	$sender = $_POST['your_sender'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../img/" . $filename;



	$query = "INSERT INTO complaint (headline, message, sender, status, filename, User_ID_complaint) VALUES ('".$headline."','".$message."','".$sender."','".$status."','".$filename."','".$sender."')";
	$result = $GLOBALS['mysqli']->query($query);

	if(!$result){
		die('There was an error running the query.');
	}else{
		header("Location: ../views/complaint.php");
	}

	if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
	
}	

?>