<?php
	session_start();
	require_once '../config/dbcon.php';
	$fname = $_GET['fname'];
	$_SESSION['fname'] = $fname;
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $fname; ?></title>
	<?php require_once 'links.php'; ?>
	<link rel="stylesheet" href="view.css">
	<style>
		body{
			color : white;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- <?php require_once 'navbar.php'; ?> -->
		<?php require_once '../friend/index.php'; ?>	
	</div>
	
</body>
</html>