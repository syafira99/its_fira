<?php
    include ('dbconnect.php');
    //Check ID in url
    if(isset($_GET['resume_id']))
    {
        $resume_id = $_GET['resume_id'];
    }

    //SQL Delete operation
    $sql = "DELETE FROM tb_logbook WHERE resume_id='$resume_id'";

    //Execute SQL
    $result = mysqli_query($con,$sql);
    
    //Close connection
    mysqli_close($con);

    //Redirect
    header('Location: resume.php');

?>