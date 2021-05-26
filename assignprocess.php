<?php
    include ("dbconnect.php");

    $staff_id = $_POST['staff_id'];
    $student_id = $_POST['student_id'];

    //SQL INSERT new booking
    $sql = "INSERT INTO tb_assign (a_staff, a_student)
            VALUES ('$staff_id', '$student_id')";

    //Check SQL Output
    var_dump($sql);

    //execute sql
    mysqli_query($con,$sql);    

    //close connection
    mysqli_close ($con);

    header('Location: assignucoach.php');

?>