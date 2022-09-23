<?php 
    require("sidebar.php");
    require("header.php");
    $uname = $_SESSION['id'];
?>
    <div class="container-fluid">

<?php 

 if($_SESSION['role'] == 'user'){

        echo 
           '
                <h1 class="h3 mb-4 text-gray-800">Add New SOS Jobs</h1>
                <br>
                    <form name="sos_form" action="../controllers/insert_sos.php" method="POST" id="sos_form">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label class="control-label h4" for="Job Type"><strong>Job Type</strong><span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                            <select id="job_type" name="job_type" class="custom-select" required>
                                                <option value="" disabled selected>- Select Job Type -</option>
                                                <option value="Electrical System Repairs">Electrical System Repairs</option>
                                                <option value="Emergency Maintenance">Emergency Maintenance</option>
                                                <option value="Pest Control">Pest Control</option>
                                                <option value="Property Damage">Property Damage</option>
                                                <option value="Wear and Tear Repairs">Wear and Tear Repairs</option>
                                                <option value="Other">Other</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label class="control-label h4" for="job_description"><strong>Description</strong><span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                            <textarea placeholder="Enter Description" id="job_description" required rows="5" name="job_description" class="htmleditor form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" hidden>
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                            <input id="sender" type="text" value="'.$uname.'" name="sender"  class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="form-group form-submit-btn-holder text-center col-sm-12">
                            <button class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" id="submit_form" >Submit</button>
                        </div>
                    </form>
                    <div class="response_msg"></div>
                    <br><br>;';

    }

 ?>   
   
        
    <h1 class="h3 mb-4 text-gray-800">SOS Jobs Status</h1>


<?php
    require('components/sos_table.php');
    require("footer.php"); 
?>