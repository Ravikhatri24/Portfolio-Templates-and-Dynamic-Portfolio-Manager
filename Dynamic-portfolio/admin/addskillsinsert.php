<?php include('connection.php');
session_start();
if(isset($_SESSION['user']))
{
$skill=$_REQUEST['addskill'];
$number=$_REQUEST['number'];

$sql="insert into skills(skilltitle, number) values('".$skill."','".$number."')";
$res=mysqli_query($con,$sql);
if($res>=1)
{
	echo "<script> alert('New content added Successfully')
	window.location.href='addskills.php'</script>";

	}
else
{
	
	echo "<script> alert('Oops..!! Try Again Later')
    window.location.href='addskills.php'</script>";
	}
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>