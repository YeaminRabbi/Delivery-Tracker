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

    require_once "orders_and_calculation.php";

    $total_email_accepted=calculate_received_email($db);


      function calculate_received_email($db)
      {


       $sql="select count(*) as total from contactform as r where r.email_status=1;";   
        
        $result = mysqli_query($db,$sql);

        // Assoc array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
        // Free result set
        mysqli_free_result($result);
        
        return $row['total'];
     }






?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Email | Admin Dashboard</title>
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
                            
                            
                            <h4 class="page-title">Inbox</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Email</a></li>
                                <li class="breadcrumb-item active">Inbox</li>
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
                                    <a href="email.php">
                                        Inbox
                                     <span class="ml-1 active"><?= $total_email ?></span>
                                    </a>
                                     <a href="#" class="active">Complain Accepted
<span class="ml-1 active"><?= $total_email_accepted ?></span>
                                     </a>
                                </div>
                            </div>
                            <!-- End Left sidebar -->
                            
                                           


                            <!-- Right Sidebar -->
                            <div class="email-rightbar mb-3">
                                
                                <div class="card">

                                    <ul class="message-list">
                                   
                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from contactform as r where r.email_status=1;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {
                                                   
                                                ?>


                                                


                                    <li>
                                        <div class="col-mail col-mail-1">
                                            <div class="checkbox-wrapper-mail">
                                                <input type="checkbox" id="chk20">
                                                <label for="chk20" class="toggle"></label>
                                            </div>
                                            <a href="email_read.php?emailid=<?= $data['id'] ?>&email_id=<?= $data ['email_id'] ?>" class="title"><?= $data['username'] ?></a>
                                            <span class="star-toggle far fa-star"></span>
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            <a href="email_read.php?email_id=<?= $data['id'] ?>" class="subject"><span class="badge-warning badge mr-2">
                                                New Message 
                                            </span><?= $data['subject'] ?>.</span>
                                            </a>
                                            <div class="date"><?= $data['date'] ?></div>
                                        </div>
                                    </li>



                                              <?php 
                                                    }
                                                ?>


                                </ul>
                            </div> <!-- card -->

                          

                        </div> <!-- end Col-9 -->

                        </div>

                    </div><!-- End row -->

                </div>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>