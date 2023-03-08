<?php include("connection.php");
session_start();
if(isset($_SESSION['user']))
{
    $sql1="select * from information";
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
                            <th>Paragraph 1</th>
                            <th>Paragraph 2 </th>
                            <th>Resume URL</th>
                            <th>Edit</th>
                        </tr>
                        <?php
    		            while($row=mysqli_fetch_array($res))
	  		            {
  		                    ?>

                        <tr>
                            <td> <?php echo $row['para1'];?></td>
                            <td> <?php echo $row['para2'];?></td>
                            <td> <?php echo $row['resumeurl'];?> </td>
                            <td>
                                <a class="btn btn-primary" href="editinformation.php?id=<?php echo $row['id']?>">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a class="btn btn-danger" href="deleteinformation.php?id=<?php echo $row['id']?>"
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