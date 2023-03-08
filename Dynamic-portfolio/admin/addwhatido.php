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
                        <label class="ntitle">Add Box title</label>
                        <input  class="form-control" type="text" name="boxtitle" id="" placeholder="Enter new content">
                        </div>                 
                        <div class="form-group">
                        <label class="ntitle">Add Description line 1</label>
                        <input  class="form-control" type="text" name="desc1" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add Description line 2</label>
                        <input  class="form-control" type="text" name="desc2" id="" placeholder="Enter new content">
                        </div>
                        <div class="form-group">
                        <label class="ntitle">Add Description line 3</label>
                        <input  class="form-control" type="text" name="desc3" id="" placeholder="Enter new content">
                        </div>
                        <button class="btn pad10" type="submit" name="whatido">Add</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    
    <?php
        if(isset($_POST['whatido']))
        {
            $boxtitle=$_REQUEST['boxtitle'];
            $desc1=$_REQUEST['desc1'];
            $desc2=$_REQUEST['desc2'];
            $desc3=$_REQUEST['desc3'];

            $sql="insert into whatido(desc1, desc2 , desc3, boxtitle) values('".$desc1."','".$desc2."','".$desc3."','".$boxtitle."')";
            $res=mysqli_query($con,$sql);

        if($res>=1)
        {   
            echo "<script> alert('New content added Successfully')
            window.location.href='viewwhatido.php'</script>";
            }
        else
        {	
            echo "<script> alert('Oops..!! Try Again Later')
            window.location.href='addwhatido.php'</script>";
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