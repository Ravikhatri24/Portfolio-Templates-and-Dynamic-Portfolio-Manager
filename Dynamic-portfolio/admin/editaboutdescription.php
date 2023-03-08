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
                            $sql = "select * from aboutdescription where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="form-group">
                            <label class="ntitle">Edit Paragraph</label>
                            <input  class="form-control" type="text" name="para" id="" 
                            value="<?php echo $row['para']; ?>" placeholder="Enter new content">
                            </div>   
                            <button class="btn pad10" name="update" type="submit">Add</button>

                        <?php
                            }
                        ?>
		                <?php
                            if (isset($_POST['update'])) 
                            {
                                $id=$_REQUEST['id'];
                                $para=$_REQUEST['para'];                
                                $sql = "update aboutdescription set para='".$para."' where `id`='" . $id . "'";                                
                                $res = mysqli_query($con, $sql);
                                if ($res >= 1) {
                                        echo "<script>alert('Contents updated succesfully...');
			                	        window.location.href='viewaboutdescription.php';</script>";
                                } else {
                                        echo "<script>alert('Error Occured in Updation, Retry!');
				                        window.location.href='editaboutdescription.php';</script>";
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