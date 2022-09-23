<?php 

include_once 'db_connection.php';
$sos_id =  $_POST['id'];
$sos_type =  $_POST['type'];
$sos_desc =  $_POST['desc'];

    if(isset($_POST['id'])){

        $sql = "UPDATE sos SET SOS_Type = '{$sos_type}', SOS_Description = '{$sos_desc}' WHERE SOS_ID = '{$sos_id}';";
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/sos.php");
    }
?>