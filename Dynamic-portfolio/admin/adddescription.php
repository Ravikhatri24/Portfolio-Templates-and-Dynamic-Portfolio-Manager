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
                        <label class="ntitle">Add Paragraph</label>
                        <input  class="form-control" type="text" name="para" id="" placeholder="Enter new content">
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
           
            $para=$_REQUEST['para'];

            $sql="insert into footerdescription(para) values('".$para."')";
            $res=mysqli_query($con,$sql);
            if($res>=1)
            {   
                echo "<script> alert('New content added Successfully')
                window.location.href='viewdescription.php'</script>";
            }
            else
            {	
                echo "<script> alert('Oops..!! Try Again Later')
                window.location.href='adddescription.php'</script>";
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