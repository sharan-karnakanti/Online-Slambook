<?php
	session_start();
	require_once '../config/dbcon.php';
	$id = $_GET['id'];
	$sqldel = "DELETE FROM fname WHERE id = '$id' ";
	$query = mysqli_query($conn,$sqldel);
	if($query)
	{
		header("Location:viewfriend.php");
	}
	else{
		echo "error Occur";
	}