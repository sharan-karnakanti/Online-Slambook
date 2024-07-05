<?php
	
	require_once 'config/dbcon.php';

	
		$sqlselect = "SELECT * FROM fname";
 		$sql = mysqli_query($conn,$sqlselect);
 		
 	while($rows = mysqli_fetch_assoc($sql))
	{
 		$fname = $rows['fname'];
 		$mobile = $rows['mobile'];

 		$finfo_insert = "INSERT INTO finfo (fname, mobile)
									VALUES ('$fname', '$mobile')";

		$finfo_sql = mysqli_query($conn,$finfo_insert);

 		//echo $fname."<br />";
 		//echo $mobile."<br />";
 	}
 	if ($finfo_sql) {
				echo "<script type='text/javascript'>alert('Friend Added Sucessfully.');</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('There is a problem to Adding friend.');</script>";
			}
