<?php
	session_start();
	require_once '../config/dbcon.php';

	if ($_SESSION['uname']) {


		
	}
	else
	{
		header("Location: ../ ");
	}

?>
