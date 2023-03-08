<?php include("connection.php");
    $sql="select * from banner";
    $banner=mysqli_query($con,$sql);

    $sql="select * from whatidotitle";
    $whatidotitle=mysqli_query($con,$sql);

    $sql="select * from whatido";
    $whatido=mysqli_query($con,$sql);

    $sql="select * from worktitle";
    $worktitle=mysqli_query($con,$sql);

    $sql="select * from work";
    $work=mysqli_query($con,$sql);
    
    $sql="select * from information";
    $information=mysqli_query($con,$sql);

    $sql="select * from footerdescription";
    $footerdescription=mysqli_query($con,$sql);

    $sql="select * from address";
    $address=mysqli_query($con,$sql);
?>

<section id="information" style="background-color: rgba(196, 196, 196, 1)">
        <div class="container animate-box slideInUp animated" data-aos="fade-up">
            <div class="row information">
                <?php
                    while($row=mysqli_fetch_array($information))
                    {
                ?>
                    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="2500">
                    <?php echo $row['para1']; ?>
                    <br><br> <?php echo $row['para2']; ?>
                    <br><br><a href=" <?php echo $row['resumeurl']; ?>"> Read my resume here </a>
                <?php 
                    }
                ?>
                    <br><br><br><br><br>
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