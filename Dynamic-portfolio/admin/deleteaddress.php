<?php include 'connection.php';
session_start();
if (isset($_SESSION['user'])) 
{
    $id=$_REQUEST['id'];
    $res=mysqli_query($con,"delete from address where `id`='".$id."'");
    if($res>=1){
        echo "<script>alert(' Content deleted Successfully !'); window.location.href='viewaddress.php'; </script>";
    }
    else{
        echo "<script>alert(' Unable to delete Selected row !'); window.location.href='viewaddress.php';</script>";
    }

}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>