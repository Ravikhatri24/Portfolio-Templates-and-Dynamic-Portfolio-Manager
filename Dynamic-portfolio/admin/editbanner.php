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
                            $sql = "select * from banner where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="form-group">
                            <label class="ntitle">Add New Banner Title</label>
                            <input class="form-control" type="text" name="bannertitle" id=""
                            value="<?php echo $row['bannertitle']; ?>" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                            <label class="ntitle">Add Image for your Banner</label>
                            <input  class="form-control" type="file" name="image" id=""
                            value="<?php echo $row['bannerimage']; ?>" placeholder="Upload image for banner">
                        </div>
                        <button class="btn pad10" name="update" type="submit">Add</button>
                        
                        <?php
                            }
                            if (isset($_POST['update'])) 
                            {
                                $id=$_REQUEST['id'];
                                $sql1="select * from banner where id= '".$id."'";
                                $res2=mysqli_query($con,$sql1);
                                $row=mysqli_fetch_array($res2);
                                $image = $row['bannerimage'];
                                $file= "../images/$image";
                                $res3=unlink($file);
                                if($res3>=1){
                                echo "<script>alert('Image deleted successfully from server')</script>";
                                }
                                else{
                                    echo"<script>alert('Unable to delete Image from server')</script>";
                                }

                                $path='../images/'.basename($_FILES['image']['name']);
                                $image= $_FILES['image']['name'];
                                $id = $_REQUEST['id'];
                                $bannertitle = $_REQUEST['bannertitle'];
                               
                                
                                $sql = "update banner set bannertitle='" . $bannertitle . "', bannerimage='" . $image . "' where `id`='" . $id . "'";
                                $res = mysqli_query($con, $sql);    
                                     
                                if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
                                {
                                    echo"<script> alert('image upload succesful')</script>";
                                }
                                else{
                                    
                                    echo"<script> alert('image upload unsuccesful')</script>";
                                }                    

                               
                                if ($res >= 1) {
                                        
                                        echo "<script>
			                	        alert('Contents updated succesfully...');
			                	        window.location.href='viewbanner.php';
			                	        </script>";
                                } else {
                                        echo "<script>
				                        alert('Error Occured in Updation, Retry!');
				                        window.location.href='editbanner.php';
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