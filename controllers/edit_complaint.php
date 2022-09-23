<?php 

include_once 'db_connection.php';
$complaint_id =  $_POST['id'];
$complaint_headline =  $_POST['headline'];
$complaint_message =  $_POST['message'];
$complaint_status =  $_POST['status'];

    if(isset($_POST['id'])){

        $sql = "UPDATE complaint SET headline = '{$complaint_headline}', message = '{$complaint_message}', status = '{$complaint_status}' WHERE Complaint_ID = '{$complaint_id}'";
        
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/complaint.php");
    }
?>