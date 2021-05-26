<?php
	//Add DB connection
	include("dbconnect.php");

	//retrieved data from form
	$comp_id = $con->real_escape_string($_POST['comp_id']);
	$comp_name = $con->real_escape_string($_POST['comp_name']);
	$comp_address = $con->real_escape_string($_POST['comp_address']);
	$comp_email = $con->real_escape_string($_POST['comp_email']);
	$comp_contact = $con->real_escape_string($_POST['comp_contact']);

	//SQL insert
	$sql = "INSERT INTO tb_industry(comp_id, comp_name, comp_address, comp_email, comp_contact)
			VALUES ('$comp_id', '$comp_name', '$comp_address', '$comp_email', '$comp_contact')";

	//Execute SQL
	mysqli_query($con, $sql);

	//Close connection
	mysqli_close($con);

	//Redirect page
	header('Location: industrylist.php');


?>