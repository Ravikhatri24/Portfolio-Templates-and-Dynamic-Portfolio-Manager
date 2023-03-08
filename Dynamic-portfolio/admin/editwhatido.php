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
                    <form method="post">
                        <?php
                            $id = $_REQUEST['id'];
                            $sql = "select * from whatido where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="form-group">
                        <label class="ntitle">Add Box title</label>
                        <input  class="form-control" type="text" name="boxtitle" id="" 
                        value="<?php echo $row['boxtitle']; ?>" placeholder="Enter new content">
                        </div>   
                            <div class="form-group">
                                <label class="ntitle">Add Description line 1</label>
                                <input class="form-control" type="text" name="desc1" id=""
                                value="<?php echo $row['desc1']; ?>" placeholder="Enter new content">
                            </div>
                            <div class="form-group">
                                <label class="ntitle">Add Description line 2</label>
                                <input class="form-control" type="text" name="desc2" id=""
                                value="<?php echo $row['desc2']; ?>" placeholder="Enter new content">
                            </div>
                            <div class="form-group">
                                <label class="ntitle">Add Description line 3</label>
                                <input class="form-control" type="text" name="desc3" id=""
                                value="<?php echo $row['desc3']; ?>" placeholder="Enter new content">
                            </div>
                            <button class="btn pad10" name="update" type="submit">Add</button>

                        <?php
                            }
                        ?>
		                <?php
                            if (isset($_POST['update'])) 
                            {
                                include 'connection.php';
                                $id = $_REQUEST['id'];
                                $boxtitle = $_REQUEST['boxtitle'];
                                $desc1 = $_REQUEST['desc1'];
                                $desc2 = $_REQUEST['desc2'];
                                $desc3 = $_REQUEST['desc3'];                              
                                
                                $sql = "update whatido set boxtitle='".$boxtitle."', desc1='" . $desc1 . "', desc2='" . $desc2 . "', desc3='" . $desc3 . "' where `id`='" . $id . "'";
                                $res = mysqli_query($con, $sql);
                                
                                if ($res >= 1) {
                                        echo "<script>
			                	        alert('Contents updated succesfully...');
			                	        window.location.href='viewwhatido.php';
			                	        </script>";
                                } else {
                                        echo "<script>
				                        alert('Error Occured in Updation, Retry!');
				                        window.location.href='editwhatido.php';
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