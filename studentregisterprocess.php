<?php
	//Add DB connection
	include("dbconnect.php");

	//retrieved data from form
	$student_id = $con->real_escape_string($_POST['student_id']);
	$student_name = $con->real_escape_string($_POST['student_name']);
	$student_email = $con->real_escape_string($_POST['student_email']);
	$student_contact = $con->real_escape_string($_POST['student_contact']);
	$student_password = $con->real_escape_string($_POST['student_password']);

	//SQL insert
	$sql = "INSERT INTO tb_student(student_id, student_name, student_email, student_contact, student_password)
			VALUES ('$student_id', '$student_name', '$student_email', '$student_contact', '$student_password')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	mysqli_close($con);

	//Redirect page
	header('Location: student.php');


?>