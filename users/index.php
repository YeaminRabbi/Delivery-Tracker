<?php
    
    session_start();

    if($_SESSION['user_login']==1)
    {
        $user=$_SESSION['USER'];

    }   
    else
    {
        header("Location: login.php");
    }

    
    require_once "orders_calculation_backend.php";
?>

<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<title>User Dashboard</title>
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
                            <h2 class="page--title h5">Dashboard</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active"><span>Dashboard</span></li>
                            </ul>
                        </div>

                      
                    </div>
                </div>
            </section>
            <!-- Page Header End -->




<!-- help -->


   <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <b><h3 class="panel-title" style="text-align: center; color: red;">Confusion About This Dashboard ?? </h3></b>
                    </div>

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-cells-middle">
                                <thead class="text-dark">
                                    <tr>
                                        <th>Topics</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> ABOUT DASHBOARD </td>
                                        <td>
                                            <a href="#basicModal" class="btn btn-outline-secondary" data-toggle="modal" style="background-color: yellow;">পড়ুন
                                            </a>
                                        </td>
                                    </tr>

                                  
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>


    <!-- Basic Modal Start -->
    <div id="basicModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deliver From Fill Up</h5>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <b><p style="font-size: 30px; padding: 2rem;letter-spacing: 3px; line-height: 1.6;"> Pending এর সাথে Due সম্পর্ক হচ্ছে ,
মানে আপনি যখন একটি অর্ডার করবেন তখন আপনার অর্ডারটি ডিফল্ট ভাবে Pending এবং Due তে  চলে যাবে.যখন অ্যাডমিন কতৃক আপনার অর্ডারটি এপ্রুভ করা হবে তখন আপনার এই ড্যাশবোর্ডের এ Assigned , Accepted,Successfull এ  ১ উঠে যাবে   </p></b>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Modal End -->



            <!-- Main Content Start -->
            <section class="main--content">
                <div class="row gutter-20">
                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#2bb3c0">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>

                                    <p class="miniStats--label text-white bg-blue">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-user text-blue"></i>

                                    <p class="miniStats--caption text-blue">Monthly</p>
                                    <h3 class="miniStats--title h4">New Users</h3>
                                    <p class="miniStats--num text-blue"><?= $total_user ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#e16123">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-orange">
                                        <i class="fa fa-level-down-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-ticket-alt text-orange"></i>

                                    <p class="miniStats--caption text-orange">Monthly</p>
                                    <h3 class="miniStats--title h4">DUE</h3>
                                    <p class="miniStats--num text-orange"><?= $pending_status ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Monthly</p>
                                    <h3 class="miniStats--title h4">PAID</h3>
                                    <p class="miniStats--num text-green"><?php if(isset($total_paid)){ echo $total_paid;} else { echo "0";} ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Latest Order</p>
                                    <h3 class="miniStats--title h4">Pending</h3>
                                    <p class="miniStats--num text-green"><?= $pending_status ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Latest Order</p>
                                    <h3 class="miniStats--title h4">Accepted</h3>
                                    <p class="miniStats--num text-green"><?= $approved_status ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Latest Order</p>
                                    <h3 class="miniStats--title h4">Assigned</h3>
                                    <p class="miniStats--num text-green"><?= $approved_status ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                     </div>




                      <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-green">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Latest Order</p>
                                    <h3 class="miniStats--title h4">Successful</h3>
                                    <p class="miniStats--num text-green"><?= $delivery_status ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                     </div>
                       

                      <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header  bg-red">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Total Canceled Order</p>
                                    <h3 class="miniStats--title h4">Canceled Order</h3>
                                    <p class="miniStats--num text-green"><?= $cancel_status ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                     </div>



                      <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Total Orders</p>
                                    <h3 class="miniStats--title h4">Total Orders</h3>
                                    <p class="miniStats--num text-green"><?= $total_orders ?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                     </div>





                      <div class="col-md-4">
                        <div class="panel">
                            <!-- Mini Stats Panel Start -->
                            <div class="miniStats--panel">
                                <div class="miniStats--header bg-darker">
                                    <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                    <p class="miniStats--label text-white bg-green">
                                        <i class="fa fa-level-up-alt"></i>
                                        <span>10%</span>
                                    </p>
                                </div>

                                <div class="miniStats--body">
                                    <i class="miniStats--icon fa fa-rocket text-green"></i>

                                    <p class="miniStats--caption text-green">Payment</p>
                                    <h3 class="miniStats--title h4">Payment Done</h3>
                                    <p class="miniStats--num text-green"><?= $total_payment?></p>
                                </div>
                            </div>
                            <!-- Mini Stats Panel End -->
                        </div>
                     </div>











                
     







                </div>
            </section>
            <!-- Main Content End -->

               <!-- Main Footer Start -->
            <footer class="main--footer" style="background-color: #1C2324">
                <p>Copyright &copy; <a href="#">Salahuddinit</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Javascript File Starts -->
           <?php include 'footer_javascript_file.php'; ?>
    <!-- Javascript File Ends -->
</body>
</html>
