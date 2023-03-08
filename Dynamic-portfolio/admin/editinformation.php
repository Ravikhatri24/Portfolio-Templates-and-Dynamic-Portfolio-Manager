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
                            $sql = "select * from information where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="form-group">
                            <label class="ntitle">Edit Paragraph 1</label>
                            <input  class="form-control" type="text" name="para1" id="" 
                            value="<?php echo $row['para1']; ?>" placeholder="Enter new content">
                            </div>   
                            <div class="form-group">
                                <label class="ntitle">Edit Paragraph 2</label>
                                <input class="form-control" type="text" name="para2" id=""
                                value="<?php echo $row['para2']; ?>" placeholder="Enter new content">
                            </div>
                            <div class="form-group">
                                <label class="ntitle">Edit URL of resume</label>
                                <input class="form-control" type="text" name="resumeurl" id=""
                                value="<?php echo $row['resumeurl']; ?>" placeholder="Enter new content">
                            </div>
                            <button class="btn pad10" name="update" type="submit">Add</button>

                        <?php
                            }
                        ?>
		                <?php
                            if (isset($_POST['update'])) 
                            {
                                $id=$_REQUEST['id'];
                                $para1=$_REQUEST['para1'];
                                $para2=$_REQUEST['para2'];
                                $resumeurl=$_REQUEST['resumeurl'];                
                                $sql = "update information set para1='".$para1."', para2='" . $para2 . "', resumeurl='" . $resumeurl . "' where `id`='" . $id . "'";                                
                                $res = mysqli_query($con, $sql);
                                if ($res >= 1) {
                                        echo "<script>alert('Contents updated succesfully...');
			                	        window.location.href='viewinformation.php';</script>";
                                } else {
                                        echo "<script>alert('Error Occured in Updation, Retry!');
				                        window.location.href='editinformation.php';</script>";
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