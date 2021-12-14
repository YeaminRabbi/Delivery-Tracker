<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<?php 
    include 'header.php'; 
    session_start();
?>
<title>User Dashboard | Change Password</title>
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

                                <?php
                                    if($_SESSION['security_question']==1){

                                ?>
                                <form action="password_change_backend.php" method="POST">
                                    <label class="m-account--title">Change Password</label>


                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-question-circle"></i>
                                            </div>
                                            <input type="text" name="friend_name" placeholder="Enter your Best Friend's Name" class="form-control" autocomplete="off" required>
                                        </div>
                                        <span style="color: red;">
                                            <?php
                                                if(isset($_SESSION['answer-error'])) {
                                                    echo $_SESSION['answer-error']; 
                                                    unset($_SESSION['answer-error']);
                                                }
                                            ?>                  
                                        </span>
                                    </div>

                                    
                                    <div class="m-account--actions">
                                      <button type="submit" name="btn-friend_name" class="btn btn-block btn-rounded btn-info">NEXT</button>
                                    </div>

                                    
                                </form>
                                <?php
                                    }

                                    elseif ($_SESSION['security_question']==0) {
                                ?>
                                <form action="password_change_backend.php" method="POST">
                                    <label class="m-account--title">Change Password</label>


                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <input type="password" name="password_field-1" placeholder="Enter new password" class="form-control" autocomplete="off" required>
                                            
                                            
                                            
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <input type="password" name="password_field-2" placeholder="Confirm new password" class="form-control" autocomplete="off" required>
                                           
                                        </div>
                                        <span style="color: red;">
                                            <?php
                                                if(isset($_SESSION['change_password-error'])) {
                                                    echo $_SESSION['change_password-error']; 
                                                    unset($_SESSION['change_password-error']);
                                                }
                                            ?>                  
                                        </span>
                                        
                                    </div>

                                    
                                    <div class="m-account--actions">
                                      <button type="submit" name="btn-password_confirm" class="btn btn-block btn-rounded btn-info">Confirm</button>
                                    </div>

                                    
                                </form>
                                <?php
                                    }
                                ?>

                                <div class="m-account--actions">
                                      <a href="register.php" class="btn btn-block btn-rounded btn-danger mt-2">Create Account</a>
                                </div>

                                <div class="m-account--footer">
                                         <p>&copy; 2020 All rights reserved by <a href="">salahuddinit</a></p>
                                </div>

                                
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
