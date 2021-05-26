<?php
    include ("dbconnect.php");

   
    $status = $_POST['status'];

    //SQL INSERT new booking
    $sql = "INSERT INTO tb_apply_status (app_status)
            VALUES ('$status')";

    //Check SQL Output
    var_dump($sql);

    //execute sql
    mysqli_query($con,$sql);    

    //close connection
    mysqli_close ($con);

    header('Location: verifyapplicationstatus.php');

?>