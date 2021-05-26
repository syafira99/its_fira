<?php
	//Add DB connection
	include("dbconnect.php");

	//retrieved data from form
	$uni_id = $con->real_escape_string($_POST['uni_id']);
	$uni_name = $con->real_escape_string($_POST['uni_name']);
	$uni_email = $con->real_escape_string($_POST['uni_email']);
	$uni_contact = $con->real_escape_string($_POST['uni_contact']);
	$uni_password = $con->real_escape_string($_POST['uni_password']);

	//SQL insert
	$sql = "INSERT INTO tb_unicoach(uni_id, uni_name, uni_email, uni_contact, uni_password)
			VALUES ('$uni_id', '$uni_name', '$uni_email', '$uni_contact', '$uni_password')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	mysqli_close($con);

	//Redirect page
	header('Location: ucoach.php');


?>