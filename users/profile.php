<?php
    require_once 'dbConfig.php';
    session_start();

    if($_SESSION['user_login']==1)
    {
        $profile=$_SESSION['USER'];

    }   
    else
    {
        header("Location: login.php");
    }


    $user=getUserData($db,"id",$profile['id']);




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
<title>User Dashboard | Profile</title>
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
                            <h2 class="page--title h5"><?= $user['username'];?> Profile</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="row gutter-20">
                    <div class="col-lg-8">
                        <!-- Panel Start -->
                        <div class="panel profile-cover">
                            <div class="profile-cover__img">
                                <img src="<?= $user['image'] ?>" alt="img">
                                <h3 class="h3"><?= $user['username'] ?></h3>
                            </div>

                            <div class="profile-cover__action" data-bg-img="assets/img/covers/01_800x150.jpg" data-overlay="0.3">
                                <a href="profile_edit.php?userID=<?= $user['id'] ?>">
                                <button class="btn btn-rounded btn-info">
                                    
                                    <span>Edit</span>
                                    <i class="far fa-edit"></i>
                                </button>
                                </a>

                                
                            </div>
                        </div>
                        <!-- Panel End -->


                    </div>

                    <div class="col-lg-4">
                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">About Me</h3>
                            </div>

                            <div class="panel-content panel-about">
                                <table>
                                    <tr>
                                        <th><i class="fas fa-briefcase"></i>Occupation</th>
                                        <td><?= $user['profession'] ?> </td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-birthday-cake"></i>Email</th>
                                        <td><?= $user['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-map-marker-alt"></i>Contact</th>
                                        <td><?= $user['contact'] ?></td>
                                    </tr>
                                    <tr>
                                        <th><i class="fas fa-mobile-alt"></i>Bkash Acount</th>
                                        <td><a href="tel:<?= $user['bkash'] ?>" class="btn-link"><?= $user['bkash'] ?></a></td>
                                    </tr>

                                    <tr>
                                        <th><i class="fas fa-mobile-alt"></i>Rocket Acount</th>
                                        <td><a href="tel:<?= $user['rocket'] ?>" class="btn-link"><?= $user['rocket'] ?></a></td>
                                    </tr>

                                    <tr>
                                        <th><i class="fas fa-mobile-alt"></i>Nagad Acount</th>
                                        <td><a href="tel:<?= $user['nagad'] ?>" class="btn-link"><?= $user['nagad'] ?></a></td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <div class="panel-social">
                                <ul class="nav">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Panel End -->

                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="weather--panel text-white bg-blue">
                                <div class="weather--title">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Dhaka, Bangladesh</span>
                                </div>

                                <div class="weather--info">
                                    <i class="wi wi-rain-wind"></i>
                                    <span>33°C</span>
                                </div>
                            </div>
                        </div>
                        <!-- Panel End -->


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
