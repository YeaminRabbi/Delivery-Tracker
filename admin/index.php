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
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            
                            
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Welcome to Delivery Dashboard</li>
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
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                            <h3 class="mb-3 mt-0"><?= $total_orders ?></h3>
                                            <div class="">
                                                <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Weekly</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Last 7 days</h6>
                                            <h3 class="mb-3 mt-0">BDT <?= $seven_day_income ?></h3>
                                            <div class="">
                                                <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Total Users</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Active Users</h6>
                                            <h1 class="mb-3 mt-0"><?= $total_users ?></h1>
                                            
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Pr. Sold</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Product Sold</h6>
                                            <h3 class="mb-3 mt-0"><?= $total_product_sold ?></h3>
                                            <div class="">
                                                <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="header-title mb-4">Yearly Sales Report</h4>
                                            <div class="p-3">
                                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true" style="text-align: center;">2020</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false" style="text-align: center;">2021</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false" style="text-align: center;">2022</a>
                                                    </li>
                                                </ul>
                                                
                                                <div class="tab-content" style="justify-content: center; display: flex;">
                                                    <div class="tab-pane show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
                                                        <div class="p-3">
                                                            <h2 style="text-align: center;">BDT <?= yearly_income($db, 2020) ?></h2>
                                                            <p class="text-muted text-center">Total Income</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
                                                        <div class="p-3">
                                                            <h2 style="text-align: center;">BDT <?= yearly_income($db, 2021) ?></h2>
                                                            <p class="text-muted text-center">Total Income</p>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                                                        <div class="p-3">
                                                            <h2 style="text-align: center;">BDT <?= yearly_income($db, 2022) ?></h2>
                                                            <p class="text-muted text-center">Total Income</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        
                       
                    </div>
                    <!-- end row -->


                    <div class="row" id="TABLE_SECTION">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Latest Order</h4>
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">(#)Order Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date/Time</th>
                                              
                                                <th scope="col" colspan="2">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from orders as r join users as u on r.user_id=u.id where r.pending_status=1 ORDER BY order_id DESC;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {

                                                    $img_path="../users/".$data['image'];
                                                ?>

                                                <tr>
                                                    <th scope="row">#<?= $data['order_id'] ?></th>
                                                    <td>
                                                        <div>
                                                            <img src="<?= $img_path; ?>" alt="" class="thumb-md rounded-circle mr-2"><?= $data['username'] ?>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-M, Y', strtotime($data['order_placed_time'])); ?>
                                                        <p class="font-13 text-muted mb-0"><?= date('h:i:s a', strtotime($data['order_placed_time'])); ?></p>
                                                    </td>
                                                   
                                                    <td><span class="badge badge-warning badge-pill"><i class="mdi mdi-checkbox-blank-circle text-warning"></i>Pending</span></td>
                                                    <td>
                                                        <div>
                                                            <a href="UserCard.php?userid=<?= $data['id'] ?>&orderid=<?= $data['order_id'] ?>" class="btn btn-primary btn-sm">show</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php 
                                                    }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

      

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Approved Order</h4>
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">(#)Order Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date/Time</th>
                                              
                                                <th scope="col" colspan="2">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from orders as r join users as u on r.user_id=u.id where r.approved_status=1 ORDER BY order_id DESC;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {

                                                    $img_path="../users/".$data['image'];
                                                ?>

                                                <tr>
                                                    <th scope="row">#<?= $data['order_id'] ?></th>
                                                    <td>
                                                        <div>
                                                            <img src="<?= $img_path; ?>" alt="" class="thumb-md rounded-circle mr-2"><?= $data['username'] ?>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-M, Y', strtotime($data['order_placed_time'])); ?>
                                                        <p class="font-13 text-muted mb-0"><?= date('h:i:s a', strtotime($data['order_placed_time'])); ?></p>
                                                    </td>
                                                   
                                                    <td><span class="badge badge-success badge-pill"><i class="mdi mdi-checkbox-blank-circle text-success"></i>Approved</span></td>
                                                    <td>
                                                        <div>
                                                            <a href="UserCard.php?userid=<?= $data['id'] ?>&orderid=<?= $data['order_id'] ?>" class="btn btn-primary btn-sm">show</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php 
                                                    }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                     

                   <!-- Approve ,Delivered Cancel Table -->

                   <div class="row" id="TABLE_SECTION">
                       
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Canceled Order</h4>
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">(#)Order Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date/Time</th>
                                              
                                                <th scope="col" colspan="2">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from orders as r join users as u on r.user_id=u.id where r.cancel_status=1 ORDER BY order_id DESC;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {

                                                    $img_path="../users/".$data['image'];
                                                ?>

                                                <tr>
                                                    <th scope="row">#<?= $data['order_id'] ?></th>
                                                    <td>
                                                        <div>
                                                            <img src="<?= $img_path; ?>" alt="" class="thumb-md rounded-circle mr-2"><?= $data['username'] ?>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-M, Y', strtotime($data['order_placed_time'])); ?>
                                                        <p class="font-13 text-muted mb-0"><?= date('h:i:s a', strtotime($data['order_placed_time'])); ?></p>
                                                    </td>
                                                   
                                                    <td><span class="badge badge-danger badge-pill"><i class="mdi mdi-checkbox-blank-circle text-warning"></i>Canceled</span></td>
                                                    <td>
                                                        <div>
                                                            <a href="UserCard.php?userid=<?= $data['id'] ?>&orderid=<?= $data['order_id'] ?>" class="btn btn-primary btn-sm">show</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php 
                                                    }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                      

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Delivered Order</h4>
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">(#)Order Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date/Time</th>
                                              
                                                <th scope="col" colspan="2">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from orders as r join users as u on r.user_id=u.id where r.delivery_status=1 ORDER BY order_id DESC;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {

                                                    $img_path="../users/".$data['image'];
                                                ?>

                                                <tr>
                                                    <th scope="row">#<?= $data['order_id'] ?></th>
                                                    <td>
                                                        <div>
                                                            <img src="<?= $img_path; ?>" alt="" class="thumb-md rounded-circle mr-2"><?= $data['username'] ?>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-M, Y', strtotime($data['order_placed_time'])); ?>
                                                        <p class="font-13 text-muted mb-0"><?= date('h:i:s a', strtotime($data['order_placed_time'])); ?></p>
                                                    </td>
                                                   
                                                    <td><span class="badge badge-primary badge-pill"><i class="mdi mdi-checkbox-blank-circle text-warning">
                                                        
                                                    </i>Delivered</span></td>
                                                    <td>
                                                        <div>
                                                            <a href="UserCard.php?userid=<?= $data['id'] ?>&orderid=<?= $data['order_id'] ?>" class="btn btn-primary btn-sm">show</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php 
                                                    }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Payment Request</h4>
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">(#)Order Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date/Time</th>
                                                <th scope="col">Pay Method</th>
                                                <th scope="col" colspan="2">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from orders as r join users as u on r.user_id=u.id where r.payment_request not like 'NULL' and payment_status=0 ORDER BY order_id DESC;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {

                                                    $img_path="../users/".$data['image'];
                                                ?>

                                                <tr>
                                                    <th scope="row">#<?= $data['order_id'] ?></th>
                                                    <td>
                                                        <div>
                                                            <img src="<?= $img_path; ?>" alt="" class="thumb-md rounded-circle mr-2"><?= $data['username'] ?>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-M, Y', strtotime($data['order_placed_time'])); ?>
                                                        <p class="font-13 text-muted mb-0"><?= date('h:i:s a', strtotime($data['order_placed_time'])); ?></p>
                                                    </td>
                                                    
                                                     <td><?= $data['payment_request'] ?></td>
                                                    <td><span class="badge badge-danger badge-pill"><i class="mdi mdi-checkbox-blank-circle text-warning">
                                                        
                                                    </i>Payment Requested</span></td>

                                                    <td>
                                                        <div>
                                                            <a href="user_payment.php?userid=<?= $data['id'] ?>&orderid=<?= $data['order_id'] ?>" class="btn btn-primary btn-sm">show</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php 
                                                    }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>






                         <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Payment Complete</h4>
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">(#)Order Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date/Time</th>
                                                <th scope="col">Status</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                    date_default_timezone_set('Asia/Dhaka');
                                                    $sql="select * from orders as r join users as u on r.user_id=u.id where r.payment_status=1 ORDER BY order_id DESC;"; 
                                                    $statement = $pdo->prepare($sql);
                                                    $statement->execute();

                                                    $ROWS = $statement->fetchAll();

                                                    foreach ($ROWS as $key => $data) {

                                                    $img_path="../users/".$data['image'];
                                                ?>

                                                <tr>
                                                    <th scope="row">#<?= $data['order_id'] ?></th>
                                                    <td>
                                                        <div>
                                                            <img src="<?= $img_path; ?>" alt="" class="thumb-md rounded-circle mr-2"><?= $data['username'] ?>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-M, Y', strtotime($data['order_placed_time'])); ?>
                                                        <p class="font-13 text-muted mb-0"><?= date('h:i:s a', strtotime($data['order_placed_time'])); ?></p>
                                                    </td>
                                                   
                                                    <td><span class="badge badge-secondary badge-pill"><i class="mdi mdi-checkbox-blank-circle text-warning">
                                                        
                                                    </i>Payment Complete</span></td>
                                                    
                                                </tr>

                                                <?php 
                                                    }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <!-- end row -->



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
                        2020 <span class="d-none d-sm-inline-block">All Rights Reserved<i class="mdi mdi-heart text-danger"></i> by SalahuddinIT</span>
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


        






    </body>

</html>