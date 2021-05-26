<?php
	ob_start();
	session_start(); //Start session

	//get db connection
	include('dbconnect.php');

	//retrieve login credentials
	$admin_id = $_POST['admin_id'];
	$admin_password = $_POST['admin_password'];
	

	//get user data based on login info
	$sql = "SELECT * FROM tb_admin WHERE admin_id = '$admin_id' AND admin_password='$admin_password' ";

	//execute sql
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	//check data exist
	$count = mysqli_num_rows($result);

	//check login
	if($count == 1)
	{
		//set session
		$_SESSION['admin_id'] = session_id();
		$_SESSION['admin_id'] = $admin_id;        //to user id
		
		header('Location: admin.php');
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Username or Password is wrong')</script>";
		echo "Redirecting..";
		header('refresh:0.5; url="index.php"');
	}

	mysqli_close($con);
	ob_end_flush();

?>