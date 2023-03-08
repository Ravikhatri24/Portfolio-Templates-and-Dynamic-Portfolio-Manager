<?php include("connection.php");

    $sql1="select * from whatidotitle";
    $whatidotitle=mysqli_query($con,$sql1);

    $sql3="select * from whatido";
    $whatido=mysqli_query($con,$sql3);

    $sql="select * from footerdescription";
    $footerdescription=mysqli_query($con,$sql);

    $sql="select * from address";
    $address=mysqli_query($con,$sql);


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/js.js"></script>
</head>

<body style="background-color:white">
    <div class="container-fluid" style=" background-color:rgba(196, 196, 196, 1)">
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


    <section id="whatido" style="background-color:rgba(196, 196, 196, 1)">
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500">
            <div class="col-md-12 text-center ntitle" style="padding-top:5em;margin-top:10em;">WHAT I DO</div>
            <div class="col-md-12 text-center"><strong>\ \</strong></div>
            <?php
    		    while($row=mysqli_fetch_array($whatidotitle))
	  		    {
            ?>
            <div class="col-md-12 text-center htitle">
                <strong>
                    <?php                              
                        echo $row['whatidotitle'];
                    ?>
                </strong>
            </div>
            <?php 
                }
            ?>
        </div>
        <div class="container animate-box slideInUp animated" data-aos="fade-up" data-aos-duration="2500"
            style="margin-top:20px;margin-bottom: 8em;">
            <div class="row" style="margin-bottom:8em;">
                <?php
    		    while($row=mysqli_fetch_array($whatido))
	  		    {
            ?>
                <div class="col-md-3 box text-center">
                    <p> <img src="images/loupe.png" alt="" height="70px" width="70px" style="margin:5px;"></p>
                    <p class="ntitle">
                        <?php                              
                            echo $row['boxtitle'];
                        ?>
                    </p>
                    <p><strong>_____</strong></p>
                    <p>
                        <?php                              
                                echo $row['desc1'];
                        ?>
                    </p><br>
                    <p>
                        <?php                              
                                echo $row['desc2'];
                        ?>
                    </p><br>
                    <p>
                        <?php                              
                                echo $row['desc3'];
                        ?>
                    </p><br>
                </div>
                <?php 
                }
            ?>
            </div>
        </div>
    </section>
    <section id="information" style="background-color: white">
        <div class="container animate-box slideInUp animated" data-aos="fade-up">
            <div class="row information">
                <div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="2500">
                    <h1><strong>Subsribe Newsletter</strong></h1>
                    <br><br>Subscribe our Newsletter and get latest update
                    <br><br>
                    <form class="form-inline" method="post" action="subscribe.php" data-aos="fade-up"
                        data-aos-duration="1500">
                        <input type="email" name="emailid" id="emailid" required=""
                            placeholder="Enter your email address" class="inputemail">
                        <input type="submit" value="Subscribe Now" class="submitemail">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid animate-box slideInUp animated" style="background-color:#002bdc; padding:7em;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footerleft" data-aos="fade-up" data-aos-duration="2500">
                        <h1 class="titlefooter"><strong> Lets Talk</strong></h1><br>
                        <?php
                            while($row=mysqli_fetch_array($footerdescription))
                            {
                        ?>
                        <p>
                            <?php echo $row['para']; ?>
                        </p>
                        <?php
                            }
                        ?>
                    </div>

                    <div class="col-md-6 footerright" data-aos="fade-up" data-aos-duration="2500">
                        <h1 class="titlefooter"><strong>Info</strong></h1><br>
                        <?php
                            while($row=mysqli_fetch_array($address))
                            {
                        ?>
                        Email:<?php echo $row['email']; ?>
                        <br>Phone: <?php echo $row['contact']; ?><br>
                        Address:<Address><?php echo $row['address1']; ?> <br><?php echo $row['address2']; ?></Address>
                        <?php
                            }
                        ?>
                        <br>Facebook Twitter Dribble
                    </div>
                </div>
                <div class="row footerbanner" data-aos="fade-up" data-aos-duration="2500">
                    <div class="col-md-12">
                        <br><br><br>&copy; Copyright &copy;2019 All rights reserved | This template is made with love by
                        <br> Colorlib Demo Images: Unsplash , Pexels
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
    AOS.init();
    </script>
    <script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
    </script>
</body>

</html>