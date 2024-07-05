

<?php
	session_start();
	require_once 'config/dbcon.php';
	/**************************** Admin Login ******************************/
	if (!empty($_POST['login'])) 
	{
		$uname = $_POST['uname'];
		$passwd = $_POST['passwd'];

		$sqlselect = "SELECT * FROM admin WHERE uname = '$uname' and passwd = '$passwd' ";
		$sql = mysqli_query($conn,$sqlselect);
		$rows = mysqli_fetch_assoc($sql);
		//print_r($rows); 

		if (($rows['uname'] == $uname) AND $rows['passwd'] == $passwd) 
		{
			$_SESSION['uname'] = $uname;
			header("Location: admin/");
		}
		else
		{
			echo "<script type='text/javascript'>alert('Invalid Login Credentials');</script>";
		}
 	}
 	/************************ Admin Login End *********************************/
 	/************************Friend's Login **********************************/
 	if (!isset($_POST['flogin'])) {
 		
 		$sqlselect = "SELECT * FROM fname";
 		$sql = mysqli_query($conn,$sqlselect);
 	} else
 	{
 		$fname = $_POST['fname'];
 		$lkey = $_POST['lkey'];

 		$sqlselect = "SELECT * FROM fname WHERE fname = '$fname' AND lkey = '$lkey' ";
 		$sql = mysqli_query($conn,$sqlselect);
 		$rows = mysqli_fetch_assoc($sql);
 		if (($rows['fname'] == $fname) AND ($rows['lkey'] == $lkey)) {
 			$_SESSION['fname'] = $fname;
 			header("Location: friend/");
 		}else
		{
			echo "<script type='text/javascript'>alert('Invalid Key Entered!');</script>";
		}
 	}
 	/**********************Friend's Login End *********************************/

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>My SlamBook</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	
</head>
<body>
	<div class="container">
		<div class="text-capitalize text-center" >
			<h1><strong>Welcome To My SlamBook</strong></h1>
		</div>
		<div class="row">
			<div class="col-md-6" style="padding-top:50px">
				<h3 class="text-center">Friend's Login</h3>
				<br /><br /><br />
				<form action="" method="POST" class="form-group">
					<div class="form-group">
						<label>Friend's Name</label>
						
						<select class="form-control" name="fname">
							<option>Select Your Name</option>
							<?php 

								while ($rows = mysqli_fetch_assoc($sql)) {
									arsort($rows);
							?>
							<option><?php echo $rows['fname']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label >Your Key</label>
						<input type="number" class="form-control" name="lkey" placeholder="Unique Key">
					</div>
					<div class="form-group">
						<input type="submit" name="flogin" value="Proceed" class="btn btn-success">
						<!-- <button type="submit" class="btn btn-success" name="login">Login</button> -->
					</div>
				</form>		
			</div>
			
			<div class="col-md-6" style="padding-top:50px">
				<h3 class="text-center">Admin Login</h3>
				<br /><br /><br />
				<form action="" method="POST" class="form-group">
					<div class="form-group">
						<label class="col-sm-2 control-label">Username</label>
						<input type="text" class="form-control" name="uname" placeholder="Username" value="admin" >
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<input type="password" class="form-control" name="passwd" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="login" class="btn btn-success">
						<!-- <button type="submit" class="btn btn-success" name="login">Login</button> -->
					</div>
				</form>	
			</div>	
		</div>
	</div>

</body>
</html>

