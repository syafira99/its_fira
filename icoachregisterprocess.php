<?php
	//Add DB connection
	include("dbconnect.php");

	//retrieved data from form
	$i_id = $con->real_escape_string($_POST['i_id']);
	$i_name = $con->real_escape_string($_POST['i_name']);
	$i_email = $con->real_escape_string($_POST['i_email']);
	$i_contact = $con->real_escape_string($_POST['i_contact']);
	$i_password = $con->real_escape_string($_POST['i_password']);

	//SQL insert
	$sql = "INSERT INTO tb_icoach(i_id, i_name, i_email, i_contact, i_password)
			VALUES ('$i_id', '$i_name', '$i_email', '$i_contact', '$i_password')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	mysqli_close($con);

	//Redirect page
	header('Location: industrycoach.php');


?>