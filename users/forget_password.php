<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<?php 
    include 'header.php'; 
    session_start();
?>
<title>User Dashboard | Forget Password</title>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Forgot Password Page Start -->
        <div class="m-account-w" data-bg-img="assets/img/download.png">
            <div class="m-account">
                <div class="row no-gutters">
                   
                    <div class="col-md-12">
                        <!-- Forgot Password Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img src="assets/img/logo.png" alt="">
                                </div>
                                <!-- Logo End -->

                                <form action="forget_password_backend.php" method="POST">
                                    <label class="m-account--title">Forgot Password?</label>

                                    <p class="m-account--subtitle">Don't worry, we'll send you All informations.</p>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control" autocomplete="off" required>
                                        </div>
                                        <span style="color: red;">
                                            <?php
                                                if(isset($_SESSION['email-error'])) {
                                                    echo $_SESSION['email-error']; 
                                                    unset($_SESSION['email-error']);
                                                }
                                            ?>                  
                                        </span>
                                    </div>

                                   

                                    <div class="m-account--actions">
                                      <button type="submit" name="btn-forget_password" class="btn btn-block btn-rounded btn-info">Reset Password</button>
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy; 2020 All rights reserved by <a href="">salahuddinit</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Forgot Password Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Forgot Password Page End -->
    </div>
    <!-- Wrapper End -->


    <!-- Javascript File Starts -->
           <?php include 'footer_javascript_file.php'; ?>
    <!-- Javascript File Ends -->

</body>
</html>
