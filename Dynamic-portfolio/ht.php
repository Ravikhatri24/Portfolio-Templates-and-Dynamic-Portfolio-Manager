
            <?php include('header.php')?>
            <div class='container-fluid' style=' background-color:whitesmoke'>
                <div class='row'>
                    <div class='col-md-7 col-sm-7'>
                        <div class='weblogo'>
                            <h2>
                                <a href='#' style='color:black;'> <strong><u> M.</u></strong></a>
                            </h2>
                        </div>
                    </div>
                    <div class='col-md-5 col-sm-5'>
                        <div class='navlogo' onclick='openNav()' style='color:black'>
                            <i class='fas fa-bars fa-3x'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id='myNav' class='overlay'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                <div class='overlay-content'>
                    <a href='index.php'>Home</a>
                    <a href='about.php'>About</a>
                    <a href='services.php'>Services</a>
                    <a href='work.php'>Work</a>
                    <a href='blog.php'>Blog</a>
                    <a href='contact.php'>Contact</a>
                </div>
            </div>
            <section >
                <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                    <div class='col-md-12 text-center ntitle' style='padding-top:5em;margin-top:10em;'>blog</div>
                    <div class='col-md-12 text-center'><strong>\ \<br><br></strong></div>
                </div>
                <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <img src='images/<?php echo 'blog5.jpg'?>' height='450px' width='100%' alt='' style='padding:10px;'>
                        </div>
                        <div class='col-md-6 htitle'>
                            <?php                              
                                echo 'bhbh';
                            ?>
                        </div>
                    </div>
                </div>
                <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                    <div class='row information2'>
                        <div class='col-md-8 col-md-offset-2 text-left' data-aos='fade-up' data-aos-duration='1500'>
                            <?php                              
                                echo '<p>hbhb</p><p>bbhb</p><p>bh</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php include('footer.php')?>