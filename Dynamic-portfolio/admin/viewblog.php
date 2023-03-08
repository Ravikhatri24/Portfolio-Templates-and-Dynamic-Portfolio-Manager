<?php include("connection.php");
session_start();
if(isset($_SESSION['user']))
{
    $sql1="select * from blog";
    $res=mysqli_query($con,$sql1);
 ?>
<?php include("header.php");
?>
<body  style="background-color:whitesmoke;">

    <div class="container">
        <div class="row">
            <div>
                <h1>Below is a table representing your data</h1>
                <br>
                <div class="table">
                    <table>
                        <tr>
                            <th>Blog title</th>
                            <th>Blog Description </th>   
                            <th>Blog Name </th>                        
                            <th>Blog Image </th>                            
                            <th>Edit</th>
                        </tr>
                        <?php
    		            while($row=mysqli_fetch_array($res))
	  		            {
  		                    ?>

                        <tr>
                            <td> <?php echo $row['blogtitle'];?></td>
                            <td> <?php echo substr($row['blogdesc'],0,300)?></td>   
                            <td> <?php echo $row['blogname'];?></td>                          
                            <td> <img src="../images/<?php echo $row['blogimage'];?>" alt="/" style="height: 200px; margin-left: 38px; width: 300px;"></td>
                            <td>
                                <a class="btn btn-primary" href="editblog.php?id=<?php echo $row['id']?>">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a class="btn btn-danger" href="deleteblog.php?id=<?php echo $row['id']?>"
                                    onClick="return confirm('Are you sure want to delete?')">
                                    <span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php");
?>
<?php
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>