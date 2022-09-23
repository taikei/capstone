<?php 


    include '../controllers/db_connection.php';
    if($_SESSION['role'] == 'admin'){
        $query = 'SELECT * FROM feedback';
    }elseif($_SESSION['role'] == 'user'){
        $query = "SELECT * FROM feedback WHERE User_ID_feedback LIKE '{$_SESSION['id']}'";
    }
    
    $result = $GLOBALS['mysqli']->query($query);

    if ($result == TRUE) {
?>
        <table class="table table-striped">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Time</th>
                <th scope="col">Sender</th>
                <th scope="col">Update</th>
                <th scope="col">Remove</th>
            </tr>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {

        ?>
                    <tr>
                        <td scope="row">
                            <?php 
                                echo $data['Feedback_ID'];
                                echo "<br>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['feedback_type'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['feedback_description'];
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
                                echo $data['User_ID_feedback'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#edit'.$data['Feedback_ID']?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Edit Modal -->
                                <div class="modal fade" id="<?php echo 'edit'.$data['Feedback_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form method="POST" action="../controllers/edit_feedback.php">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit the feedback?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="feedback_id">Feedback ID:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Feedback_ID"]?>" name="feedback_id"  class="form-control" readonly/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="status">Feedback Type:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="">
                                                                <select required="" name="type" class="custom-select" required>
                                                                    <option value="<?php echo $data["feedback_type"]?>" disabled selected><?php echo $data["feedback_type"]?></option>
                                                                    <option value="Comment">Comment</option>
                                                                    <option value="Suggestion">Suggestion</option>
                                                                    <option value="Question">Question</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="description">Description:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea rows="4" name="description" class="form-control"><?php echo $data['feedback_description']?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                                    <input type="submit" class="btn btn-primary" value="Save"/>
                                            </div>

                                      </form>
                                    </div>
                                  </div>
                                </div>
                            <!-- Edit Modal  -->


                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#remove'.$data['Feedback_ID']?>">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>

                            <!-- Remove Modal -->
                                <div class="modal fade" id="<?php echo 'remove'.$data['Feedback_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Withdraw the Feedback ID: <?php echo $data['Feedback_ID'];?>?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to remove this feedback?
                                      </div>
                                      <div class="modal-footer">
                                        <form method="POST" action="../controllers/remove_feedback.php">
                                            <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                            <input type="submit" class="btn btn-danger" value="Remove"/>
                                            <input name="feedback_id" value="<?php echo $data["Feedback_ID"]?>" hidden />
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





