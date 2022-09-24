<?php

$host = "localhost"; 
$user = "admin"; 
$password = "Hello321!"; 
$dbname = "capstone_project"; 

// establish connection with db
$GLOBALS['mysqli'] = new mysqli($host, $user, $password, $dbname);

?>
