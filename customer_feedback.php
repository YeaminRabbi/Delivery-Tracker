<?php
  $sql="SELECT * FROM `customerfeedback` ORDER BY id DESC";
  $result=$conn->query($sql);
?>




        <section class="testimonials-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Customer feedbacks <span class="dot">.</span></h2>
                </div>
                  
                <div class="carousel-box">
                    <div class="testimonials-carousel owl-theme owl-carousel">
                          <?php while($rows = mysqli_fetch_assoc($result)){?>

                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span></span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><i class="fas fa-users"></i></a></div>
                                    <div class="name"><?php echo $rows['username'];?></div>
                                    
                                </div>
                                <div class="text" style="font-family: 'Poppins', sans-serif;"> <?php echo $rows['complain'];?>..</div>
                            </div>
                        </div>

                        <?php } ?>  
                    </div>
                </div>
                   
            </div>
        </section>
