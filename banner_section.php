<?php include 'connect.php'; ?>



<?php
  $sql="SELECT * FROM `slider` ORDER BY id DESC";
  $result=$conn->query($sql);
?>




        <section class="banner-section banner-two">

            <div class="banner-carousel owl-theme owl-carousel">

                <?php while($rows = mysqli_fetch_assoc($result)){?>
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url('<?php echo $rows['image'];?>');"></div>
                    <div class="shape-1"></div>
                    
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                    <div class="shape-5"></div>
                    <div class="shape-6"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title"> <?php echo $rows['subtext'];?></div>
                                    <h1> <?php echo $rows['maintext'];?></h1>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="users/register.php">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Start Courier journey with us</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item End -->

                   <?php } ?>   

            </div>
        </section>