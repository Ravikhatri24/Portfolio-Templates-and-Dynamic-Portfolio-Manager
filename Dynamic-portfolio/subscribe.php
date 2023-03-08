<?php
include("connection.php");
echo" alert('hello')";

$email=$_REQUEST['emailid'];

$sql="insert into subscribe (emailid) values ('".$email."')";

$res=mysqli_query($con,$sql);

if($res>=1){
    echo "alert(' You Have been Subsribed to our newsletter";
    header("location:index.php");
}
else{
    echo "<script> You Have been Subsribed to our newsletter</script>";
    header("location:about.php");
} 


?>