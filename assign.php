<?php

    include ('headerstaff.php');

    include ("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITS-UTM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  <style>
  * {
    box-sizing: border-box;
  }

  #myInput {
    background-image: url('/css/searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }

  #myTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 18px;
  }

  #myTable th, #myTable td {
    text-align: left;
    padding: 12px;
  }

  #myTable tr {
    border-bottom: 1px solid #ddd;
  }

  #myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
  }
  </style>
  <style>
  form {
    border-style: solid;
    border-width: 4px 20px 4px 20px;
    border-top: 6px solid red;
    border-bottom: 6px solid red;
    background-color: white;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 30px;
    height: 350px;
    width: 600px;
  }
  </style>
  </head>

  <body>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Company Application</h2>
          <ol>
            <li><a href="staffhome.php">Home</a></li>
            <li><a href="assignucoach.php">Assign University Coach</a></li>
            <li>Company Application</li>
          </ol>
        </div>

    </section><!-- End Breadcrumbs -->

    <!-- ======= Company List======= -->
    <section id="company">
      <div class="container">

        <center><form method="POST" action="assignprocess.php">

        <div class="form-group">
        <label for="staff_id">Staff:</label><br>

        <?php

        $sql = "SELECT * FROM tb_unicoach";
        $result = mysqli_query($con,$sql);

        echo '<select class="form-control" id="staff_id" name= "staff_id">';

        while($row=mysqli_fetch_array($result))
        {
          echo "<option value='".$row['uni_id']."'>".$row['uni_name']."</option>";
        }

        echo '</select>';

        ?>

        </div>
        
        <div class="form-group">
        <br><label for="student_id">Student:</label><br>

        <?php

        $sql2 = "SELECT * FROM tb_student";
        $result2 = mysqli_query($con,$sql2);

        echo '<select class="form-control" id="student_id" name= "student_id">';

        while($row2=mysqli_fetch_array($result2))
        {
          echo "<option value='".$row2['student_id']."'>".$row2['student_name']."</option>";
        }

        echo '</select>';

        ?>

      </div>

        <br><br><button onclick="myFunction()" type="submit" class="btn btn-primary">Assign</button>

        </form></center>
          
      </div>
    </section><!-- End Company List -->


    <?php include ('footer.php'); ?>

  </body>