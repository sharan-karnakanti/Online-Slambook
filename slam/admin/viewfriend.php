<?php
	session_start();
	require_once '../config/dbcon.php';

	if ($_SESSION['uname']) {


		$sqlselect = "SELECT * FROM fname";
		$sql = mysqli_query($conn,$sqlselect);
		//$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
		//print_r($row);
		//$rows = mysqli_fetch_assoc($sql);
		$id = 1;

	}
	else
	{
		header("Location: ../ ");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hey Admin : View Friend's</title>
	<?php require_once 'links.php'; ?>
	<link rel="stylesheet" href="viewfriend.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div class="container">
		<!--**************** Nav Bar Added *****************-->
			<?php require_once 'navbar.php'; ?>
		<!--************** Nav Bar Ended *******************-->


		<div class="col s12 m7">
		    <!--h2 class="header">Your Friend's List</h2-->
		    <div class="card horizontal">
		        <div class="card-stacked">
				    <div class="card-content">
				        <h4 class="header">Your Friend's List</h4>
				    </div>
				    <div class="card-action">
		          	    <!--a href="#">This is a link</a-->
			    	</div>
	    		</div>
			</div>
  		</div>


  		<table class="responsive-table centered highlight">
			<thead>
				<tr>
					<th data-field='id'>Id</th> 
					<th data-field='name'>Name</th>
					<th data-field='mobile'>Mobile</th>
					<th data-field='key'>Key</th>
					<th data-field='view'>View</th>
					<th data-field='delete'>Delete</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				//array_multisort(while($rows = mysqli_fetch_assoc($sql){}));
				while($rows = mysqli_fetch_assoc($sql)) {	
					
			?>
				<tr>
					<td><?php echo $id; ?></td> 
					<td><?php echo $rows['fname']; ?></td>
					<td><?php echo $rows['mobile']; ?></td>
					<td><?php echo $rows['lkey']; ?></td>
					<?php $_SESSION['fname'] = $rows['fname'];  ?>
					<!--td><a href="view.php?fname=<?php echo $rows['fname']; ?> & type=view ">view</a></td-->
					<td><a href="view.php?fname=<?php echo $rows['fname'];?>">view</a></td>
					<td><a href="del.php?id=<?php echo $rows['id'];?>">Delete</a></td>
				</tr>
			<?php 
				$id = $id +1;
			} ?>
			</tbody>
		</table>


	</div>
</body>
</html>
