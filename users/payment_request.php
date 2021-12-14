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

?>

<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<?php include 'header.php'; ?>
<title>User Dashboard | Courier Order Page</title>
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
                            <h2 class="page--title h5">Form Elements</h2>
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
                               <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <b><h3 class="panel-title" style="text-align: center;">Must See these informations Before confirm an order</h3></b>
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
                                        <td>Order Cancelation </td>
                                        <td>
                                            <a href="#basicModal" class="btn btn-outline-secondary" data-toggle="modal" style="background-color: red;">View
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Weight Limit</td>
                                        <td>
                                            <a href="#longModal" class="btn btn-outline-secondary" data-toggle="modal" style="background-color: red;">View</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

    <!-- Basic Modal Start -->
    <div id="basicModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delivery From Fill Up</h5>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <b><p style="font-size: 30px; padding: 2rem;letter-spacing: 3px; line-height: 1.6;">Once you fill up the form you can not edit anymore.You can only Delete that order</p></b>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Modal End -->



   <!-- Long Modal Start -->
    <div id="longModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Weight Limit Consider</h5>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <b><p style="font-size: 30px; padding: 2rem;letter-spacing: 3px; line-height: 1.6;">Your Package must be under 20kg</p></b>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Modal End -->
                    </div>

                    <div class="col-md-12">
                       <form action="payment_request_backend.php" method="post">
  
          <div class="form-group">
            <label for="exampleFormControlSelect1"><b>Payment Methods</b></label>
            <select class="form-control" id="exampleFormControlSelect1" name="payment_request">  
              <option value="Bkash">Bkash</option>
              <option value="Rocket">Rocket</option>
              <option value="Nagad">Nagad</option>
            </select>
            
          </div>
          <input type="hidden" name="order_id" value="<?=$_GET['orderID']?>">
 
    <button class="btn btn-danger mb-3" type="submit" name="btn_payment_request">Request Payment</button>
              </form>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer" style="background-color: #1C2324">
                <p>Copyright &copy; <a href="#">2020</a>. All Rights Reserved By Salahuddinit.</p>
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

    <script type="text/javascript">
        var $select = $( '#select' ),
        $select1 = $( '#select1' ),
    $options = $select1.find( 'option' );
    
$select.on( 'change', function() {
    $select1.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
    </script>

</body>
</html>
<?php require_once 'errorCheck.php'; ?>