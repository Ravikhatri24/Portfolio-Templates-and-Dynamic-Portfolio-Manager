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
                    <form method="post" action="addskillsinsert.php">
                        <div class="form-group">
                        <label class="ntitle">Add New Skills</label>
                        <input  class="form-control" type="text" name="addskill" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add percentage value from 1 to 100</label>
                        <input  class="form-control" type="text" name="number" id="" placeholder="Enter new content">
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