<?php
	
	include("dbconnect.php");

	if (isset($_POST['submit']) && isset($_FILES['file'])) {
		
		$r_name = $con->real_escape_string($_POST['r_name']);	

		$img_name = $_FILES['file']['name'];
		$tmp_name = $_FILES["file"]["tmp_name"];

		$img_upload_path = 'resources-file/'.$img_name;
		move_uploaded_file($tmp_name, $img_upload_path);

		$sql = "INSERT INTO tb_resources(r_name, r_file)
				VALUES ('$r_name', '$img_name')";

		mysqli_query($con, $sql);

	}

	header('Location: resources.php');
?>