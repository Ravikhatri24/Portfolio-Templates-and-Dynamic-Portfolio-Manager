<?php 
session_start();
include('connection.php');
echo"<script>alert('hey there')</script>";
		     $email=$_REQUEST['email'];
			$pass=$_REQUEST['pass'];

		$sql="select * from user where email='".$email."' and password='".$pass."'";

	$res=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($res);

	if($data){
		$_SESSION['user']=$email;
		header('location:admin.php');
    }
    else{
        header('location:loginpanel.php');
    }

?>