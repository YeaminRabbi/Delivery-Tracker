<!DOCTYPE html>
<html lang="en">


<?php include 'header.php'; ?>
<title>Fast Delivery | Contact</title>
<body>


 <?php include 'main_header_menu.php'; ?>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>Courierashbe is a new Delivery company in bangladesh. We provide you a standard delivery services.</p>
                    <p><a href="mailto:zannat0193@gmail.com">zannat0193@gmail.com</a> <br> <a href="tel:01737606961">01737606961</a></p>
                    <div class="side-menu__social">
                        <a href="www.facebook.com/courierashbe"><i class="fab fa-facebook-square"></i></a>
                        <a href="www.twitter.com/courierashbe"><i class="fab fa-twitter"></i></a>
                        <a href="www.instagram/courierashbe"><i class="fab fa-instagram"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Contact</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index">Home</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Office Address<span class="dot">.</span></h2>
                </div>

                <div class="upper-info" style=" margin: auto; justify-content: center;">
                    <div class="row clearfix">
                        <div class="info-block col-xl-12 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5 style="text-align: center;"><b>Courierashbe</b></h5>
                                <div class="text">
                                    <ul class="info">
                                        <li style="text-align: center; font-family: 'Poppins', sans-serif;">243/6, Sultangonj Road, Rayerbazar, Dhaka 1209</li>
                                        <li style="text-align: center; font-family: 'Poppins', sans-serif;"><a href="zannat0193@gmail.com">zannat0193@gmail.com</a></li>
                                        <li style="text-align: center; font-family: 'Poppins', sans-serif;"><a href="tel:01737606961">01737606961</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="form-box">
                    <div class="sec-title">
                        <h2>Write Us a Message<span class="dot">.</span></h2>
                        <span>You can write your complain also</span>
                    </div>
                    <div class="default-form">



                        <form action="backendcontact.php" method="post" enctype="multipart/form-data" >
                            <div class="row clearfix">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="subject" value="" placeholder="Subject" required="" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="username" value="" placeholder="Your Name" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <input type="email" name="email" value="" placeholder="Email Address" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="phone" value="" placeholder="Phone Number" required="" autocomplete="off">
                                    </div>
                                </div>
                              
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <textarea name="message" placeholder="Write Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one" name="submit" type="submit">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Send message</span>
                                    </button>
                                </div>
                            </div>
                        </form>




                    </div>

                </div>
            </div>
        </section>

        <!-- Main Footer Start -->
        <?php include 'footer.php'; ?>
                <!-- Main Footer End -->
                                

</body>


</html>