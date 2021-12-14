
<?php
    
    require_once "../users/dbConfig.php";
    session_start();


    if($_SESSION['admin_login']==1)
    {
        $admin=$_SESSION['USER'];

    }   
    else
    {
        header("Location: admin_login.php");
    }


    function allData($pdo)
    {
        $sql="Select * FROM users where user_type='user'";

        $statement = $pdo->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;
    }

?>








<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Panel | User Information Table</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Table css -->
        <link href="../plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Navigation Bar-->
          <?php include 'admin_header_menu.php'; ?>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            
            <!-- page-title-box -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Users information table</h4>
                                    <p class="text-muted m-b-30">this is users information table.</p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-hover table-dark table-bordered">
                                                <thead class="bg-info">
                                                <tr>
                                                    <th>#SL</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Profession</th>
                                                    <th>Contact</th>
                                                </tr>
                                                </thead>
                                                 <tbody>

                            <?php
                                $info = allDATA($pdo);
                                foreach ($info as $key => $val) {
                            ?>

                            <tr>
                                
                                <td> <?= $key+1; ?></td>
                                <td> <?= $val['username']; ?></td>
                                <td> <?= $val['email']; ?></td>
                                <td> <?= $val['profession']; ?></td>
                                <td> <?= $val['contact']; ?></td>
                                

                             
                            </tr>   
                        
                            <?php } ?>                  
                        </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                       2020 <span class="d-none d-sm-inline-block"> - All Right Reserved <i class="mdi mdi-heart text-danger"></i>Salahuddinit</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Responsive-table-->
        <script src="../plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script>
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>
    
    </body>

</html>