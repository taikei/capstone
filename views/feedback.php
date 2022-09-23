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
                <h1 class="h3 mb-4 text-gray-800">Add New Feedback</h1>
                <br>
                    <form name="feedback-form" action="../controllers/insert_feedback.php" method="POST" id="feedback-form">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="control-label h4" for="type"><strong>Feedback Type</strong><span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                    
                                        <select required="" name="type" class="custom-select" required>
                                            <option value="" disabled selected>- Select Feedback Type -</option>
                                            <option value="Comment">Comment</option>
                                            <option value="Suggestion">Suggestion</option>
                                            <option value="Question">Question</option>
                                        </select>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="control-label h4" for="feedback"><strong>Description</strong><span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea placeholder="Enter Feedback" rows="5" name="feedback" class="htmleditor form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" hidden>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-8">
                                        <input type="text" value="'.$uname.'" name="sender"  class="form-control" readonly/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group form-submit-btn-holder text-center col-sm-12">
                            <button class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" id="submit_form" >Submit</button>
                        </div>
                    </form>
                    <div class="response_msg"></div>
                    <br><br>';

    }

 ?>   
   
        
    <h1 class="h3 mb-4 text-gray-800">Feedback Status</h1>


<?php
    require('components/feedback_table.php');
    require("footer.php"); 
?>