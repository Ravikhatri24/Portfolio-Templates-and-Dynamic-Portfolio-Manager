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
                        <label class="ntitle">Add Email address</label>
                        <input  class="form-control" type="email" name="email" id="" placeholder="Enter new content">
                        </div> 
                        <div class="form-group">
                        <label class="ntitle">Add Contact Number</label>
                        <input  class="form-control" type="number" name="contact" id="" placeholder="Enter new content">
                        </div> 
                        <div class="form-group">
                        <label class="ntitle">Add Address line 1</label>
                        <input  class="form-control" type="text" name="address1" id="" placeholder="Enter new content">
                        </div>   
                        <div class="form-group">
                        <label class="ntitle">Add Address line 2</label>
                        <input  class="form-control" type="text" name="address2" id="" placeholder="Enter new content">
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
           
            $email=$_REQUEST['email'];
            $contact=$_REQUEST['contact'];
            $address1=$_REQUEST['address1'];
            $address2=$_REQUEST['address2'];

            $sql="insert into address(email, contact, address1, address2) values('".$email."','".$contact."','".$address1."','".$address2."')";
            $res=mysqli_query($con,$sql);
            if($res>=1)
            {   
                echo "<script> alert('New content added Successfully')
                window.location.href='viewaddress.php'</script>";
            }
            else
            {	
                echo "<script> alert('Oops..!! Try Again Later')
                window.location.href='addaddress.php'</script>";
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