<?php 

include_once 'db_connection.php';
$sos_id =  $_POST['id'];
    if(isset($_POST['id'])){
        $sql = "DELETE FROM sos WHERE SOS_ID = '{$sos_id}'";
		
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/sos.php");
    }
?>