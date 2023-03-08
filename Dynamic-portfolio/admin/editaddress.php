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
                    <form method="post" >
                        <?php
                            $id = $_REQUEST['id'];
                            $sql = "select * from address where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="form-group">
                            <label class="ntitle">Edit Email address</label>
                            <input  class="form-control" type="email" name="email" id="" 
                            value="<?php echo $row['email']; ?>" placeholder="Enter new content">
                            </div>   
                            <div class="form-group">
                            <label class="ntitle">Edit Contact Number</label>
                            <input  class="form-control" type="number" name="contact" id="" 
                            value="<?php echo $row['contact']; ?>" placeholder="Enter new content">
                            </div>   
                            <div class="form-group">
                            <label class="ntitle">Edit  Address line 1</label>
                            <input  class="form-control" type="text" name="address1" id="" 
                            value="<?php echo $row['address1']; ?>" placeholder="Enter new content">
                            </div>   
                            <div class="form-group">
                            <label class="ntitle">Edit  Address line 2</label>
                            <input  class="form-control" type="text" name="address2" id="" 
                            value="<?php echo $row['address2']; ?>" placeholder="Enter new content">
                            </div>   
                            <button class="btn pad10" name="update" type="submit">Add</button>

                        <?php
                            }
                        ?>
		                <?php
                            if (isset($_POST['update'])) 
                            {
                                $id=$_REQUEST['id'];
                                $email=$_REQUEST['email'];
                                $contact=$_REQUEST['contact'];
                                $address1=$_REQUEST['address1'];
                                $address2=$_REQUEST['address2'];  

                                $sql = "update address set email='".$email."',contact='".$contact."',address1='".$address1."',address2='".$address2."' where `id`='" . $id . "'";                                
                                $res = mysqli_query($con, $sql);
                                if ($res >= 1) {
                                        echo "<script>alert('Contents updated succesfully...');
			                	        window.location.href='viewaddress.php';</script>";
                                } else {
                                        echo "<script>alert('Error Occured in Updation, Retry!');
				                        window.location.href='editaddress.php';</script>";
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