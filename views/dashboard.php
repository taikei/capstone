<?php require("sidebar.php")?>
<?php require("header.php")?>  

<?php
    $connection = mysqli_connect("localhost", "myusername", "mypassword", 
                                                 "capstone_project");
      
    if (mysqli_connect_errno())
    {
        echo "Database connection failed.";
    }
	?>   

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">
		Welcome to Little Hoteliers Apartment Management System, </h1>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"> 
					</h1>

					</div>
    <!-- /.container-fluid -->

	<!DOCTYPE html>
<html lang="en">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Complaints</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
											

<?php      
    $query = "SELECT Complaint_ID, headline FROM complaint";
      
    $result = mysqli_query($connection, $query);
      
    if ($result)
    {
        $row = mysqli_num_rows($result);
          
           if ($row)
              {
                 printf("" . $row);
              }
        mysqli_free_result($result);
    }
?>
											
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Feedbacks</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
<?php      
    $query = "SELECT Feedback_ID, feedback_type FROM feedback";
      
    $result = mysqli_query($connection, $query);
      
    if ($result)
    {
        $row = mysqli_num_rows($result);
          
           if ($row)
              {
                 printf("" . $row);
              }
        mysqli_free_result($result);
    }

?>											
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SOS Jobs
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
													
<?php      
    $query = "SELECT SOS_ID, SOS_Type FROM sos";
      
    $result = mysqli_query($connection, $query);
      
    if ($result)
    {
        $row = mysqli_num_rows($result);
          
           if ($row)
              {
                 printf("" . $row);
              }
        mysqli_free_result($result);
    }

?>
													
													</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
											
<?php      
    $query = "SELECT User_ID, Password FROM user";
      
    $result = mysqli_query($connection, $query);
      
    if ($result)
    {
        $row = mysqli_num_rows($result);
          
           if ($row)
              {
                 printf("" . $row);
              }
        mysqli_free_result($result);
    }

?>
											
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Welcome to Little Hoteliers Apartment Management System</h6>
                                    <div class="dropdown no-arrow">
                                    </div>
									
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        
					G'day <?php print_r($_SESSION['id'] )?>,<br>
					
					This is your one stop shop for organising your property. <br><br>
					
					Here you'll be able to check your user profile, submit a SOS job, complaint and feedback <br><br>
					
					if you have any questions, we're always here. <br>
					Please feel free to call or email us.<br><br>
					
					We hope you have a wonderful day.
					
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Current News</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" height="1000px">
                                    <div class="chart-pie pt-1 pb-2" id="calvin">

<button id="find-me">Show my location</button><br />
<p id="status"></p>
<a id="map-link" target="_blank"></a>

<script>
function geoFindMe() {

  const status = document.querySelector('#status');
  const mapLink = document.querySelector('#map-link');

  mapLink.href = '';
  mapLink.textContent = '';

  function success(position) {
    const latitude  = position.coords.latitude;
    const longitude = position.coords.longitude;

    status.textContent = '';
    mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
    mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
  }

  function error() {
    status.textContent = 'Unable to retrieve your location';
  }

  if (!navigator.geolocation) {
    status.textContent = 'Geolocation is not supported by your browser';
  } else {
    status.textContent = 'Locating…';
    navigator.geolocation.getCurrentPosition(success, error);
  }

}

document.querySelector('#find-me').addEventListener('click', geoFindMe);

</script>

<script>

var url = 'https://newsapi.org/v2/everything?q=tesla&from=2022-08-23&sortBy=publishedAt&apiKey=f587893d38774a528f5f0b0f92addefb';

var req = new Request(url);

fetch(req)
    .then(function(response) {
		return articles = response.json();
		//
    }).then(function(obj){
		console.log(obj);
		$("#calvin").append(`<h4>${obj.articles[0].title}</h4>`);
		$("#calvin").append('<br>');
		$("#calvin").append(obj.articles[0].content);
	});

</script>	

					
                                    </div>

                                </div>
								
								
                            </div>
				

				
<link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="../vendor/fontawesome-free/css/fontawesome.css">
  
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



<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../plugins/sparklines/sparkline.js"></script>
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php require("footer.php"); ?>
           