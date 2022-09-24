
<?php 
session_start();
require("sidebar.php")?>
<?php require("header.php")?>     

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Welcome Back <?php print_r($_SESSION['id'] )?></h1>
        
        <?php
            echo $_SESSION['id'];
            echo $_SESSION['pwd'];
            echo $_SESSION['role'];
        ?>
        

    </div>
    <!-- /.container-fluid -->


<?php require("footer.php"); ?>
           
