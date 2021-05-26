<?php
	
	include("dbconnect.php");

	if (isset($_POST['submit']) && isset($_FILES['file'])) {

		$img_name = $_FILES['file']['name'];
		$tmp_name = $_FILES["file"]["tmp_name"];

		$img_upload_path = 'resume-file/'.$img_name;
		move_uploaded_file($tmp_name, $img_upload_path);

		$sql = "INSERT INTO tb_resume(resume_file)
				VALUES ('$img_name')";

		mysqli_query($con, $sql);

	}

	header('Location: resume.php');
?>