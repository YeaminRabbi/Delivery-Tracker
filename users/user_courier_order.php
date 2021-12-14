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
                        <form action="user_courier_order_backend.php" method="POST" id="" enctype="multipart/form-data">
                            
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
                                        <input type="text" name="1" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Contact Name</span>

                                    <div class="col-md-10">
                                        <input type="text" name="2" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>
                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Contact Number</span>

                                    <div class="col-md-10">
                                     
                                        <input type="tel" name="3" placeholder="01********* (11 digits)" pattern="[0-9]{11}" class="form-control form-control-rounded" autocomplete="off" required>

                                    </div>
                                </div>
                                <!-- Form Group End -->
                               

                                <hr>

                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Pickup Instructions</span>

                                    <div class="col-md-10">
                                        <input type="text" name="4" class="form-control form-control-rounded" placeholder="You can fill this part if you want" autocomplete="off">
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
                                        <input type="text" name="10" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->
<hr>

                               <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Contact Mobile Number</span>

                                    <div class="col-md-10">
                                        <input type="tel" name="11" placeholder="01********* (11 digits)" pattern="[0-9]{11}" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->

<hr>
                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Address</span>

                                    <div class="col-md-10">
                                        <input type="text" name="12" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->













                               <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Amount to be collected(Must be BDT)</span>

                                    <div class="col-md-10">
                                        <input type="number" name="9" class="form-control form-control-rounded" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Form Group End -->


                                <!-- Form Group Start -->
                                <div class="form-group row ">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Select Delivery Type</span>

                                    <div class="col-md-10">
                                        <select name="5" id="select" class="form-control" >
                                            <option value="1">Next Day in Dhaka City<option>
                                            <option value="2">Same Day in Dhaka City</option>
                                            <option value="3">Outside Dhaka(SBN)</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <!-- Form Group End -->


                                <hr>

                                <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Charge</span>

                                    <div class="col-md-10">
                                        <select name="delivery_charge" id="select1" class="form-control" disabled>
                                            <option value="1">60<option>
                                            <option value="2">80</option>
                                            <option value="3">130</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <!-- Form Group End -->

                                <hr>

                                 
                                  <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Select Area</span>

                                    <div class="col-md-10">
                                        <select name="7" class="form-control">
                                            <option value="NULL">Select area<option>
                                            <option value="Abdullahpur Bus Stand">Abdullahpur Bus Stand<option>
                                            <option value="Adabor">Adabor</option>
                                            <option value="Aftab Nagar">Aftab Nagar</option>
                                            <option value="Amin Bazar">Amin Bazar</option>
                                            <option value="Agaragaon">Agaragaon</option>
                                            <option value="Ahmedbag">Ahmedbag</option>
                                            <option value="Airport">Airport</option>
                                            <option value="Arambag">Arambag</option>
                                            <option value="Armanitola">Armanitola</option>
                                            <option value="Ashkona">Ashkona</option>
                                            <option value="Azampur(uttara)">Azampur(uttara)</option>
                                            <option value="Azimpur New Market">Azimpur New Market</option>
                                            <option value="Babu Bazar">Babu Bazar</option>
                                            <option value="Badda">Badda</option>
                                            <option value="Baily Road">Baily Road</option>
                                            <option value="Bakshi Bazar">Bakshi Bazar</option>
                                            <option value="Banani">Banani</option>
                                            <option value="Banani Dohs">Banani Dohs</option>
                                            <option value="Banasree">Banasree</option>
                                            <option value="Banglabazar">Banglabazar</option>
                                            <option value="Banglamotor">Banglamotor</option>
                                            <option value="Baridhara">Baridhara</option>
                                            <option value="Bashabo">Bashabo</option>
                                            <option value="Bashundhara Residential Area">Bashundhara Residential Area</option>
                                            <option value="Bijoy Nagar">Bijoy Nagar</option>
                                            <option value="Bijoy Sarani">Bijoy Sarani</option>
                                            <option value="Bosila">Bosila</option>
                                            <option value="Chawk Bazar">Chawk Bazar</option>
                                            <option value="Dhaka University">Dhaka University</option>
                                            <option value="Dhalpur Bus Stand">Dhalpur Bus Stand</option>
                                            <option value="Dhaka Cantonment">Dhaka Cantonment</option>
                                            <option value="Dhanmondi">Dhanmondi</option>
                                            <option value="Demra">Demra</option>
                                            <option value="Elephant Road">Elephant Road</option>
                                            <option value="Eskaton">Eskaton</option>
                                            <option value="Fokirapul">Fokirapul</option>
                                            <option value="Farmgate">Farmgate</option>
                                            <option value="Gabtoli">Gabtoli</option>
                                            <option value="Goran">Goran</option>
                                            <option value="Green Road">Green Road</option>
                                            <option value="Gulshan 1">Gulshan 1</option>
                                            <option value="Gulshan 2">Gulshan 2</option>
                                            <option value="Hatirpul">Hatirpul</option>
                                            <option value="Hatirjhil">Hatirjhil</option>
                                            <option value="Hazaribag">Hazaribag</option>
                                            <option value="Islampur">Islampur</option>
                                            <option value="Ibrahimpur">Ibrahimpur</option>
                                            <option value="Jatrabari">Jatrabari</option>
                                            <option value="Jhigatola">Jhigatola</option>
                                            <option value="Kafrul">Kafrul</option>
                                            <option value="Kakrail">Kakrail</option>
                                            <option value="Kalabagan">Kalabagan</option>
                                            <option value="Kamalapur">Kamalapur</option>
                                            <option value="Kaptan Bazar">Kaptan Bazar</option>
                                            <option value="Katabon">Katabon</option>
                                            <option value="Kathalbagan">Kathalbagan</option>
                                            <option value="Kamrangichor">Kamrangichor</option>
                                            <option value="Khilkhet">Khilkhet</option>
                                            <option value="Kotwali">Kotwali</option>
                                            <option value="Kuril">Kuril</option>
                                            <option value="Lalbag">Lalbag</option>
                                            <option value="Lalmatia">Lalmatia</option>
                                            <option value="Luxmibazar">Luxmibazar</option>
                                            <option value="Malibagh">Malibagh</option>
                                            <option value="Manikdi">Manikdi</option>
                                            <option value="ManikNagar">ManikNagar</option>
                                            <option value="Matikata">Matikata</option>
                                            <option value="Middle Paikpara">Middle Paikpara</option>
                                            <option value="Mirpur1">Mirpur1</option>
                                            <option value="Mirpur2">Mirpur2</option>
                                            <option value="Mirpur10">Mirpur10</option>
                                            <option value="Mirpur11">Mirpur11</option>
                                            <option value="Mirpur12">Mirpur12</option>
                                            <option value="Mirpur13">Mirpur13</option>
                                            <option value="Mirpur14">Mirpur14</option>
                                            <option value="Mirpur DOHS">Mirpur DOHS</option>
                                            <option value="Mohakhali DOHS">Mohakhali DOHS</option>
                                            <option value="Mohammadpur">Mohammadpur</option>
                                            <option value="Monipur">Monipur</option>
                                            <option value="Monipuripara">Monipuripara</option>
                                            <option value="Motijhil">Motijhil</option>
                                            <option value="Mouchak">Mouchak</option>
                                            <option value="Mugdapara">Mugdapara</option>
                                            <option value="Nakhalpara">Nakhalpara</option>
                                            <option value="Nandipara">Nandipara</option>
                                            <option value="Nawab Ganj">Nawab Ganj</option>
                                            <option value="Nawabpur">Nawabpur</option>
                                            <option value="Naya Bazar">Naya Bazar</option>
                                            <option value="Nitekon">Nitekon</option>
                                            <option value="Nikunjo 1">Nikunjo 1</option>
                                            <option value="Nikunjo 2">Nikunjo 2</option>
                                            <option value="Paikpara">Paikpara</option>
                                            <option value="Pallabi">Pallabi</option>
                                            <option value="Paltan">Paltan</option>    
                                            <option value="Panthapath">Panthapath</option>
                                            <option value="Patuatuli">Patuatuli</option>
                                            <option value="Pilkhana">Pilkhana</option>
                                            <option value="Pirerbag">Pirerbag</option>
                                            <option value="Polashi">Polashi</option>
                                            <option value="Prembagan">Prembagan</option>
                                            <option value="Rajarbag">Rajarbag</option>
                                            <option value="Rampura">Rampura</option>
                                            <option value="Rayer Bazar">Rayer Bazar</option>
                                            <option value="Sadarghat">Sadarghat</option>
                                            <option value="Sayedabad Bus Stand">Sayedabad Bus Stand</option>
                                            <option value="Segunbagicha">Segunbagicha</option>
                                            <option value="Shahibag">Shahibag</option>
                                            <option value="Shahajadpur">Shahajadpur</option>
                                            <option value="Shamibag">Shamibag</option>
                                            <option value="Shakhari Bazar">Shakhari Bazar</option>
                                            <option value="Shantinagar">Shantinagar</option>
                                            <option value="Sher E Bangla Nagar">Sher E Bangla Nagar</option>
                                            <option value="Shukrabad">Shukrabad</option>
                                            <option value="Shymoli">Shymoli</option>
                                            <option value="Siddeshwari">Siddeshwari</option>
                                            <option value="Siddique Bazar">Siddique Bazar</option>
                                            <option value="South Paikpara">South Paikpara</option>
                                            <option value="Sutrapur Bus Stand">Sutrapur Bus Stand</option>
                                            <option value="Shewrapara">Shewrapara</option>
                                            <option value="Shonir Akhra Bus Stand">Shonir Akhra Bus Stand</option>
                                            <option value="Shahjadpur">Shahjadpur</option>
                                            <option value="Taltola">Taltola</option>
                                            <option value="Tati Bazar">Tati Bazar</option>
                                            <option value="Taltola">Taltola</option>
                                            <option value="Tejgaon">Tejgaon</option>
                                            <option value="Tejturi Bazar">Tejturi Bazar</option>
                                            <option value="Tolarbag">Tolarbag</option>
                                            <option value="Uttara Sector 1">Uttara Sector 1</option>
                                            <option value="Uttara Sector 2">Uttara Sector 2</option>
                                            <option value="Uttara Sector 3">Uttara Sector 3</option>
                                            <option value="Uttara Sector 4">Uttara Sector 4</option>
                                            <option value="Uttara Sector 5">Uttara Sector 5</option>
                                            <option value="Uttara Sector 6">Uttara Sector 6</option>
                                            <option value="Uttara Sector 7">Uttara Sector 7</option>
                                            <option value="Uttara Sector 8">Uttara Sector 8</option>
                                            <option value="Uttara Sector 9">Uttara Sector 9</option>
                                            <option value="Uttara Sector 10">Uttara Sector 10</option>
                                            <option value="Uttara Sector 11">Uttara Sector 11</option>
                                            <option value="Uttara Sector 12">Uttara Sector 12</option>
                                            <option value="Uttara Sector 13">Uttara Sector 13</option>
                                            <option value="Uttara Sector 14">Uttara Sector 14</option>
                                            <option value="Wari">Wari</option>
                                            <option value="West Kuril">West Kuril</option>
                                            <option value="West Kafrul">West Kafrul</option>
                                            <option value="Kazipara">Kazipara</option>
                                            <option value="Kochukhet">Kochukhet</option>
                                            <option value="Vashantek">Vashantek</option>
                                            <option value="Indira Road">Indira Road</option>
                                            <option value="Gandaria">Gandaria</option>
                                            <option value="Faridabad">Faridabad</option>
                                            <option value="Shewrapara">Shewrapara</option>
                                            <option value="Nowabpur">Nowabpur</option>
                                            <option value="Tatibazar">Tatibazar</option>
                                            <option value="Nowabpur">Nowabpur</option>
                                            <option value="Doyaganj">Doyaganj</option>

                                        </select>
                                        <b><span>Fill this part for your benifit. If you can not find your area,you can skip this part</span></b>
                                    </div>
                                </div>
                                <!-- Form Group End -->

     <hr>


                                 <!-- Form Group Start -->
                                <div class="form-group row">
                                    <span class="label-text col-md-2 col-form-label text-md-right">Delivery Instructions</span>

                                    <div class="col-md-10">
                                        <input type="text" name="13" class="form-control form-control-rounded" autocomplete="off" placeholder="You can fill this part if you want">
                                    </div>
                                </div>
                                <!-- Form Group End -->
<hr>

                                <hr>
                               
                            </div>
                        </div>
                        <!-- Panel End -->

                         
                         <button class="btn btn-danger" type="submit" name="btn-order">Confirm Order</button>
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