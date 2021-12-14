    <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.php" class="logo">
                    <img src="assets/img/courierashbelogo.png" style="height: 80px; width: 100px;" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->


        </header>
        <!-- Navbar End -->

  
        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="profile.php">
                        <img src="<?= $user['image'];?>" alt="" class="rounded-circle">
                    </a>
                </div>

                <div class="profile--name">
                    <a href="profile.php" class="btn-link"><?= $user['username'];?></a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link" title="User Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link" title="Logout">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li class="active">
                                <a href="index.php">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                     <li>
                        <a href="payment_request.php">Payment Request</a>
                    </li>


                    <li>
                        <a href="#">Layouts</a>

                        <ul>
                           
                          <li>
                                <a href="#">
                                    <i class="fab fa-wpforms"></i>
                                    <span>Form</span>
                                </a>

                                <ul>
                                    <li><a href="user_courier_order.php">CREATE A NEW ORDER</a></li>
                                    <li><a href="invoice.php">Invoice</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>


                     <li>
                        <a href="#">Order Details</a>

                        <ul>
                           
                          <li>
                                <a href="#">
                                    <i class="fab fa-wpforms"></i>
                                    <span>Order</span>
                                </a>

                                <ul>
                                    <li><a href="orders.php">Order Records</a></li>
                                    <li><a href="order_view.php">Latest Order</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>

                    



                    <li>
                        <a href="#">Service Charges</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span>Extra Pages</span>
                                </a>

                                <ul>
                                    <li><a href="Service_charges.php">Pricing Tables</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar Navigation End -->


        </aside>
        <!-- Sidebar End -->
