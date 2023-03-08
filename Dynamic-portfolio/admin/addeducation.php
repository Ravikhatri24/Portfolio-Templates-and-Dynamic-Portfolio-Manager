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
                    <form method="post" action="addeducationinsert.php">
                        <div class="form-group">
                        <label class="ntitle">Add New Education</label>
                        <input  class="form-control" type="text" name="addeducation" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add year Duration for Experience</label>
                        <input  class="form-control" type="text" name="year" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add location</label>
                        <input  class="form-control" type="text" name="location" id="" placeholder="Enter new content">
                        </div>
                        <button class="btn pad10" type="submit">Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>


    <?php include("footer.php");
?>
<?php
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>