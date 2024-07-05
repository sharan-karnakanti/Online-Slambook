<?php
	session_start();
	session_destroy();
	echo "<script type='text/javascript'>prompt('You are Sucessfully Logged Out !');</script>";
	
		header("Location: ../ ");
	
	