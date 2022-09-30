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
                <h1 class="h3 mb-4 text-gray-800">Add New Complaint</h1>
                <br>
                    <form name="contact-form" action="../controllers/insert_complaint.php" method="post" id="contact-form" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="control-label h4" for="headline"><strong>Headline</strong><span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                        <input id="ctrl-headline" type="text" placeholder="Enter Headline" name="your_headline"  class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="control-label h4" for="message"><strong>Message</strong><span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                        <textarea placeholder="Enter Message" id="ctrl-message" required="" rows="5" name="your_message" class="htmleditor form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="control-label h4" for="sender"><strong>Sender</strong><span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                        <input id="ctrl-sender" type="text" value="'.$uname.'" name="your_sender"  class="form-control" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label class="control-label h4" for="uploadfile"><strong>Upload Attachment</strong><span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="">
                                        <input type="file" id="uploadfile" name="uploadfile" value="" required>    
                                        </select>
                                    </div>
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
   
        
    <h1 class="h3 mb-4 text-gray-800">Status Complaint</h1>


<?php
    require('components/complaint_table.php');
    require("footer.php"); 
?>