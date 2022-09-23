<?php 


    include '../controllers/db_connection.php';
    if($_SESSION['role'] == 'admin'){
        $query = 'SELECT * FROM complaint';
    }elseif($_SESSION['role'] == 'user'){
        $query = "SELECT * FROM complaint WHERE User_ID_complaint LIKE '{$_SESSION['id']}'";
    }
    
    $result = $GLOBALS['mysqli']->query($query);

    if ($result == TRUE) {
?>
        <table class="table table-striped">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Headline</th>
                <th scope="col">Message</th>
                <th scope="col">Time</th>
                <th scope="col">Sender</th>
                <th scope="col">Status</th>
                <th scope="col">Update</th>
                <th scope="col">Remove</th>
            </tr>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {

        ?>
                    <tr>
                        <td scope="row">
                            <?php 
                                echo $data['Complaint_ID'];
                                echo "<br>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['headline'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['message'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['date'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['sender'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['status'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#edit'.$data['Complaint_ID']?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Edit Modal -->
                                <div class="modal fade" id="<?php echo 'edit'.$data['Complaint_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form method="POST" action="../controllers/edit_complaint.php">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit the complaint?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="complaint_id">Complaint ID:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Complaint_ID"]?>" name="complaint_id"  class="form-control" readonly/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="headline">Headline:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["headline"]?>" name="headline" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="message">Messages:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea rows="4" name="message" class="form-control"><?php echo $data['message']?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="status">Status:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="">
                                                                <select name="status" class="custom-select">
                                                                    <option value="Urgent">Urgent</option>
                                                                    <option value="Not Urgent">Not Urgent</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                                    <input type="submit" class="btn btn-primary" value="Save"/>
                                                    <input name="id" value="<?php echo $data["Complaint_ID"]?>" hidden />
                                            </div>

                                      </form>
                                    </div>
                                  </div>
                                </div>
                            <!-- Edit Modal  -->


                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#remove'.$data['Complaint_ID']?>">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>

                            <!-- Remove Modal -->
                                <div class="modal fade" id="<?php echo 'remove'.$data['Complaint_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Withdraw the complaint ID: <?php echo $data['Complaint_ID'];?>?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to remove this complaint?
                                      </div>
                                      <div class="modal-footer">
                                        <form method="POST" action="../controllers/remove_complaint.php">
                                            <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                            <input type="submit" class="btn btn-danger" value="Remove"/>
                                            <input name="id" value="<?php echo $data["Complaint_ID"]?>" hidden />
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <!-- Remove Modal -->

                        </td>
                    </tr>
        <?php
            }
        ?>

        </table>
    </div>

        <?php
            } else { echo "Error!"; }
        ?>





