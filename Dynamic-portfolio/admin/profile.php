<?php include('header.php'); ?>
<?php
include ('connect.php');
if(isset($_SESSION['user']))
{
$sql="select * from register where mail='".$_SESSION['user']."' ";

$res= mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
if($data)
{
?>


<?php
}
}
else
{
	header("location:home.php");
}
?>

	<!-- profile -->
	<div class="container-fluid" style="background-color: silver;">
		<div class="row">
			<div class="col-md-12">
				<h2 align="center" style="font-family: cardo;">Welcome&nbsp;<span><?php echo $data['uname'];?></span></h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3 contain">
				<form method="post" enctype="multipart/form-data">
				<img src="pics/<?php echo $data['Image'];?>" class="user-image" alt="/" style="height: 200px; margin-left: 38px; width: 200px;"><br/><br/><br/>
				<label style="font-size: 15px; margin-left: 38px;">Upload your Profile Picture</label>
				<input type="file" name="resume" style="margin-left: 38px;"><br/>
				<br/>
			</div>
			<div class="col-md-8 contain">
				<i class="fa fa-user fa-3x"></i>&nbsp;&nbsp;<span class="tab">ABOUT</span><br/><br/>
					<div class="row">
						<div class="col-md-6">
							<tr>
								<td><label>User Name:</label></td>
								<td><input type="text" value="<?php echo $data['uname'];?>" disabled></td>
							</tr>
						</div>
						<div class="col-md-6">
							<tr>
								<td><label>Contact Number:</label></td>
								<td><input type="text" value="<?php echo $data['contact'];?>" disabled></td>
							</tr>
						</div>
					</div><br/>
					<div class="row">
						<div class="col-md-6">
							<tr>
								<td><label>Birthday:</label></td>
								<td><input type="text" value="<?php echo $data['dobirth'];?>" disabled></td>
							</tr>
						</div>
						<div class="col-md-6">
							<tr>
								<td><label>Email Address:</label></td>
								<td><input type="text" value="<?php echo $data['mail'];?>" disabled></td>
							</tr>
						</div>
					</div><br/>
					<div class="row">
						<div class="col-md-6">

							<tr>
								<td><label>First Name:</label></td>
								<td><input type="text" name="fname" value="<?php echo $data['fname'];?>"></td>
							</tr>
						</div>
						<div class="col-md-6">
							<tr>
								<td><label>Last Name:</label></td>
								<td><input type="text" value="<?php echo $data['lname'];?>" name="lname"></td>
							</tr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<tr>
								<td><label>Permanent Address:</label></td>
								<td><input type="text" value="<?php echo $data['address'];?>" name="address" style="height: 50px;"></td>
							</tr>
						</div>
					</div><br/><br/>
				<i class="fa fa-trophy fa-3x"></i>&nbsp;&nbsp;<span class="tab">EDUCATION QUALIFICATION</span><br/><br/>
				<h4>Post Graduation Details</h4>
					<div class="row">
						<div class="col-md-6">
							<tr>
								<td><select name="postcol"  style="width: 100%; height: 30px; border-radius: 4px;
								border: 2px solid #FB8C00;">
								<option><?php echo $data['postcol'];?></option>
								</select></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><select name="postdeg" style="width: 100%; height: 30px; border-radius: 4px;
								border: 2px solid #FB8C00;">
									<option><?php echo $data['postdeg'];?></option>
								</select></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="postyear" value="postyear" placeholder="Passout Year"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="postper" value="postper" placeholder="Percentage"></td>
							</tr>
						</div>
					</div>
						<h4>Graduation Details</h4>
						<div class="row">
						<div class="col-md-6">
							<tr>
								<td><select name="gradcol" style="width: 100%; height: 30px; border-radius: 4px;
								border: 2px solid #FB8C00;">
									<option><?php echo $data['gradcol'];?></option>
									
								</select></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><select name="graddeg" style="width: 100%; height: 30px; border-radius: 4px;
								border: 2px solid #FB8C00;">
									<option><?php echo $data['graddeg'];?></option>
									
								</select></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="gradyear" value="<?php echo $data['gradyear'];?>" placeholder="Passout Year"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="gradper" value="gradper" placeholder="Percentage"></td>
							</tr>
						</div>
						</div>
						<h4>Senior Secondary Details</h4>
						<div class="row">
						<div class="col-md-6">
							<tr>
								<td><input type="text" name="senschool" value="<?php echo $data['senschool'];?> placeholder="Enter your School Name"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><select name="senstream" style="width: 100%; height: 30px; border-radius: 4px;
								border: 2px solid #FB8C00;">
									<option><?php echo $data['senstream'];?></option>
									
								</select></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="senyear" value="<?php echo $data['senyear'];?>" placeholder="Passout Year"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="senper" value="<?php echo $data['senper'];?>"" placeholder="Percentage"></td>
							</tr>
						</div>
						</div>
						<h4>High School Details</h4>
						<div class="row">
						<div class="col-md-6">
							<tr>
								<td><input type="text" name="hischool" value="<?php echo $data['hischool'];?>" placeholder="Enter your School Name"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="hisubject" value="<?php echo $data['hisubject'];?>" placeholder="Subjects"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="hiyear" value="<?php echo $data['hiyear'];?>" placeholder="Passout Year"></td>
							</tr>
						</div>
						<div class="col-md-2">
							<tr>
								<td><input type="text" name="hiper" value="<?php echo $data['hiper'];?>" placeholder="Percentage"></td>
							</tr>
						</div>
						</div>
						<br/><br/>	
						<center><input type="submit" name="profile" value="Apply for a job" style="height: 35px; width: 50%; background-color: #1A237E; color: #ffffff; font-size: 25px;"></center>				
					</div>
					
			</div>
		</div>
	</div>
</form>

<?php
if(isset($_POST['profile']))
{
	$img=$_FILES['Image']['name'];
	$path='pics/';
	$bannertitle=$_REQUEST['bannertitle'];

	$sql1=mysqli_query($con,"update register set Image='$img', resume='$resume', fname='$fname', lname='$lname', address='$address', postcol='$postcol', postdeg='$postdeg', postyear='$postyear', postper='$postper', gradcol='$gradcol', graddeg='$graddeg', gradyear='$gradyear', gradper='$gradper', senschool='$senschool', senstream='$senstream', senyear='$senyear', senper='$senper', hischool='$hischool', hisubject='$hisubject', hiyear='$hiyear', hiper='$hiper' where mail='".$_SESSION['user']."' ");
	if($sql1>=1)
	{
		move_uploaded_file($_FILES['Image']['tmp_name'], $path.$img);
		move_uploaded_file($_FILES['resume']['tmp_name'], $path.$resume);
		echo "
		<script>
		window.location.href='pro.php';
		</script>";
	}
}
?>
<?php include('footer.php'); 
?>