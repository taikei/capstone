<?php 

include_once 'db_connection.php';

$sos_id =  $_POST['id'];
$sos_type =  $_POST['type'];
$sos_desc =  $_POST['desc'];
$sos_support = $_POST['support'];
$sos_status = $_POST['status'];

    if(isset($_POST['id'])){

        $sql = "UPDATE sos SET SOS_Type = '{$sos_type}', SOS_Description = '{$sos_desc}', SOS_Status = '{$sos_status}', Support_ID_SOS = '{$sos_support}' WHERE SOS_ID = '{$sos_id}';";

        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/sos.php");
    }
?>