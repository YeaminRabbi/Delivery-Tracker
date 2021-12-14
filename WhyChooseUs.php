<?php include 'connect.php'; ?>



<?php
  $sql="SELECT * FROM `WhyChooseUs` ORDER BY id DESC";
  $result=$conn->query($sql);
?>




        <section class="why-us-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="round-box">
                                <div class="image-box">
                                    <img src="images/resource/featured-image-8.jpg" alt="">
                                </div>
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">

                   
                        <div class="inner">
                            <div class="sec-title">
                                <h3>WHY YOU SHOULD CHOOSE Courierashbe  <span class="dot">.com</span></h3>
                            </div>
                        <?php while($rows = mysqli_fetch_assoc($result)){?>
                            <div class="features">
                                <div class="feature">
                                    <div class="inner-box">
                                        <h6><?php echo $rows['pointheading'];?></h6>
                                        <div class="text" style="font-family: 'Poppins', sans-serif;"><?php echo $rows['description'];?>.</div>
                                    </div>
                                </div>
                                
                            </div>
                        <?php } ?>  

                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
