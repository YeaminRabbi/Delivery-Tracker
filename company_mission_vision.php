 <?php


  $sql = "SELECT * FROM company_mission_vission"; 
  $result=$conn->query($sql);
  $rows = mysqli_fetch_assoc($result); 

?>



      <section class="agency-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Best design Agency <br>solutions <span class="dot">.</span></h2>
                            </div>

                            <!--Default Tabs-->
                            <div class="default-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                                    <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                                    
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab-->
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="content">
                                            <div class="text" style="font-family: 'Poppins', sans-serif;"><?php echo $rows['ourMission'];?>.</div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="tab-2">
                                        <div class="content">
                                            <div class="text" style="font-family: 'Poppins', sans-serif;"><?php echo $rows['ourVission'];?>.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="featured-block-two clearfix">
                                <div class="image"><img src="images/resource/featured-image-6.jpg" alt=""></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
