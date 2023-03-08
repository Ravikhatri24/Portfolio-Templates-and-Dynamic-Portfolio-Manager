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
                    <form method="post">      
                        <div class="form-group">
                        <label class="ntitle">Add Paragraph 1</label>
                        <input  class="form-control" type="text" name="para1" id="" placeholder="Enter new content">
                        </div>                 
                        <div class="form-group">
                        <label class="ntitle">Add Paragraph 2</label>
                        <input  class="form-control" type="text" name="para2" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add URL of resume</label>
                        <input  class="form-control" type="text" name="resumeurl" id="" placeholder="Enter new content">
                        </div>
                        <button class="btn pad10" type="submit" name="insert">Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    
    <?php
        if(isset($_POST['insert']))
        {
           
            $para1=$_REQUEST['para1'];
            $para2=$_REQUEST['para2'];
            $resumeurl=$_REQUEST['resumeurl'];

            $sql="insert into information(para1, para2 , resumeurl) values('".$para1."','".$para2."','".$resumeurl."')";
            $res=mysqli_query($con,$sql);
            if($res>=1)
            {   
                echo "<script> alert('New content added Successfully')
                window.location.href='viewinformation.php'</script>";
            }
            else
            {	
                echo "<script> alert('Oops..!! Try Again Later')
                window.location.href='addinformation.php'</script>";
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