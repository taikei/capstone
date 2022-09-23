<?php 

include_once 'db_connection.php';
$id = $_POST['feedback_id'];

    if(isset($_POST['feedback_id'])){

        $sql = "DELETE FROM feedback WHERE Feedback_ID = '{$id}'";
        echo $sql;
        $GLOBALS['mysqli']->query($sql);
        $GLOBALS['mysqli']->close();
        header("Location: ../views/feedback.php");
    }
?>