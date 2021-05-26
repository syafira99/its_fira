<?php
    include ('dbconnect.php');

    //Check ID in url
    if(isset($_GET['lb_id']))
    {
        $lb_id = $_GET['lb_id'];
    }

    //SQL Delete operation
    $sql = "DELETE FROM tb_logbook WHERE lb_id='$lb_id'";

    //Execute SQL
    $result = mysqli_query($con,$sql);
    
    //Close connection
    mysqli_close($con);

    //Redirect
    header('Location: logbook.php');

?>