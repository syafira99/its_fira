<?php
	ob_start();
	session_start(); //Start session

	//get db connection
	include('dbconnect.php');

	//retrieve login credentials
	$i_id = $_POST['i_id'];
	$i_password = $_POST['i_password'];
	

	//get user data based on login info
	$sql = "SELECT * FROM tb_icoach WHERE i_id = '$i_id' AND i_password='$i_password' ";

	//execute sql
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	//check data exist
	$count = mysqli_num_rows($result);

	//check login
	if($count == 1)
	{
		//set session
		$_SESSION['i_id'] = session_id();
		$_SESSION['i_id'] = $i_id;        //to user id
		
		header('Location: industrycoachhome.php');
		
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