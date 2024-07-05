<?php
	session_start();
	require_once '../config/dbcon.php';
    require_once 'pic.php';
	if ($_SESSION['fname']) {
		$fname = $_SESSION['fname'];
		/******* To accept mobile number *********/
		/*
		$sqlselect = "SELECT * FROM fname WHERE fname = '$fname' ";
 		$sql = mysqli_query($conn,$sqlselect);
 		$rows = mysqli_fetch_assoc($sql);
		*/

		$finfo_select = "SELECT * FROM finfo WHERE fname = '$fname' ";
		$finfo_sql = mysqli_query($conn,$finfo_select);
		$finfo_rows = mysqli_fetch_assoc($finfo_sql);
		/*
		$profilepic = $_SESSION['fname'].'.jpeg';
		if (!file_exists("/upload/$profilepic")) {
				
		}
*/
		require_once 'finfo_update_query.php';

	}
	else
	{
		header("Location: ../");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello <?php echo $_SESSION['fname']; ?> </title>
	<?php require_once 'bootstrap_links.php'; ?>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	
	<?php require_once 'sample.php'; ?>
	<div class="container">
		<div class="card">
		<div class="row">
			<div class="col-md-4" >
				<div class="card">
  					<img src="upload/<?php echo $_SESSION['fname'].'.jpeg'; ?>" class="img-responsive" alt="<?php echo $_SESSION['fname']; ?>" style="border-radius: 80%; height:220px">
  					<div class="card-block">
    					<h4 class="card-title"><b><?php echo $_SESSION['fname']; ?></b></h4>
    					<!-- The data encoding type, enctype, MUST be specified as below -->
    					<form enctype="multipart/form-data" action=" " method="POST">              <input name="userfile" type="file" />
        				<input type="submit" value="Send File" name="submit" class="btn btn-primary" />
    					</form>   
  					</div>
				</div>
			</div>
			<br />
			<div class="col-md-8">
					<?php require_once 'finfo_form.php'; ?>
					<br /><br /><br />		
			</div>
		</div>
		</div>
		  
	</div>
	

</body>
</html>

