<?php
    
    require_once "../users/dbConfig.php";
    session_start();


    if($_SESSION['admin_login']==1)
    {
        $admin=$_SESSION['USER'];

    }   
    else
    {
        header("Location: admin_login.php");
    }


    function allData($pdo)
    {
        $sql="Select * FROM delivery_man_details";

        $statement = $pdo->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;
    }

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Panel</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">


    </head>

    <body>

        <!-- Navigation Bar-->
            <?php include 'admin_header_menu.php'; ?>
        <!-- End Navigation Bar-->
  

        <!-- page wrapper start -->
        <div class="wrapper">
           

            <div class="page-content-wrapper">

                <div class="container" style="margin-top: 100px;">
      
                      <div class="m-2">
                        <h2 style="display: inline;margin-left:40%;">Delivery Man Details</h2>  
                      
                        <button class="btn btn-primary" style="color:white;float:right;margin-right: 120px;" data-toggle="modal" data-target="#ADDuser"><i class="fa fa-plus" aria-hidden="true">&nbsp Add User</i></button>
                      </div>

                      <table class="table table-hover text-center table-bordered table-dark">
                        <thead class="thead-dark">
                          <tr>

                            <th>#SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>NID / Birth Certificate</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                            
                          </tr>
                        </thead>
                        <tbody>

                            <?php
                                $info = allDATA($pdo,1);
                                foreach ($info as $key => $val) {
                            ?>

                            <tr>
                                
                                <td><?= $key+1; ?></td>
                                <td><img src="<?= $val['image']; ?>" style="width: 80px;"></td>
                                <td><?= $val['name']; ?></td>
                                <td><?= $val['contact']; ?></td>
                                
                                <?php
                                    if($val['NID_front']!="NULL" && $val['NID_back']!="NULL")
                                    {
                                ?>

                                <td><img src="<?= $val['NID_front']; ?>" style="width:50px;"> <img src="<?= $val['NID_back']; ?>" style="width:50px;"></td>
                                
                                <?php 
                                    }

                                    if($val['birth_certificate']!="NULL")
                                    {
                                ?>

                                <td><img src="<?= $val['birth_certificate']; ?>" style="width:50px;"></td>

                                <?php 
                                    }
                                ?>
                                
                                

                                <td><?= $val['present_address']; ?></td>
                                <td><?= $val['permanent_address']; ?></td>
                            </tr>   
                        
                            <?php } ?>                  
                        </tbody>
                      </table>
                    </div>

                    <!-- The Modal -->
                        <div class="modal fade" id="ADDuser">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Adding User</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <form action="delivery_man_details_backend.php" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">
                                
                                <div class="form-group">
                                    <label for="username">Name:</label>
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Enter Name" name="name"required>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file"  name="person_file" placeholder="Insert Image" class="form-control" autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact:</label>
                                    <input type="tel" name="contact" placeholder="01********* (11 digits)" pattern="[0-9]{11}" class="form-control" autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label for="nid_front_file">NID Front:</label>
                                    <input type="file"  name="nid_front_file" placeholder="Insert Image" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="nid_back_file">NID Back:</label>
                                    <input type="file"  name="nid_back_file" placeholder="Insert Image" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="birth_certificate_file"><br>Or<br><br>Birth Cetificate: (optional)</label>
                                    <input type="file"  name="birth_certificate_file" placeholder="Insert Image" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="present_address">Present Address:</label>
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Present Address" name="present_address" required>
                                </div>

                                <div class="form-group">
                                    <label for="permanent_address">Permanent Address:</label>
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Pemanent Address" name="permanent_address" required>
                                </div>
                                
                                
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btn-USERadd">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>

                
            <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        2018 © Agroxa <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="../plugins/peity/jquery.peity.min.js"></script>

        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>

        <script src="assets/pages/dashboard.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        






    </body>

</html>


<?php require_once 'errorCheck.php'; ?>