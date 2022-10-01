<?php 


    include '../controllers/db_connection.php';
    if($_SESSION['role'] == 'admin'){
        $query = 'SELECT * FROM sos';
    }elseif($_SESSION['role'] == 'user'){
        $query = "SELECT * FROM sos WHERE User_ID_SOS LIKE '{$_SESSION['id']}'";
    }elseif($_SESSION['role'] == 'support'){
        $query = "SELECT * FROM sos WHERE Support_ID_SOS LIKE '{$_SESSION['id']}'";
    }
    
    $result = $GLOBALS['mysqli']->query($query);

    if ($result == TRUE) {
?>
        <table class="table table-striped">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Job Type</th>
                <th scope="col">Job Description</th>
                <th scope="col">Attachment</th>
                <th scope="col">Job Allocated to</th>
                <th scope="col">Sender</th>
                <th scope="col">Status</th>
                <th scope="col">Update</th>
                <th scope="col">Remove</th>
            </tr>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {
        ?>
                    <tr scope="row">
                        <td>
                            <?php 
                                echo $data['SOS_ID'];
                                echo "<br>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['SOS_Type'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['SOS_Description'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#filename'.$data['SOS_ID']?>">
                            <?php echo $data['filename'];?>
                            </a>

                            <!-- filename Modal -->
                            <div class="modal fade" id="<?php echo 'filename'.$data['SOS_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <br><br><br>
                                    <img src="../img/<?php echo $data['filename']; ?>" width="500">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <!-- filename Modal -->
                                
                            <?php echo "<br>"; ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['Support_ID_SOS'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['User_ID_SOS'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['SOS_Status'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#edit'.$data['SOS_ID']?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Edit Modal -->
                                <div class="modal fade" id="<?php echo 'edit'.$data['SOS_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form method="POST" action="../controllers/edit_sos.php">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit SOS job?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="complaint_id">SOS ID:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["SOS_ID"]?>" name="sos_id"  class="form-control" readonly/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="headline">Job Type:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <select id="job_type" name="type" class="custom-select" required>
                                                                <option value="<?php echo $data["SOS_Type"]?>" selected><?php echo $data["SOS_Type"]?></option>
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
                                                        <div class="col-12">
                                                            <label class="control-label" for="desc">Description:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea rows="4" name="desc" class="form-control"><?php echo $data['SOS_Description']?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                                    <input type="submit" class="btn btn-primary" value="Save"/>
                                                    <input name="id" value="<?php echo $data["SOS_ID"]?>" hidden />
                                            </div>

                                      </form>
                                    </div>
                                  </div>
                                </div>
                            <!-- Edit Modal  -->


                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#remove'.$data['SOS_ID']?>">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>

                            <!-- Remove Modal -->
                                <div class="modal fade" id="<?php echo 'remove'.$data['SOS_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete SOS Job</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to remove this SOS job?
                                      </div>
                                      <div class="modal-footer">
                                        <form method="POST" action="../controllers/remove_sos.php">
                                            <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                            <input type="submit" class="btn btn-danger" value="Remove"/>
                                            <input name="id" value="<?php echo $data["SOS_ID"]?>" hidden />
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

