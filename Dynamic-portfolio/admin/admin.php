<?php include("connection.php");
session_start();
if(isset($_SESSION['user']))
{
 ?>
<?php include("header.php");
?>

<body>
    <div class="bg">
        <div class="sidebar">
            <div class="usertitle"><br><br><br>
                <i class="far fa-user fa-5x" style="color:white"></i>
                <br>
                <h1>Admin</h1>
                <button><a href="logout.php">logout</a></button>
                <hr>
            </div>
            <div class="dashboard">
                <button class="accordion"><a href="admin.php">Dashboard</a> </button>
                <div class="panel2"></div>
                <button class="accordion"><i class="fas fa-plus"></i>   &nbsp;&nbsp;Experience</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addexperience.php" target="if1">Add Experience</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewexperience.php" target="if1">View Experience </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i> &nbsp;&nbsp;  Skills</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addskills.php" target="if1">Add Skills</a></li>
                        </ul>

                    </p>
                    <p>
                        <ul>
                            <li><a href="viewskills.php" target="if1">View Skills </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Education</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addeducation.php" target="if1">Add Education </a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="vieweducation.php" target="if1">View Education </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Banner</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addbanner.php" target="if1">Add new Banner </a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewbanner.php" target="if1">View Banners </a></li>
                        </ul>
                    </p>                    
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; What i do title</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addwhatidotitle.php" target="if1">Add What i do title</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewwhatidotitle.php" target="if1">View what i do title </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; What i do box</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addwhatido.php" target="if1">Add What i do box</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewwhatido.php" target="if1">View What i do box </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Work Title</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addworktitle.php" target="if1">Add Work title</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewworktitle.php" target="if1">View Work title </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Work box</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addwork.php" target="if1">Add Work box</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewwork.php" target="if1">View Work box </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Information</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addinformation.php" target="if1">Add Information</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewinformation.php" target="if1">View Information </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Footer Description</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="adddescription.php" target="if1">Add Description</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewdescription.php" target="if1">View Description </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Footer Address</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addaddress.php" target="if1">Add Address</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewaddress.php" target="if1">View Address </a></li>
                        </ul>
                    </p>
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; About</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addabout.php" target="if1">Add About</a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewabout.php" target="if1">View About </a></li>
                        </ul>
                    </p>                    
                </div>
                 <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; About Description</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addaboutdescription.php" target="if1">Add Description </a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewaboutdescription.php" target="if1">View Description </a></li>
                        </ul>
                    </p>                    
                </div>
                <button class="accordion"><i class="fas fa-plus"></i>  &nbsp;&nbsp; Blog</button>
                <div class="panel2">
                    <p>
                        <ul>
                            <li><a href="addblog.php" target="if1">Add Blog </a></li>
                        </ul>
                    </p>
                    <p>
                        <ul>
                            <li><a href="viewblog.php" target="if1">View Blog </a></li>
                        </ul>
                    </p>                    
                </div>
            </div>
        </div>
        <div class="frame">
            <iframe frameborder="0" name="if1"  style="overflow: scroll; height: 100%; width:100%"></iframe>
        </div>
    </div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    </script>

<?php include("footer.php");
?>
<?php
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>