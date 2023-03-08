<?php 
include("connection.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['emailid'];
$message=$_REQUEST['message'];

$sql="INSERT INTO message ( name , email , message) VALUES ('".$name."','".$email."','".$message."')";

$res=mysqli_query($con,$sql);
if($res>=1)
{
	echo "<script> Your Message has been Received</script>";
	
	header("location:index.php");
	}
else
{
	
	echo "<script> Opps..!! Try Again Later</script>";
	header("location:contact.php");
	}
?>
