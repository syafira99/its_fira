<?php
	//Add DB connection
	include("dbconnect.php");

	//retrieved data from form
	$staff_id = $con->real_escape_string($_POST['staff_id']);
	$staff_name = $con->real_escape_string($_POST['staff_name']);
	$staff_email = $con->real_escape_string($_POST['staff_email']);
	$staff_contact = $con->real_escape_string($_POST['staff_contact']);
	$staff_password = $con->real_escape_string($_POST['staff_password']);

	$hashed=password_hash($staff_password, PASSWORD_DEFAULT);

	//SQL insert
	$sql = "INSERT INTO tb_staff(staff_id, staff_name, staff_email, staff_contact, staff_password)
			VALUES ('$staff_id', '$staff_name', '$staff_email', '$staff_contact', '$hashed')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	mysqli_close($con);

	//Redirect page
	header('Location: staff.php');


?>