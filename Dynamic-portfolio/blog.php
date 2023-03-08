<?php include("connection.php");
?>
<?php include('header.php');
?>

<body style="background-color:white">
        <div class="container-fluid" style=" background-color:whitesmoke">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <div class="weblogo">
                            <h2>
                                <a href="#" style="color:black;"> <strong><u> M.</u></strong></a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="navlogo" onclick="openNav()" style="color:black">
                            <i class="fas fa-bars fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="services.php">Services</a>
                    <a href="work.php">Work</a>
                    <a href="blog.php">Blog</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            
<section id="blog" style="background-color:whitesmoke;">
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-md-12 text-center ntitle" style="padding-top:5em;margin-top:10em;">blog</div>
            <div class="col-md-12 text-center"><strong><i>\ \</i></strong><br><br><br><br><br>.</div>
        </div>
        <div class="container">
            <div class="row">
            <?php
    		    while($row=mysqli_fetch_array($blog))
	  		    {
            ?>
                <div class="col-md-4 col-sm-4 blogbox animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500">
                    <div><img src="images/<?php echo $row['blogimage']; ?>" alt="" height="300px" width="100%"></div>
                    <div style="background-color:white;" class="pad10"><br><br> <a href="<?php echo $row['blogname']; ?>.php"><?php echo $row['blogtitle']; ?></a>
                        <br><br><br>
                        <div class="desc"><?php echo substr($row['blogdesc'],0,100); ?></div>
                    </div>
                </div>
            <?php 
                }
            ?>                
            </div>
        </div>
    </section>


    <?php include('footer.php');
    ?>