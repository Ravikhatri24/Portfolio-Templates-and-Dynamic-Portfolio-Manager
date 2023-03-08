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
                    <form method="post" enctype="multipart/form-data">      
                        <div class="form-group">
                        <label class="ntitle">Add Main title</label>
                        <input  class="form-control" type="text" name="maintitle" id="" placeholder="Enter new content">
                        </div>                 
                        <div class="form-group">
                        <label class="ntitle">Add Box title</label>
                        <input  class="form-control" type="text" name="boxtitle" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add Box Description</label>
                        <input  class="form-control" type="text" name="boxdesc" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                            <label class="ntitle">Add Image for your Box</label>
                            <input class="form-control" type="file" name="image" id=""
                                placeholder="Upload image for box"
                                accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png">
                        </div>
                        <button class="btn pad10" type="submit" name="whatido">Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    
    <?php
        if(isset($_POST['whatido']))
        {
            $path='../images/'.basename($_FILES['image']['name']);
            $image= $_FILES['image']['name'];
            $maintitle=$_REQUEST['maintitle'];
            $boxtitle=$_REQUEST['boxtitle'];
            $boxdesc=$_REQUEST['boxdesc'];

            $sql="insert into work(maintitle, boxtitle , boxdesc, boximage) values('".$maintitle."','".$boxtitle."','".$boxdesc."','".$image."')";
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
                window.location.href='viewwork.php'</script>";
            }
            else
            {	
                echo "<script> alert('Oops..!! Try Again Later')
                window.location.href='addwork.php'</script>";
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