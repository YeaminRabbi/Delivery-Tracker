<?php
  $id = $_GET['id']; 

  $sql = "SELECT * FROM small_description_about_website"; 
  $result=$conn->query($sql);
  $rows = mysqli_fetch_assoc($result); 

?>


        <section class="featured-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box"><img src=" <?php echo $rows['image'];?>" alt=""></div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2> <?php echo $rows['heading'];?> <span class="dot">.</span></h2>
                                <div class="lower-text">
                                    <?php echo $rows['description'];?>.
                                </div>
                            </div>

                            <div class="features">
                                <div class="row clearfix">


                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <h6> <?php echo $rows['pointheader'];?></h6>
                                            <div class="text" style="font-family: 'Poppins', sans-serif;">
                                                 <?php echo $rows['pointdescription'];?>.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
