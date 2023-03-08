<?php include 'connection.php';
session_start();
if (isset($_SESSION['user'])) 
{
    ?>
<?php include("header.php");
?>

<body style="background-color:whitesmoke;">

    <div class="container">
        <div class="row">
            <div class="addform">
                <h1>Edit your content below</h1>
                <br>
                <p>
                    <form method="post" enctype="multipart/form-data">
                        <?php
                            $id = $_REQUEST['id'];
                            $sql = "select * from blog where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="form-group">
                            <label class="ntitle">Main Title</label>
                            <input  class="form-control" type="text" name="blogtitle" id="" 
                            value="<?php echo $row['blogtitle']; ?>" placeholder="Enter new content">
                            </div>  
                           
                            <div class="form-group">
                                <label class="ntitle">Add Box title</label>
                                <textarea id="froala-editor" rows="4" cols="50"  class="form-control"  type="text" name="blogdesc"  placeholder="Enter new content"
                                style="height:50%;width:100%;" > <?php echo $row['blogdesc']; ?> </textarea>
                            </div>
                            <div class="form-group">
                            <label class="ntitle">Add Blog name</label>
                            <input  class="form-control" type="text" value="<?php echo $row['blogname']; ?>" name="blogname" id="" placeholder="Enter new content">
                            </div>
                            <div class="form-group">
                            <label class="ntitle">Add Image for Box</label>
                            <input  class="form-control" type="file" name="image" id=""
                            value="<?php echo $row['boximage']; ?>" placeholder="Upload image for banner">
                        </div>
                            <button class="btn pad10" name="update" type="submit">Add</button>

                        <?php
                            }
                        ?>
		                <?php
                            if (isset($_POST['update'])) 
                            {
                                $id=$_REQUEST['id'];
                                $sql1="select * from blog where id= '".$id."'";
                                $res2=mysqli_query($con,$sql1);
                                $row=mysqli_fetch_array($res2);
                                $image2 = $row['blogimage'];
                                $file= "../images/$image2";
                                $res3=unlink($file);
                                if($res3>=1){
                                echo "<script>alert('Image deleted successfully from server')</script>";
                                }
                                else{
                                    echo"<script>alert('Unable to delete Image from server')</script>";
                                }

                                $blogtitle=$_REQUEST['blogtitle'];
                                $blogdesc=$_REQUEST['blogdesc'];  
                                $path='../images/'.basename($_FILES['image']['name']);                               
                                $image= $_FILES['image']['name'];
                                
                                $blogname=$_REQUEST['blogname'];                                
                                $blognametemp="../".$blogname.".php";
                                if (file_exists($blognametemp)) {
                                    $fh = fopen($blognametemp, 'w');  
                                    $stringData = "
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
                                                    <img src='images/<?php echo '".$image."'?>' height='450px' width='100%' alt='' style='padding:10px;'>
                                                </div>
                                                <div class='col-md-6 htitle'>
                                                    <?php                              
                                                        echo '".$blogtitle."';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                                            <div class='row information2'>
                                                <div class='col-md-8 col-md-offset-2 text-left' data-aos='fade-up' data-aos-duration='1500'>
                                                    <?php                              
                                                        echo '".$blogdesc."';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <?php include('footer.php')?>";   
                                    fwrite($fh, $stringData);
                                    fclose($fh);

                                } else {
                                    $blogname1 = $row['blogname'];                                   
                                    $file= "../$blogname1.php";
                                    $res3=unlink($file);
                                    if($res3>=1){
                                    echo "<script>alert(' Old Blog Page deleted successfully from server')</script>";
                                    }
                                    else{
                                        echo"<script>alert('Unable to delete Old Blog Page from server')</script>";
                                    }
                                    
                                    $fh = fopen($blognametemp, 'w');  
                                    $stringData = "
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
                                                    <img src='images/<?php echo '".$image."'?>' height='450px' width='100%' alt='' style='padding:10px;'>
                                                </div>
                                                <div class='col-md-6 htitle'>
                                                    <?php                              
                                                        echo '".$blogtitle."';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                                            <div class='row information2'>
                                                <div class='col-md-8 col-md-offset-2 text-left' data-aos='fade-up' data-aos-duration='1500'>
                                                    <?php                              
                                                        echo '".$blogdesc."';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <?php include('footer.php')?>";   
                                    fwrite($fh, $stringData);
                                    fclose($fh);
                                }                                
                               
                                $sql = "update blog set blogtitle='".$blogtitle."', blogdesc='" . $blogdesc . "' ,blogimage='".$image."',blogname ='".$blogname."' where `id`='" . $id . "'";                                
                                $res = mysqli_query($con, $sql);
                                if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
                                {
                                    echo"<script> alert('image upload succesful ')</script>";
                                }
                                else{
                                    
                                    echo"<script> alert('image upload unsuccesful')</script>";
                                }
                                if ($res >= 1) {
                                        echo "<script>
			                	        alert('Contents updated succesfully...');
			                	        window.location.href='viewblog.php';
			                	        </script>";
                                } else {
                                        echo "<script>
				                        alert('Error Occured in Updation, Retry!');
				                        window.location.href='editblog.php';
				                        </script>";
                                }
                            }
                        ?>
                    </form>
                </p>
            </div>
        </div>
    </div>
    <?php include("footer.php");
?>

<?php
} else {
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";

}
?>