<?php
include_once "../config.php";

// Check user login or not
// if(!isset($_SESSION['uname'])){
//     header('Location: ../index.php');
// }

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../index.php');
}
?>

<?php require("../layout/nav.php")?>
<?php require("../layout/header.php")?>     

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">This is Dashboard Page</h1>
                    <?php
                        echo $_SESSION['id'];
                        echo $_SESSION['pwd'];
                        echo $_SESSION['role'];
                    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
    <?php require("../layout/footer.php"); ?>
           
