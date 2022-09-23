<?php

$host = "localhost"; 
$user = "root"; 
$password = "root"; 
$dbname = "capstone_project"; 

// establish connection with db
$GLOBALS['mysqli'] = new mysqli($host, $user, $password, $dbname);

?>