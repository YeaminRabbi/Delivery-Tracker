<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<?php include 'header.php'; ?>
<title> User Dashboard |  Login </title>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.php" class="logo">
                    <img src="assets/img/courierashbelogo.png" alt="">
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


         

    
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h1 class="page--title">Login Form</h1>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            </ul>
                        </div>

                       
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

   <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <b><h3 class="panel-title" style="text-align: center; color: red;">Instructions to Login</h3></b>
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
                                        <td> লগইন সিকিউরিটি </td>
                                        <td>
                                            <a href="#basicModal" class="btn btn-outline-secondary" data-toggle="modal" style="background-color: yellow;">পড়ুন
                                            </a>
                                        </td>
                                    </tr>

                                     <tr>
                                        <td> যেভাবে লগইন করবেন  </td>
                                        <td>
                                            <a href="#loginmodal" class="btn btn-outline-secondary" data-toggle="modal" style="background-color: yellow;">পড়ুন
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
                    <b><p style="font-size: 30px; padding: 2rem;letter-spacing: 3px; line-height: 1.6;">এটা সম্ভব যে, একজন মানুষ আপনার পাসওয়ার্ড জানতে পারে. কিন্তু একজন মানুষ আপনার ইমেইল জানতে পারবেনা. অথবা, একজন মানুষ আপনার ইমেইল জানতে পারে কিন্তু পাসওয়ার্ড জানতে পারবে না. তাই আমরা আপনাদের সুবিধার্তে আমাদের এখানে একইসাথে ইমেইল এবং পাসওয়ার্ড ইনপুট নিয়ে লগইন সিস্টেম চালু করেছি. আশা করি আপনাদের ভালো লাগবে </p></b>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Modal End -->


    <!-- Basic Modal Start -->
    <div id="loginmodal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deliver From Fill Up</h5>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <b><p style="font-size: 30px; padding: 2rem;letter-spacing: 3px; line-height: 1.6;">১. আপনার ইউজারনেম দিবেন যেটা দিয়ে আপনি রেজিস্ট্রেশন করেছেন  .           
২. ইমেইল লিখবেন যেই ইমেইল দিয়ে আপনি রেজিস্ট্রেশন করেছেন. 
৩.পাসওয়ার্ড লিখবেন .
8. তারপর কনফার্ম পাসওয়ার্ড এ একই পাসওয়ার্ড আবার লিখবেন তারপর সাবমিট বাটনে ক্লিক করবেন. </p></b>
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
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Wizard</h3>
                    </div>

                    <div class="panel-content">
                        <!-- Form Wizard Start -->
                        <form action="login_backend.php" method="post" id="formWizard" class="form--wizard">
                            <h3>Identification</h3>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Userame: *</span>
                                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required="off">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Email: *</span>
                                                <input type="email" name="email" class="form-control" required="off">
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </section>

                            <h3>Login Info</h3>
                            <section>
                                <div class="row">
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Username: *</span>
                                                <input type="text" name="uname" class="form-control" required>
                                            </label>
                                        </div>
                                    </div> -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Password: *</span>
                                                <input type="password" name="password" id="password" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text">Confirm Password: *</span>
                                                <input type="password" name="cpassword" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <input type="submit" name="btn-login" class="btn btn-success btn-block" style="max-width: 300px;margin: auto;">
                            </section>

                        </form>
                        <!-- Form Wizard End -->
                    </div>
                    <a href="forget_password.php"> <h3 style="text-align: center;margin-top: 1rem; color: red;">Forget password</h3></a> 
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer" style="background-color: #1C2324">
                <p>Copyright 2020 &copy; <a href="#">Salahuddinit</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery-jvectormap.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="assets/js/horizontal-timeline.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <!-- Page Level Scripts -->

</body>
</html>

<?php require_once "errorCheck.php";
