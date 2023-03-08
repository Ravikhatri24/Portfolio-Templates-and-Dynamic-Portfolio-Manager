<?php include('connection.php');
session_start();
if(isset($_SESSION['user']))
{
$experience=$_REQUEST['addexp'];
$year=$_REQUEST['year'];
$location=$_REQUEST['location'];

$sql="insert into experience(exptitle, year ,location) values('".$experience."','".$year."','".$location."')";
$res=mysqli_query($con,$sql);
if($res>=1)
{
	echo "<script> alert('New content added Successfully')
	window.location.href='addexperience.php'</script>";

	}
else
{
	
	echo "<script> alert('Oops..!! Try Again Later')
    window.location.href='addexperience.php'</script>";
	}
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>