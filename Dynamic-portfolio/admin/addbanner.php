<?php include('connection.php');
session_start();
if(isset($_SESSION['user']))
{
?>
<?php include("header.php");
?>

<body style="background-color:whitesmoke;">

    <div class="container">
        <div class="row">
            <div class="addform">
                <h1>Add new content below</h1>
                <br>
                <p>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="ntitle">Add New Banner Title</label>
                            <input class="form-control" type="text" name="bannertitle" id=""
                                placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                            <label class="ntitle">Add Image for your Banner</label>
                            <input class="form-control" type="file" name="image" id=""
                                placeholder="Upload image for banner"
                                accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png">
                        </div>
                        <button class="btn pad10" name="banner" type="submit">Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['banner']))
{
    $bannertitle=$_REQUEST['bannertitle'];
	$path='../images/'.basename($_FILES['image']['name']);
    $image= $_FILES['image']['name'];

$sql="insert into banner(bannertitle, bannerimage) values('".$bannertitle."','".$image."')";
$res=mysqli_query($con,$sql);

if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    echo"<script> alert('image upload succesful')</script>";
}
else{
    
    echo"<script> alert('image upload unsuccesful')</script>";
}

if($res>=1)
{   
	echo "<script> alert('New content added Successfully')
	window.location.href='viewbanner.php'</script>";
	}
else
{	
	echo "<script> alert('Oops..!! Try Again Later')
    window.location.href='addbanner.php'</script>";
    }
}
?>
    <?php include("footer.php");
?>
    <?php
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>