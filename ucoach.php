<?php

    include ('headeraadmin.php');

    include ("dbconnect.php");

    //JOIN
    $sql = "SELECT * FROM tb_unicoach";
    $result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Company Bootstrap Template - Index</title>
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
  </head>

  <body>
  	<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>University Coach List</h2>
          <ol>
            <li><a href="admin.php">Admin</a></li>
            <li>University Coach List</li>
          </ol>
        </div>

    </section><!-- End Breadcrumbs -->

    <!-- ======= University Coach List======= -->
    <section id="university">
      <div>
        <center><form method="POST" action="unicoachregister.php">
          <button type="Click" class="btn btn-primary">Add New Coach</button>
        </form></center><br>
      </div>
      <div class="container">
        <table id="myTables" class="table table-bordered">
          <thead>
            <tr>
              <th>Staff No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($row=mysqli_fetch_array($result))
              {
                  echo "<tr>";
                  echo "<td>".$row['uni_id']."</td>"; 
                  echo "<td>".$row['uni_name']."</td>"; 
                  echo "<td>".$row['uni_email']."</td>"; 
                  echo "<td>".$row['uni_contact']."</td>"; 
                  echo "</tr>";
              }

            ?>

          </tbody>
        </table>

      </div>
    </section><!-- End University Coach List -->


    <?php include ('footer.php'); ?>

  </body>