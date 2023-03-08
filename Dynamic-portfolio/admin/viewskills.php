<?php include("connection.php");
session_start();
if(isset($_SESSION['user']))
{
    $sql1="select * from skills";
    $res=mysqli_query($con,$sql1);
    
 ?>
<?php include("header.php");
?>
<body style="background-color:whitesmoke;">

    <div class="container">
        <div class="row">
            <div>
                <h1>Below is a table representing your data</h1>
                <br>
                <div class="table">
                    <table>
                        <tr>
                            <th> Skills title </th>
                            <th> Confidence level from 1 to 100 </th>
                            <th> Edit</th>
                        </tr>
                        <?php
    		            while($row=mysqli_fetch_array($res))
	  		            {
  		                    ?>

                        <tr>
                            <td> <?php echo $row['skilltitle'];?></td>
                            <td> <?php echo $row['number'];?> </td>
                            <td>
                                <a class="btn btn-primary" href="editskills.php?id=<?php echo $row['id']?>">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a class="btn btn-danger" href="deleteskills.php?id=<?php echo $row['id']?>"
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


    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    </script>

<?php include("footer.php");
?>
<?php
}
else{
    echo "<script>alert('please Login First')
    window.location.href='loginpanel.php'</script>";
    
}
?>