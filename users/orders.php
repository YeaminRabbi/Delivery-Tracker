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

    function user_orders($pdo,$user_id)
    {
        $sql="select * from orders where user_id ='".$user_id."' order by order_id  DESC;";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;
    }



    $order_data=user_orders($pdo,$user['id']);
    
?>




<!DOCTYPE html>
<html  class="no-outlines">
<?php include 'header.php'; ?>
<title>User Total Order Records</title>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
 <?php include 'header_aside_bar.php'; ?>

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Orders</h2>
                            <!-- Page Title End -->

                            
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
                            <h3 class="h3">Ecommerce Orders <a href="#" class="btn btn-sm btn-outline-info">Manage Orders</a></h3>
                            <p>Found Total 1,330 Orders</p>
                        </div>

                        <div class="actions">
                            <form action="#" class="search">
                                <input type="text" class="form-control" placeholder="Order ID or Customer Name..." required>
                                <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Records Header End -->
                </div>

                <div class="panel">
                    <!-- Records List Start -->
                    <div class="records--list" data-title="Orders Listing">
                        <table id="recordsListView">
                            <thead>
                                <tr>
                                    <th>Order No</th>
                                    <th>Order ID</th>
                                    <th>Order Placed On</th>
                                    <th>Delivery Point Customer Name</th>
                                    
                                    <th>Total Price</th>
                                    
                                    <th>Status</th>
                                    <th>Request</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                    foreach ($order_data as $key => $data) {
                                ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td>
                                            #<?= $data['order_id'] ?>
                                        </td>
                                        <td><?php $ORDERdate=explode(" ", $data['order_placed_time']); echo $ORDERdate[0]; ?></td>
                                        <td>
                                            <?= $data['delivery_name'] ?>
                                        </td>
                                       
                                        <td><?= $data['delivery_charge']+$data['delivery_payment'] ?></td>
                                       
                                        <td>

                                            <?php
                                                if($data['delivery_status']==1)
                                                {
                                                    echo '<span class="label label-success">Delivered</span>';
                                                }

                                                elseif($data['pending_status']==1)
                                                {
                                                    echo '<span class="label label-primary">Pending</span>';
                                                }
                                                elseif($data['approved_status']==1)
                                                {
                                                    echo '<span class="label label-warning">Approved</span>';
                                                }
                                                elseif($data['cancel_status']==1)
                                                {
                                                    echo '<span class="label label-danger">Canceled</span>';
                                                }
                                            ?>

                                            
                                        </td>
                                        <?php 

                                     if($data['delivery_status']==1 && $data['payment_request']=="NULL" && $data['payment_status']==0)
                                     {
                                        ?>

                                        <td>
                                        <a href="payment_request.php?orderID=<?= $data['order_id'] ?>" class="btn btn-sm btn-outline-primary">Payment Request</a>
                                        </td>
                                        <?php                                      
                                          
                                     }

                                     if ($data['delivery_status']==1 && $data['payment_request']!="NULL" && $data['payment_status']==0) {
                                     ?>
                                        <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Payment Requested</a>
                                        </td>

                                     <?php 
                                     }

                                     if($data['payment_status']==1)
                                     {
                                    ?>
                                        <td>
                                        <a href="#" class="btn btn-sm btn-outline-success">Payment Received</a>
                                        </td>

                                    <?php 
                                     }
                                        ?>
                                        
                                    </tr>


                                <?php 


                                    }
 
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- Records List End -->
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

    <!-- Scripts -->
   <?php include 'footer_javascript_file.php'; ?>
    <!-- Page Level Scripts -->

</body>
</html>
