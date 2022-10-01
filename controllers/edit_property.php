<?php 

include_once 'db_connection.php';
$Property_ID =  $_POST['id'];
$property_name =  $_POST['Name'];
$property_email =  $_POST['Email'];
$property_contact =  $_POST['Contact'];
$property_unit =  $_POST['Unit'];

    if(isset($_POST['id'])){

        $sql = "UPDATE property SET Name = '{$property_name}', Email= '{$property_email}', Contact= '{$property_contact}', Unit= '{$property_unit}' WHERE Property_ID = '{$Property_ID}'";

        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/properties.php");
    }
?>