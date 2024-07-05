<?php
	
	if (isset($_POST['update'])) {
		$email = $_POST['email'];
		$adrper = $_POST['adrper'];
		$adrcur = $_POST['adrcur'];
		$aim = $_POST['aim'];
		$fcolor = $_POST['fcolor'];
		$ffood = $_POST['ffood'];
		$factor = $_POST['factor'];
		$factress = $_POST['factress'];
		$fmovie = $_POST['fmovie'];
		$fsong = $_POST['fsong'];
		$ftp = $_POST['ftp'];
		$dob = $_POST['dob'];
		$ourf = $_POST['ourf'];
		$aboutme = $_POST['aboutme'];
		$ideal = $_POST['ideal'];
		$status = $_POST['status'];

		//$lastupdated = "<script type='text/javascript'>Date();</script>";
		$lastupdated = date("g:i:s a");

		$finfo_insert_update = "UPDATE finfo SET email='$email',adrper='$adrper',adrcur='$adrcur',aim='$aim',fcolor='$fcolor',ffood='$ffood',factor='$factor',factress='$factress',fmovie='$fmovie',fsong='$fsong',ftp='$ftp',dob='$dob',ourf='$ourf',aboutme='$aboutme',ideal='$ideal',status='$status',lastupdated='$lastupdated' WHERE fname='$fname'";
		$finfo_sql_update = mysqli_query($conn,$finfo_insert_update);

		if ($finfo_sql_update) {
			echo "<script type='text/javascript'>alert('SlamBook Updated Sucessfully !');</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('There was a problem.');</script>";
		}

	}

?>