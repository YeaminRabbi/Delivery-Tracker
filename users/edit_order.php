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


    if (empty($_GET['id'])) {
        header("Location: user_courier_order.php");
    }

    $orderID=$_GET['id'];
    
    $orderDetails=orderInfo($db,"order_id",$orderID,$user['id']);


    function orderInfo($db,$column_key,$search_key,$user_id){
        
        $sql="Select * FROM orders WHERE ".$column_key." = '".$search_key."' and user_id = '".$user_id."';";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $row;
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
                    <h5 class="modal-title">Deliver From Fill Up</h5>

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
                        <form action="edit_order_backend.php" method="POST" id="" enctype="multipart/form-data">
                            
                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h1 class="panel-title" style="color: red;">Pickup Point</h1>
                            </div>
                               
                            <div class="panel-content">
                                    <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Address</span>

                                    <div class="col-md-10">
                                        <input type="text" name="1" class="form-control form-control-rounded" autocomplete="off" value="<?= $orderDetails['pickup_address'] ?>" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Contact Name</span>

                                    <div class="col-md-10">
                                        <input type="text" name="2" value="<?= $orderDetails['pickup_name'] ?>" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>
                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Contact Number</span>

                                    <div class="col-md-10">
                                     
                                        <input type="tel" name="3" placeholder="01********* (11 digits)" pattern="[0-9]{11}" class="form-control form-control-rounded" autocomplete="off" value="<?= $orderDetails['pickup_contact'] ?>" required>

                                    </div>
                                </div>
                                <!-- Form Group End -->
                               

                                <hr>

                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Instructions</span>

                                    <div class="col-md-10">
                                        <input type="text" name="4" class="form-control form-control-rounded" value="<?= $orderDetails['pickup_instruction'] ?>" placeholder="You can fill this part if you want" autocomplete="off">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>
                                

                            <div class="panel-heading">
                                <h1 class="panel-title" style="color: red;">Delivery point</h1>
                            </div>



                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Contact Name</span>

                                    <div class="col-md-10">
                                        <input type="text"  name="10" class="form-control form-control-rounded" value="<?= $orderDetails['delivery_name'] ?>" autocomplete="off" required>
                                    </div>
                                </div>
                                
                                <!-- Form Group End -->
                               
                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Contact Mobile Number</span>

                                    <div class="col-md-10">
                                        <input type="tel" name="11" placeholder="01********* (11 digits)" pattern="[0-9]{11}" value="<?= $orderDetails['delivery_contact'] ?>"  class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>
                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Address</span>

                                    <div class="col-md-10">
                                        <input type="text" name="12" value="<?= $orderDetails['delivery_address'] ?>"  class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                               <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Amount to be collected(Must be BDT)</span>

                                    <div class="col-md-10">
                                        <input type="number" name="9" class="form-control form-control-rounded" value="<?= $orderDetails['delivery_payment'] ?>"  autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->


                                <!-- Form Group Start -->
                                <div class="form-group row ">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Select Delivery Type</span>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled value="<?= $orderDetails['delivery_type'] ?>">
                                    </div>
                                </div>
                                <!-- Form Group End -->


                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Charge</span>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled value="<?= $orderDetails['delivery_charge'] ?>">
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                 
                                  <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Select Area</span>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled value="<?= $orderDetails['pickup_area'] ?>">
                                    </div>
                                </div>
                                <!-- Form Group End -->

     <hr>

                                <input type="hidden" name="orderID" value="<?= $orderID ?>">


                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Instructions</span>

                                    <div class="col-md-10">
                                        <input type="text" name="13" class="form-control form-control-rounded" value="<?= $orderDetails['delivery_instruction'] ?>" autocomplete="off" placeholder="You can fill this part if you want">
                                    </div>
                                </div>
                                <!-- Form Group End -->
<hr>



                                <hr>
                               
                            </div>
                        </div>
                        <!-- Panel End -->

                         <button class="btn btn-primary mb-2" type="submit" name="btn-updateorder">Save Changes</button>
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