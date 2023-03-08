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
                            $sql = "select * from whatidotitle where `id`='" . $id . "'";
                            $res = mysqli_query($con, $sql);
                            
                            while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="form-group">
                                <label class="ntitle">Add What i Do Title</label>
                                <input class="form-control" type="text" name="whatidotitle" id=""
                                value="<?php echo $row['whatidotitle']; ?>" placeholder="Enter new content">
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
                                $whatidotitle = $_REQUEST['whatidotitle'];
                              
                                
                                $sql = "update whatidotitle set whatidotitle='" . $whatidotitle . "' where `id`='" . $id . "'";
                                $res = mysqli_query($con, $sql);
                                
                                if ($res >= 1) {
                                        echo "<script>
			                	        alert('Contents updated succesfully...');
			                	        window.location.href='viewwhatidotitle.php';
			                	        </script>";
                                } else {
                                        echo "<script>
				                        alert('Error Occured in Updation, Retry!');
				                        window.location.href='editwhatidotitle.php';
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