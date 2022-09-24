<?php

// session_start();
$_SESSION['id'] = $_POST['txt_uname'];
$_SESSION['pwd'] = $_POST['txt_pwd'];
$_SESSION['role'] = $_POST['role'];

include 'db_connection.php';


// determine which DB table to query.
function set_id_variable($role){

    $id = 'User_ID';
    if($role == 'admin'){
        $id = 'Admin_ID';
    }elseif($role == 'support'){
        $id = 'Support_ID';
    }
    return $id;
}

$id_type = set_id_variable($_SESSION['role']);


$_SESSION['mysqli'] = $mysqli;
if (!$mysqli) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM {$_SESSION['role']} WHERE $id_type LIKE '{$_SESSION['id']}' AND Password LIKE '{$_SESSION['pwd']}'";

echo $sql;

// $result = $mysqli->query($sql);

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     header("Location: ../views/dashboard.php");
    
// } else {
//     header("Location: ../index.php");
// }




?>

