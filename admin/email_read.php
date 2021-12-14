<?php
    

  require_once "../users/dbConfig.php";
    session_start();

    //Session check for only ADMIN login
    if($_SESSION['admin_login']==1)
    {
        $admin=$_SESSION['USER'];

    }   
    else
    {
        header("Location: admin_login.php");
    }

    //using custom function to fetch all data of USER and ORDER
    $complain=getData($db,"contactform",$_GET['email_id']);
    



    //FUNCTION for fetching all data 
    function getData($db,$table,$email_id){

        $sql="Select * FROM ".$table." WHERE id=".$email_id.";";
        $result = mysqli_query($db,$sql);

        // Assoc array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
        // Free result set
        mysqli_free_result($result);

        return $row;
    }
    require_once "orders_and_calculation.php";

?>






<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Email Read | Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                           
                            
                            <h4 class="page-title">Email Read</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Go to Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="">Email</a></li>
                                <li class="breadcrumb-item active">Email Read</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Left sidebar -->
                            <div class="email-leftbar card">
                                
                                <div class="mail-list m-t-20">
                                    <a href="#" class="active">Inbox <span class="ml-1"><?= $total_email ?></span></a>
                                    <a href="#">Complain Accepted<span class="ml-1">(18)</span></a>
                                </div>
                            </div>
                            <!-- End Left sidebar -->
    
    
                            <!-- Right Sidebar -->
                            <div class="email-rightbar mb-3">
                                
                                <div class="card">
                                  
                                    <div class="card-body">
    
                                        <div class="media m-b-30">
                                            <img class="d-flex mr-3 rounded-circle thumb-md" src="assets/images/users/user-1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4 class="font-14 m-0"><?= $complain['username']; ?></h4>
                                                <small class="text-muted"><?= $complain['email']; ?></small>
                                            </div>
                                        </div>
    
                                        <h4 class="mt-0 font-16"><?= $complain['subject']; ?></h4>
    
                                       <p><?= $complain['message']; ?></p>
                                        <hr/>

                                          


                                      
                                    </div>
    
                                </div>
    
                            </div> <!-- end Col-9 -->
                           
                            <div class="container">
                              <div class="row">
                                 <a href="readEmail_backend.php?emailID=<?= $_GET['email_id'];?>&btn=assign" class="btn btn-success btn-lg btn-block">Email Accepted</a>
                             </div>
                             <br>
                             
                           </div>

                        </div>
    
                    </div><!-- End row -->

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
                        2020 © All Rights <span class="d-none d-sm-inline-block"> - Reserved <i class="mdi mdi-heart text-danger"></i> by Salahuddinit</span>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>