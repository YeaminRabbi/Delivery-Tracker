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
<html dir="ltr" lang="en" class="no-outlines">
<?php include 'header.php'; ?>
<title>User Dashboard | Service Charge</title>
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
                            <h2 class="page--title h5">Pricing Tables</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Extra Pages</span></li>
                                <li class="breadcrumb-item active"><span>Pricing Tables</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <!-- Summary Widget Start -->
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>

                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                            <!-- Summary Widget End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pricing Tables</h3>
                    </div>

                    <div class="panel-content">
                        <div class="panel-subtitle text-center text-md-left">
                            <h5 class="h5">Inside Dhaka</h5>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6">
                                <!-- Pricing Item Start -->
                                <div class="pricing--item text-center mb-4">
                                     <span class="pricing--text text-white bg-orange">Inside Dhaka</span>
                                    <div class="pricing--header text-green text-uppercase">
                                        <h3 class="h3">Same Day Delivery</h3>
                                    </div>

                                    <div class="pricing--title pricing--title--box text-white bg-green">
                                        <p><strong>80</strong></p>
                                    </div>

                                    <div class="pricing--features">
                                        <ul class="list-unstyled">
                                            <li><strong>50M</strong> ipsum dolor sit amet</li>
                                            <li><strong>600</strong> tesque sit amet odio elit</li>
                                            <li><strong>Unlimited</strong> integer felis odio</li>
                                        </ul>
                                    </div>

                                    <div class="pricing--action">
                                        <a href="#" class="btn btn-rounded btn-success">Get Now</a>
                                    </div>
                                </div>
                                <!-- Pricing Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Pricing Item Start -->
                                <div class="pricing--item text-center mb-4">
                                     <span class="pricing--text text-white bg-orange">Inside Dhaka</span>
                                    <div class="pricing--header text-green text-uppercase">
                                        <h3 class="h3">Next Day Delivery</h3>
                                    </div>

                                    <div class="pricing--title pricing--title--box text-white bg-green">
                                        <p><strong>60</strong></p>
                                    </div>

                                    <div class="pricing--features">
                                        <ul class="list-unstyled">
                                            <li><strong>50M</strong> ipsum dolor sit amet</li>
                                            <li><strong>600</strong> tesque sit amet odio elit</li>
                                            <li><strong>Unlimited</strong> integer felis odio</li>
                                        </ul>
                                    </div>

                                    <div class="pricing--action">
                                        <a href="#" class="btn btn-rounded btn-success">Get Now</a>
                                    </div>
                                </div>
                                <!-- Pricing Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Pricing Item Start -->
                                <div class="pricing--item text-center mb-4 active">
                                    <span class="pricing--text text-white bg-orange">Outside Dhaka</span>

                                    <div class="pricing--header text-green text-uppercase">
                                        <h3 class="h3">Delivery</h3>
                                    </div>

                                    <div class="pricing--title pricing--title--box text-white bg-green">
                                        <p><strong>100</strong>/mo</p>
                                    </div>

                                    <div class="pricing--features">
                                        <ul class="list-unstyled">
                                            <li><strong>50M</strong> ipsum dolor sit amet</li>
                                            <li><strong>600</strong> tesque sit amet odio elit</li>
                                            <li><strong>Unlimited</strong> integer felis odio</li>
                                        </ul>
                                    </div>

                                    <div class="pricing--action">
                                        <a href="#" class="btn btn-rounded btn-success">Get Now</a>
                                    </div>
                                </div>
                                <!-- Pricing Item End -->
                            </div>

                           
                        </div>


                       


                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer" style="background-color: #1C2324">
                <p style="text-align: center;">Copyright &copy; <a href="#">Salahuddinit</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->
<?php include 'footer_javascript_file.php'; ?>

</body>
</html>
