<?php 
require("sidebar.php");
require("header.php");
include '../controllers/db_connection.php';
?>  



    <!-- Begin Page Content -->
    <div class="container-fluid">

        

        <!-- Main Content -->
        <div id="content">


            <div class="container-fluid">
                <!-- Page Heading -->
        <div class="h1 text-primary pt-4 pb-4">Welcome to Little Hoteliers Apartment Management System</div>
            <div class="row">
                <?php 

                    if($_SESSION['role'] == 'admin'){
                        
                        $sql = 'SELECT (SELECT COUNT(*) FROM complaint) AS COMPLAINTS, (SELECT COUNT(*) FROM feedback) AS FEEDBACKS, (SELECT COUNT(*) FROM sos) AS "SOS JOBS", (SELECT COUNT(*) FROM user) AS "TOTAL USERS";';
                        $result = $GLOBALS['mysqli']->query($sql);
                        $row = $result -> fetch_assoc();

                        foreach($row as $key => $value){
                            echo '
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        '.$key.'
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        '.$value.' 
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    }

                ?>
	       </div>

                        <div class="row">
                         <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">

                                        <!-- Card Header - Dropdown -->
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Welcome to Little Hoteliers Apartment Management System</h6>
                                            <div class="dropdown no-arrow">
                                            </div>	
                                        </div>
                                        
                                         <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="h3 text-warning">G'day <?php echo ($_SESSION['id'] )?>!</div>
                                            <br><br>
                                    		<div class="lead">
                                                This is your one stop shop for organising your property. Here you'll be able to check your user profile, submit a SOS job, complaint and feedback. if you have any questions, we're always here. Please feel free to call or email us. 
                                            </div>
                                            <br><br>
                                            <div class="h3">
                                                Have a wonderful day!!
                                            </div>
            					
                                            <div></div>
                                        </div>
                                </div>
                            </div>

                                    
                            <div class="col-xl-4 col-lg-5">
                                <div id="sparkline-1" hidden></div>
                                <div id="sparkline-2" hidden></div>
                                <div id="sparkline-3" hidden></div>

                                <div class="card-header border-0">
                                <h3 class="card-title">
                                    <i class="far fa-calendar-alt"></i>
                                    Calendar
                                </h3>
                                </div>

                                <div class="card-body pt-0">
                                    <div id="calendar" class="calendar1"></div>
                                </div>
                            </div>
                            </div>

                        </div>
                </div>
            </div>
            <!-- End of Main Content -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   



<?php require("footer.php"); ?>
           