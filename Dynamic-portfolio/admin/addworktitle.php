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
                    <form method="post" >
                        <div class="form-group">
                        <label class="ntitle">Add Work Title</label>
                        <input  class="form-control" type="text" name="worktitle" id="" placeholder="Enter new content">
                        </div>
                        <button class="btn pad10" type="submit" name='addwork'>Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['addwork']))
        {
            $worktitle=$_REQUEST['worktitle'];
           
            $sql="insert into worktitle(worktitle ) values('".$worktitle."')";
            $res=mysqli_query($con,$sql);

        if($res>=1)
        {   
            echo "<script> alert('New content added Successfully')
            window.location.href='viewworktitle.php'</script>";
            }
        else
        {	
            echo "<script> alert('Oops..!! Try Again Later')
            window.location.href='addworktitle.php'</script>";
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