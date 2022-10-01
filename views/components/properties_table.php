<?php 


    include '../controllers/db_connection.php';
    if($_SESSION['role'] == 'admin'){
        $query = 'SELECT * FROM property';
    }elseif($_SESSION['role'] == 'user'){
        $query = "SELECT * FROM property WHERE User_ID_property LIKE '{$_SESSION['id']}'";
    }
    
    $result = $GLOBALS['mysqli']->query($query);

    if ($result == TRUE) {
?>
        <table class="table table-striped">
            <tr>
                <th scope="col">Property ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Unit</th>
                <th scope="col">Tenant</th>
                <th scope="col">Update</th>
                <?php   if($_SESSION['role'] == 'admin'){
                    echo '
                        <th scope="col">Remove</th>
                    ';
                }
                            
                ?>
            </tr>
            
        <?php
            while ($data = mysqli_fetch_assoc($result)) {
        ?>
                    <tr>
                        <td scope="row">
                            <?php 
                                echo $data['Property_ID'];
                                echo "<br>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['Name'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['Email'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['Contact'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['Unit'];
                                echo "<br>"; 
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo $data['User_ID_property'];
                                echo "<br>"; 
                            ?>
                        </td>


                        <td>
                            <a href="" data-toggle="modal" data-target="<?php echo '#edit'.$data['Property_ID']?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Edit Modal -->
                                <div class="modal fade" id="<?php echo 'edit'.$data['Property_ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form method="POST" action="../controllers/edit_property.php">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit the property?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="id">Property ID:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Property_ID"]?>" name="id"  class="form-control" readonly/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="Name">Name:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Name"]?>" name="Name" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="Email">Email:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Email"]?>" name="Email" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="Contact">Contact:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Contact"]?>" name="Contact" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label class="control-label" for="Unit">Unit:</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" value="<?php echo $data["Unit"]?>" name="Unit" class="form-control"/>
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

                        <?php
                            if($_SESSION['role'] == 'admin'){
                                    echo '
                                        <td>
                                         <a href="" data-toggle="modal" data-target="#remove'.$data['Property_ID'].'">
                                            <i class="fa-regular fa-trash-can"></i>
                                         </a>

                                        <!-- Remove Modal -->
                                        <div class="modal fade" id="remove'.$data['Property_ID'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Remove the property?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                Are you sure you want to remove this property?
                                              </div>
                                              <div class="modal-footer">
                                                <form method="POST" action="../controllers/remove_property.php">
                                                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Cancel"/>
                                                    <input type="submit" class="btn btn-danger" value="Remove"/>
                                                    <input name="id" value="'.$data["Property_ID"].'" hidden />
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <!-- Remove Modal -->

                                </td>
                                    ';
                            }


                        ?>
                        
                    </tr>
        <?php
            }
        ?>

        </table>
    </div>

        <?php
            } else { echo "Error!"; }
        ?>





