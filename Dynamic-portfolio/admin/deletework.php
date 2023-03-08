<?php include 'connection.php';
session_start();
if (isset($_SESSION['user'])) 
{
    $id=$_REQUEST['id'];
    $sql1="select * from work where id= '".$id."'";
    $res2=mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($res2);
    $image = $row['boximage'];
    $file= "../images/$image";
    $res3=unlink($file);
    if($res3>=1){
    echo "<script>alert('Image deleted successfully from server')</script>";
    }
    else{
        echo"<script>alert('Unable to delete Image from server')</script>";
    }

    $res=mysqli_query($con,"delete from work where `id`='".$id."'");

    if($res>=1){
        echo "<script>
        alert(' Content deleted Successfully !')
        window.location.href='viewwork.php';
        </script>";
    }
    else{
        echo "<script>
    alert(' Unable to delete Selected row !')
    window.location.href='viewwork.php';
    </script>";
    }
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>