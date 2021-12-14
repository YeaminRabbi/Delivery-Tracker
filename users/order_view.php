<?php
    
    require_once "dbConfig.php";
    session_start();

    if($_SESSION['user_login']==1)
    {
        $user=$_SESSION['USER'];

    }   
    else
    {
        header("Location: login.php");
    }
    
    if (empty($_GET['id'])) {
        header("Location: user_courier_order.php");
    }

    $orderID=$_GET['id'];
    
    $orderDetails=orderInfo($db,"order_id",$orderID);




    function orderInfo($db,$column_key,$search_key){
        
        $sql="Select * FROM orders WHERE ".$column_key." = '".$search_key."';";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $row;
    }
?>



<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<?php include 'header.php'; ?>
<title>Latest Order View </title>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
<?php include 'header_aside_bar.php'; ?>

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Order View</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ecommerce.html">Ecommerce</a></li>
                   
                            </ul>
                        </div>

                       
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <!-- Records Header Start -->
                    <div class="records--header">
                        <div class="title fa-shopping-bag">
                            <h3 class="h3">Delivery Order View </h3>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>
                
                <div class="panel">

                    <!-- View Order Start -->
                    <div class="records--body">
                        <div class="title">
                            <h6 class="h6">Order #<?= $orderDetails['order_id'] ?><span class="text-lightergray"> - <?= $orderDetails['order_placed_time'] ?></span></h6>

                        </div>

                        <!-- Tabs Nav Start -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#tab01" data-toggle="tab" class="nav-link active">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab02" data-toggle="tab" class="nav-link">Order Details</a>
                            </li>
                        </ul>
                        <!-- Tabs Nav End -->

                        <!-- Tab Content Start -->
                        <div class="tab-content">
                            <!-- Tab Pane Start -->
                            <div class="tab-pane fade show active" id="tab01">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="subtitle">Order Information</h4>

                                        <table class="table table-simple">
                                            <tbody>
                                                <tr>
                                                    <td>Pickup Address:</td>
                                                    <th><?= $orderDetails['pickup_address'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Pickup Contact Name:</td>
                                                    <th><?= $orderDetails['pickup_name'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Pickup Contact Number:</td>
                                                    <th><?= $orderDetails['pickup_contact'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Total Amount:</td>
                                                    <th>BDT <?= $orderDetails['delivery_charge']+$orderDetails['delivery_payment'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Pickup Instructions:</td>
                                                    <th><?= $orderDetails['pickup_instruction'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Amount To Be Collected:</td>
                                                    <th>BDT <?= $orderDetails['delivery_payment'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Type:</td>
                                                    <th><?= $orderDetails['delivery_type'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Charge:</td>
                                                    <th>BDT <?= $orderDetails['delivery_charge'] ?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="subtitle">Other Information</h4>

                                        <table class="table table-simple">
                                            <tbody>
                                                <tr>
                                                    <td>Selected Area:</td>
                                                    <th><?= $orderDetails['pickup_area'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Contact Name:</td>
                                                    <th><?= $orderDetails['pickup_name'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Contact Mobile Number:</td>
                                                    <th><?= $orderDetails['delivery_contact'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Address:</td>
                                                    <th><?= $orderDetails['delivery_address'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Instructions:</td>
                                                    <th><?= $orderDetails['delivery_instruction'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Deadline:</td>
                                                    <th><?= $orderDetails['delivery_deadline'] ?></th>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        <a href="edit_order.php?id=<?= $orderID ?>"><button class="btn btn-danger" type="submit" name="btn-order">Edit Order</button></a>
                                        <a href="orders.php"><button class="btn btn-primary" type="submit" name="btn-order">Confirm My Order</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Pane End -->

                            <!-- Tab Pane Start -->
                            <div class="tab-pane fade" id="tab02">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="subtitle">Order Information</h4>

                                        <table class="table table-simple">
                                            <tbody>
                                                <tr>
                                                    <td>Customer Name:</td>
                                                    <th><?= $orderDetails['pickup_name'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Order Number:</td>
                                                    <th>#<?= $orderDetails['order_id'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Order Placed:</td>
                                                    <th><?php $ORDERdate=explode(" ", $orderDetails['order_placed_time']); echo $ORDERdate[0]; ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Total Amount:</td>
                                                    <th>BDT <?= $orderDetails['delivery_payment']+$orderDetails['delivery_charge'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Item Numbers:</td>
                                                    <th>1</th>
                                                </tr>
                                                <tr>
                                                    <td>Payment Method:</td>
                                                    <th>Cash on Delivery</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="subtitle">Delivery Information</h4>

                                        <table class="table table-simple">
                                            <tbody>
                                                <tr>
                                                    <td>Ship To:</td>
                                                    <th><?= $orderDetails['delivery_name'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Destination:</td>
                                                    <th><?= $orderDetails['order_placed_time'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Deadline Date:</td>
                                                    <th><?= $orderDetails['delivery_deadline'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Method:</td>
                                                    <th>In Person</th>
                                                </tr>
                                                <tr>
                                                    <td>Shipment Status:</td>
                                                    <th>Pending</th>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number:</td>
                                                    <th><?= $orderDetails['delivery_contact'] ?></th>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Instruction</td>
                                                    <th><?= $orderDetails['delivery_instruction'] ?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Pane End -->
                        </div>
                        <!-- Tab Content End -->
                    </div>
                    <!-- View Order End -->
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->


    <!-- Javascript File Starts -->
           <?php include 'footer_javascript_file.php'; ?>
    <!-- Javascript File Ends -->

    <!-- Page Level Scripts -->

</body>
</html>
