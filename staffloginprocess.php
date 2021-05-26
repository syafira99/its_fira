<?php

    session_start();

    include('dbconnect.php');

    $staff_id = $_POST['staff_id'];
    $staff_password = $_POST['staff_password'];

    $msg = "Incorrect key in. Please try again.";

    $stmt = $con->prepare("SELECT * FROM tb_staff WHERE staff_id = ?");
    $stmt->bind_param('s',$staff_id);
    $stmt->execute();

    $result = $stmt->get_result();

    $count = "";

    if($row = $result->fetch_assoc())
    {

        if($staff_password == $row['staff_id']) 
        {
            //Check data existence
            $count = 1;
        }
        
        //Check type of login
        if ($count == 1) 
        {
            $_SESSION['staff_id'] = session_id();
            $_SESSION['staff_id'] = $staff_id;     //To save customer ID after login

                header('Location: staffhome.php');
          
            
        }
        else 
        {  
            echo "<script>
                    alert('Login Error - No data found');
                    window.location.href='login.php';
                  </script>";
        }
    }

    mysqli_close($con)
?>