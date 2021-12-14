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

    //getting user ID and Order ID using get method
    $orderID=$_GET['orderid'];
    $userID=$_GET['userid'];

    //using custom function to fetch all data of USER and ORDER
    $user=getData($db,"users","id",$userID);
    $order=getData($db,"orders","order_id",$orderID);

    $USER_img_path="../users/".$user['image'];
    $ORDER_img_path="../users/".$order['package_image'];

    //FUNCTION for fetching all data 
    function getData($db,$table,$column_key,$search_key){

        $sql="Select * FROM ".$table." WHERE ".$column_key." = '".$search_key."';";
        $result = mysqli_query($db,$sql);

        // Assoc array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
        // Free result set
        mysqli_free_result($result);

        return $row;
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Dashboard | Total Users</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
           <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <!-- Navigation Bar-->
         <?php include 'admin_header_menu.php'; ?>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
           
                    <div class="row">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                         <strong>Hello My Name is <?= $user['username']; ?>!</strong> I want to deliver an order.Could you please approve me ?
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                <div class="container-fluid">
                    <div class="row">
                        
                          
                        <div class="col-md-12 col-lg-12 col-xl-3">
    
                            <div class="card m-b-30">
                                <img class="card-img-top img-fluid" src="<?= $USER_img_path; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-16 mt-0" style="text-align: center;"><?= $user['username']; ?></h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="text-align: center;"><?= $user['profession']; ?></li>
                                    <li class="list-group-item" style="text-align: center;"><?= $user['contact']; ?></li>
                                    <li class="list-group-item" style="text-align: center;"><?= $user['email']; ?></li>
                                    <li class="list-group-item" style="text-align: center;"><?= $user['bkash']; ?></li>
                                    <li class="list-group-item" style="text-align: center;"><?= $user['nagad']; ?></li>
                                    <li class="list-group-item" style="text-align: center;"><?= $user['rocket']; ?></li>
                                    <li class="list-group-item" style="text-align: center;font-weight: 700;color: green">
                                        <?php 
                                            
                                            if ($order['delivery_status']=="1") {
                                                ?>
                                                Delivered
                                                <?php
                                            }

                                            elseif ($order['cancel_status']=="1") {
                                                ?>
                                                Canceled
                                                <?php
                                            }
                                            elseif($order['approved_status']=="1"){
                                                ?>
                                                Approved
                                                <?php
                                            }
                                            elseif($order['pending_status']=="1"){
                                                ?>
                                                PENDING
                                                <?php
                                            }

                                            elseif($order['payment_status']=="1"){
                                                ?>
                                                Payment
                                                <?php
                                            }



                                                        
                                        ?>
                                            
                                    </li>

                                </ul>
                                
                            </div>
    
                        </div><!-- end col -->
    
                       
    
    
                       
                    </div>
                    <!-- end row -->


                    </div>



                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                   
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-hover table-dark table-bordered">
                                                <thead class="bg-info">
                                                <tr>
                                                   
                                                    <th data-priority="1">Product Image</th>
                                                    <th data-priority="1">Pickup address</th>
                                                    <th data-priority="3">Pickup Name</th>
                                                    <th data-priority="1">Pickup Contact</th>
                                                    <th data-priority="3">Pickedup Instructions</th>
                                                    <th data-priority="3">Delivery Type</th>
                                                    <th data-priority="6">Pickup Area</th>
                                                    <th data-priority="6">Total Amount</th>
                                                    <th data-priority="6">Delivery Name</th>
                                                    <th data-priority="6">Delivery Contact</th>
                                                    <th data-priority="6">Delivery Address</th>
                                                    <th data-priority="6">Delivery Instructions</th>
                                                    <th data-priority="6">Delivery Deadline</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    
                                                    <td><img src="<?= $ORDER_img_path; ?>" width="80"></td>
                                                    <td><?= $order['pickup_address']; ?></td>
                                                    <td><?= $user['username']; ?></td>
                                                    <td><?= $user['contact']; ?></td>
                                                    <td><?= $order['pickup_instruction']; ?></td>
                                                    <td><?= $order['delivery_type']; ?></td>
                                                    <td><?= $order['pickup_area']; ?></td>
                                                    <td><?= $order['delivery_charge']+$order['delivery_payment']; ?> Tk</td>

                                                    <td><?= $order['delivery_name']; ?></td>
                                                    <td><?= $order['delivery_contact']; ?></td>
                                                    <td><?= $order['delivery_address']; ?></td>
                                                    <td><?= $order['delivery_instruction']; ?></td>
                                                    <td><?= $order['delivery_deadline']; ?></td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
                <!-- end container-fluid -->








                </div>
                <!-- end container-fluid -->
                
                <div class="container">
                    <div class="row">
                        <!-- <button type="button" class="btn btn-primary btn-lg btn-block">Assigned</button>
                        <button type="button" class="btn btn-warning btn-lg btn-block">Out For Delivery</button>
                        <button type="button" class="btn btn-success btn-lg btn-block">Completed</button> -->

                        

                        <a href="UserCard_backend.php?orderID=<?= $order['order_id'];?>&btn=assign" class="btn btn-primary btn-lg btn-block">Assigned</a>

                        <a href="UserCard_backend.php?orderID=<?= $order['order_id'];?>&btn=pending" class="btn btn-danger btn-lg btn-block">Pending</a>

                        <a href="UserCard_backend.php?orderID=<?= $order['order_id'];?>&btn=cancel" class="btn btn-warning btn-lg btn-block">Canceled</a>
                        
                        <a href="UserCard_backend.php?orderID=<?= $order['order_id'];?>&btn=completed" class="btn btn-success btn-lg btn-block">Complete</a>


                         <!-- <a href="UserCard_backend.php?orderID=<?= $order['order_id'];?>&btn=payment" class="btn btn-success btn-lg btn-block">Payment Done</a> -->

                       


                    </div>
                </div>




        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        2020 <span class="d-none d-sm-inline-block"> - All Right Reserved <i class="mdi mdi-heart text-danger"></i>Salahuddinit</span>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>


    </body>

</html>