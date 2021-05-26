<?php

    include ('headeraadmin.php');
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
  height: 650px;
  width: 600px;
}
</style>

  </head>

  <body>
  	 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register New</h2>
          <ol>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="staff.php">2u2i LI Committee List</a></li>
            <li>Register New</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Form ======= -->
    <section id="registrationform">
      <div class="container">

      	<center><form method="POST" action="staffregisterprocess.php">

      <br><div class="form-group">
        <label for="staff_id">Staff No</label>
        <input type="text" class="form-control" id="staff_id" name="staff_id" required/>
      </div>
      <br><div class="form-group">
        <label for="staff_name">Name</label>
        <input type="text" class="form-control" id="staff_name" name="staff_name"required/>
      </div>
      <br><div class="form-group">
        <label for="staff_email">Email</label>
        <input type="text" class="form-control" id="staff_email" name="staff_email" required/>
      </div>
      <br><div class="form-group">
        <label for="staff_contact">Contact</label>
        <input type="text" class="form-control" id="staff_contact" name="staff_contact" required/>
      </div>
      <br><div class="form-group">
        <label for="staff_password">Password</label>
        <input type="text" class="form-control" id="staff_password" name="staff_password" required/>
      </div>
      <br><button onclick="myFunction()" type="submit" class="btn btn-primary">Add</button>

    </form></center>
        
      </div>

      <script>
		function myFunction() {
  		alert("The committee has been added");}	
	  </script>

    </section><!-- End Form -->

    <?php include ('footer.php'); ?>

  </body>