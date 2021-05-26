<?php
    include ("dbconnect.php");

    $student_id = $_POST['student_id'];
    $comp_id = $_POST['comp_id'];
    $app_date = $_POST['app_date'];

    //SQL INSERT new booking
    $sql = "INSERT INTO tb_apply (app_student, app_company, app_date, app_status)
            VALUES ('$student_id', '$comp_id', '$app_date', '0')";

    //Check SQL Output
    var_dump($sql);

    //execute sql
    mysqli_query($con,$sql);    

    //close connection
    mysqli_close ($con);

    header('Location: placement.php');

?>