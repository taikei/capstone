<?php 

    include 'db_connection.php';

    $type = $_POST['type'];
    $feedback = $_POST['feedback'];
    $sender = $_POST['sender'];


    $query = "INSERT INTO feedback (feedback_type, feedback_description, User_ID_feedback) VALUES ('".$type."','".$feedback."','".$sender."')";
    $result = $GLOBALS['mysqli']->query($query);

    if(!$result){
        die('There was an error running the query.');
    }else{
        header("Location: ../views/feedback.php");
    }


?>