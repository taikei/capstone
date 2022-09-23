<?php 

include_once 'db_connection.php';
$complaint_id =  $_POST['id'];
    if(isset($_POST['id'])){
        $sql = "DELETE FROM complaint WHERE Complaint_ID = '{$complaint_id}'";
 
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/complaint.php");
    }
?>