<?php
    include ('dbconnect.php');
    //Check ID in url
    if(isset($_GET['t_id']))
    {
        $t_id = $_GET['t_id'];
    }

    //SQL Delete operation
    $sql = "DELETE FROM tb_logbook WHERE t_id='$t_id'";

    //Execute SQL
    $result = mysqli_query($con,$sql);
    
    //Close connection
    mysqli_close($con);

    //Redirect
    header('Location: technical.php');

?>