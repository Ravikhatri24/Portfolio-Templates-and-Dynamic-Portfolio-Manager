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
                            <label class="ntitle">Add About Title</label>
                            <input class="form-control" type="text" name="abouttitle" id=""
                                placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                            <label class="ntitle">Add Image for About</label>
                            <input class="form-control" type="file" name="image" id=""
                                placeholder="Upload image for about"
                                accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png">
                        </div>
                        <button class="btn pad10" name="about" type="submit">Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['about']))
{
    $abouttitle=$_REQUEST['abouttitle'];
	$path='../images/'.basename($_FILES['image']['name']);
    $image= $_FILES['image']['name'];

$sql="insert into about(abouttitle, aboutimage) values('".$abouttitle."','".$image."')";
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
	window.location.href='viewabout.php'</script>";
	}
else
{	
	echo "<script> alert('Oops..!! Try Again Later')
    window.location.href='addabout.php'</script>";
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