<?php 
    require("sidebar.php");
    require("header.php");
    $uname = $_SESSION['id'];
?>
    <div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Property</h1>


<?php
    require('components/properties_table.php');
    require("footer.php"); 
?>