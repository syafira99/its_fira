<?php
	ob_start();
	session_start(); //Start session

	//get db connection
	include('dbconnect.php');

	//retrieve login credentials
	$student_id = $_POST['student_id'];
	$student_password = $_POST['student_password'];
	

	//get user data based on login info
	$sql = "SELECT * FROM tb_student WHERE student_id = '$student_id' AND student_password='$student_password' ";

	//execute sql
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	//check data exist
	$count = mysqli_num_rows($result);

	//check login
	if($count == 1)
	{
		//set session
		$_SESSION['student_id'] = session_id();
		$_SESSION['student_id'] = $student_id;        //to user id
		
		header('Location: studentprofile.php');
		
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