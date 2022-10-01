<?php 

include_once 'db_connection.php';
$Property_ID =  $_POST['id'];
    if(isset($_POST['id'])){
        $sql = "DELETE FROM property WHERE Property_ID = '{$Property_ID}'";
 
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/properties.php");
    }
?>