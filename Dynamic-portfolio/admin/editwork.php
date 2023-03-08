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
                            $sql = "select * from work where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="form-group">
                            <label class="ntitle">Main Title</label>
                            <input  class="form-control" type="text" name="maintitle" id="" 
                            value="<?php echo $row['maintitle']; ?>" placeholder="Enter new content">
                            </div>   
                            <div class="form-group">
                                <label class="ntitle">Add Box title</label>
                                <input class="form-control" type="text" name="boxtitle" id=""
                                value="<?php echo $row['boxtitle']; ?>" placeholder="Enter new content">
                            </div>
                            <div class="form-group">
                                <label class="ntitle">Add Box Description</label>
                                <input class="form-control" type="text" name="boxdesc" id=""
                                value="<?php echo $row['boxdesc']; ?>" placeholder="Enter new content">
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
                                $sql1="select * from work where id= '".$id."'";
                                $res2=mysqli_query($con,$sql1);
                                $row=mysqli_fetch_array($res2);
                                $image2 = $row['boximage'];
                                $file= "../images/$image2";
                                $res3=unlink($file);
                                if($res3>=1){
                                echo "<script>alert('Image deleted successfully from server')</script>";
                                }
                                else{
                                    echo"<script>alert('Unable to delete Image from server')</script>";
                                }

                                $maintitle=$_REQUEST['maintitle'];
                                $boxtitle=$_REQUEST['boxtitle'];
                                $boxdesc=$_REQUEST['boxdesc'];  
                                $path='../images/'.basename($_FILES['image']['name']);                               
                                $image= $_FILES['image']['name'];                  
                                $sql = "update work set maintitle='".$maintitle."', boxtitle='" . $boxtitle . "', boxdesc='" . $boxdesc . "' ,boximage='".$image."' where `id`='" . $id . "'";                                
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
			                	        window.location.href='viewwork.php';
			                	        </script>";
                                } else {
                                        echo "<script>
				                        alert('Error Occured in Updation, Retry!');
				                        window.location.href='editwork.php';
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