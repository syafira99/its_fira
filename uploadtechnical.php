<?php
	
	include("dbconnect.php");

	if (isset($_POST['submit']) && isset($_FILES['file'])) {

		$img_name = $_FILES['file']['name'];
		$tmp_name = $_FILES["file"]["tmp_name"];

		$img_upload_path = 'technical-file/'.$img_name;
		move_uploaded_file($tmp_name, $img_upload_path);

		$sql = "INSERT INTO tb_technical(t_file)
				VALUES ('$img_name')";

		mysqli_query($con, $sql);

	}

	header('Location: technical.php');
?>