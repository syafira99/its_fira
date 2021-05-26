<?php

    include ('headerstaff.php'); 
    include ("dbconnect.php");

    //JOIN
    $sql = "SELECT * FROM tb_assign
            LEFT JOIN tb_student ON tb_assign.a_student = tb_student.student_id
            LEFT JOIN tb_unicoach ON tb_assign.a_staff = tb_unicoach.uni_id";
    $result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITS-UTM - Index</title>
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

  </head>	

  <body>
  	<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Assign University Coach</h2>
          <ol>
            <li><a href="staffhome.php">Home</a></li>
            <li>Assign University Coach</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Assign Section ======= -->
    <section id="assign" class="services section-bg">
      <div>
        <center><form method="POST" action="assign.php">
          <button type="Click" class="btn btn-primary">Assign Coach</button>
        </form></center><br>
      </div>
      <div class="container">
        <table id="myTables" class="table table-bordered">
          <thead>
            <tr>
              <th>U Coach Name</th>
              <th>U Coach Contact</th>
              <th>U Coach Email</th>
              <th>Student Name</th>
              <th>Student Contact</th>
              <th>Student Email</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($row=mysqli_fetch_array($result))
              {
                  echo "<tr>";
                  echo "<td>".$row['uni_name']."</td>"; 
                  echo "<td>".$row['uni_contact']."</td>"; 
                  echo "<td>".$row['uni_email']."</td>"; 
                  echo "<td>".$row['student_name']."</td>"; 
                  echo "<td>".$row['student_contact']."</td>"; 
                  echo "<td>".$row['student_email']."</td>"; 
                  echo "</tr>";
              }

            ?>

          </tbody>
        </table>

      </div>
    </section><!-- End Assign Section -->	

    <?php include ('footer.php'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>