<?php include('connection.php');
session_start();
if(isset($_SESSION['user']))
{
$education=$_REQUEST['addeducation'];
$year=$_REQUEST['year'];
$location=$_REQUEST['location'];

$sql="insert into education(educationtitle, year ,location) values('".$education."','".$year."','".$location."')";
$res=mysqli_query($con,$sql);
if($res>=1)
{
	echo "<script> alert('New content added Successfully')
	window.location.href='addeducation.php'</script>";

	}
else
{
	
	echo "<script> alert('Oops..!! Try Again Later')
    window.location.href='addeducation.php'</script>";
	}
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>