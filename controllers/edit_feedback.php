<?php 

include_once 'db_connection.php';
$id =  $_POST['feedback_id'];
$type =  $_POST['type'];
$description =  $_POST['description'];


    if(isset($_POST['feedback_id'])){

        $sql = "UPDATE feedback SET feedback_type = '{$type}', feedback_description= '{$description}' WHERE Feedback_ID = '{$id}'";
        echo $sql;
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/feedback.php");
    }
?>