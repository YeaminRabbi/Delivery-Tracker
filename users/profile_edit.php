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



    $userID=$_GET['userID'];


    $userdata=getUserData($db,"id",$userID);




    //FUNCTION for fetching user's all data 
    function getUserData($db,$column_key,$search_key){

        $sql="Select * FROM users WHERE ".$column_key." = '".$search_key."';";
        $result = mysqli_query($db,$sql);

        // Assoc array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
        // Free result set
        mysqli_free_result($result);
        mysqli_close($db);

        return $row;
    }



    
?>




<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<?php include 'header.php'; ?>
<title>User Dashboard | Profile Edit Page</title>
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
                            <h2 class="page--title h5">Profile Edit</h2>
                            <!-- Page Title End -->
                           
                        </div>

                     
                    </div>
                </div>
            </section>
            <!-- Page Header End -->
       
            <!-- Main Content Start -->
            <section class="main--content">
                <div class="row gutter-20">
                  

                    <div class="col-md-12">
                        <form action="profile_edit_backend.php?userID=<?= $userdata['id'] ?>"  method="POST" enctype="multipart/form-data">
                            
                       
                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h1 class="panel-title" style="color: red;">Update Profile Information</h1>
                            </div>
                               
                            <div class="panel-content">
                                    <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Username</span>

                                    <div class="col-md-10">
                                        <input type="text" name="username" value="<?= $userdata['username'] ?>" class="form-control form-control-rounded" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Email</span>

                                    <div class="col-md-10">
                                        <input type="email" name="email" value="<?= $userdata['email'] ?>" class="form-control form-control-rounded" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>


                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Profession</span>

                                    <div class="col-md-10">
                                        <input type="text" name="profession" value="<?= $userdata['profession'] ?>" class="form-control form-control-rounded" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->


                                <hr>
                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Contact Number</span>

                                    <div class="col-md-10">
                                        <input type="tel" name="contact" value="<?= $userdata['contact'] ?>" class="form-control form-control-rounded" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->
                               

                                <hr>

                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Bkash Account</span>

                                    <div class="col-md-10">
                                        <input type="text" name="bkash" class="form-control form-control-rounded" value="<?= $userdata['bkash'] ?>" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>


                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Rocket Account</span>

                                    <div class="col-md-10">
                                        <input type="text" name="rocket" class="form-control form-control-rounded" value="<?= $userdata['rocket'] ?>" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Nagad Account</span>

                                    <div class="col-md-10">
                                        <input type="text" name="nagad" class="form-control form-control-rounded" value="<?= $userdata['nagad'] ?>" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Image</span>

                                    <div class="col-md-10">
                                        <input type="file" name="img" class="form-control form-control-rounded">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                
                               
                            </div>
                        </div>
                        <!-- Panel End -->
                         <button href="order_view.php" class="btn btn-outline-secondary mb-2 ml-4" name="btn-profileUpdate" style="background-color: red;color: white;">Save Changes</button>
                         </form>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer" style="background-color: #1C2324">
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
