<!DOCTYPE html>
<html>
<?php 
    
    include 'header.php'; 

    session_start();

?>
<title>User Dashboard | Registration</title>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Register Page Start -->
        <div class="m-account-w" data-bg-img="assets/img/download.png">
            <div class="m-account">
                <div class="row no-gutters flex-row-reverse">
                    <div class="col-md-6">
                        <!-- Register Content Start -->
                        <div class="m-account--content-w" data-bg-img="">

                            <div class="m-account--content">
                                
                                <h2 class="h2">Have an account?</h2>
                                <p>Click the button below to login your Account.</p>
                                <a href="http://localhost/deliveryTracker/users/login.php" class="btn btn-rounded">Login Now</a>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>

                    <div class="col-md-6">
                        <!-- Register Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img src="assets/img/courierashbelogo.png" alt="">
                                </div>
                                <!-- Logo End -->

                                <form action="register_backend.php" method="POST" enctype="multipart/form-data">
                                    <label class="m-account--title">Create your account</label>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-envelope"></i>
                                            </div>

                                            <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
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

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>

                                        </div>
                                        <span style="color: red;">
                                            <?php
                                                if(isset($_SESSION['password-error'])) {
                                                    echo $_SESSION['password-error']; 
                                                    unset($_SESSION['password-error']);
                                                }
                                            ?>                  
                                        </span>
                                    </div>

                                     <!-- <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" autocomplete="off" required>
                                        </div>

                                    </div> -->

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="text" name="profession" placeholder="Profession" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="tel" name="contact" placeholder="01********* (11 digits)" pattern="[0-9]{11}" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="file"  name="file" placeholder="Insert your Image" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-text-width" aria-hidden="true"></i>
                                            </div>

                                            <input type="text" name="bkash" placeholder="Write your bkash number" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-text-width" aria-hidden="true"></i>
                                            </div>

                                            <input type="text" name="nagad" placeholder="Write your nagad number" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>


                                      <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-text-width" aria-hidden="true"></i>
                                            </div>

                                            <input type="text" name="rocket" placeholder="write your rocket number" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fa fa-text-width" aria-hidden="true"></i>
                                            </div>

                                            <input type="text" name="question" placeholder="Who's your Best Friend?" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="m-account--actions">
                                       <input type="submit" class="btn btn-block btn-rounded btn-info" name="btn-register">
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy; 2020 Salahuddinit</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Page End -->
    </div>
    <!-- Wrapper End -->

<?php include 'footer_javascript_file.php'; ?>

</body>
</html>
