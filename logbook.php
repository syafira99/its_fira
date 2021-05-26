<?php

    include ('headerstudent.php');
    include ("dbconnect.php");

    $sql = "SELECT * FROM tb_logbook  ";
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
  <style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 50%;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

  .container {
    padding: 2px 16px;
  }
  </style>
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
  </head> 

  <body>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Logbook</h2>
          <ol>
            <li>Logbook</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Logbook Section ======= -->
    <section id="logbook" class="services section-bg">
      <center><div class="card">
        <div class="container">
          <br><h4><b>Upload Logbook</b></h4> 
          

          <form method="POST" action="uploadlogbook.php" enctype="multipart/form-data">
            <br><div class="form-group">
              <label for="lb_week">Week:</label>
              <input type="text" class="form-control" id="lb_week" name="lb_week"required/>
            </div>

            <br><div class="form-group">
              <label for="lb_date">Date:</label>
              <input type="date" class="form-control" id="lb_date" name="lb_date"required/>
            </div><br><br>

            <p>Click on the "Choose File" button to upload logbook:</p><br>
            <input type="file" id="file" name="file">
            <input type="submit" name="submit" value="Upload">
          </form><br>

        </div>
      </div></center>
    </section><!-- Resources Section -->  

    <!-- ======= Resources Table Section ======= -->
    <section id="rtable">
      <div class="container">
        <table id="myTables" class="table table-bordered">
          <thead>
            <tr>
              <th>Week</th>
              <th>Date</th>
              <th>Logbook</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($row=mysqli_fetch_array($result))
              {
                  echo "<tr>";
                  echo "<td>".$row['lb_week']."</td>"; 
                  echo "<td>".$row['lb_date']."</td>"; 
                  echo "<td>".$row['lb_file']."</td>";
                  echo "<td>";
                    echo "<a href='deletelogbook.php?id=".$row['lb_id']."' class='btn btn-danger' onclick='return delete_alert(this)';>Delete</a";
                  echo "<td>"; 
                  echo "</tr>";
              }

            ?>

          </tbody>
        </table>
        <script>
        function delete_alert(node)
        {
          return confirm("You are about to permanently delete logbook. This process is irreversible. Click OK to continue or CANCEL to quit.");
        }
        </script>

      </div>
    </section><!-- Logbook Section -->  

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