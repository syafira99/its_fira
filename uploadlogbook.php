<?php
	
	include("dbconnect.php");

	if (isset($_POST['submit']) && isset($_FILES['file'])) {
		
		$lb_week = $con->real_escape_string($_POST['lb_week']);
		$lb_date = $_POST['lb_date'];	

		$img_name = $_FILES['file']['name'];
		$tmp_name = $_FILES["file"]["tmp_name"];

		$img_upload_path = 'logbook-file/'.$img_name;
		move_uploaded_file($tmp_name, $img_upload_path);

		$sql = "INSERT INTO tb_logbook(lb_week, lb_date, lb_file)
				VALUES ('$lb_week', '$lb_date', '$img_name')";

		mysqli_query($con, $sql);

	}

	header('Location: logbook.php');
?>