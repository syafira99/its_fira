<?php

    include ('headerstudent.php');

    include ("dbconnect.php");

    if(isset($_GET['student_id']))
    {
        $comp_id = $_GET['student_id'];
    }

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
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Create two columns/boxes that floats next to each other */
  nav2 {
    float: left;
    width: 20%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
  }

  /* Style the list inside the menu */
  nav ul {
    list-style-type: none;
    padding: 0;
  }

  article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
  }

  /* Clear floats after the columns */
  section::after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
  @media (max-width: 600px) {
    nav, article {
      width: 100%;
      height: auto;
    }
  }
  </style>
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    </style>
  </head>	

  <body>
  	<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profile</h2>
          <ol>
            <li>Profile</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Student Profile Section ======= -->
    <section id="studentprofile" class="services section-bg">
      <nav2>
        <ul>
          <button id="myBtn">Edit Profile</button>
        </ul>
        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <div>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <form id="c_form-h" class="border rounded m-4" method="POST" action="studentupdatedetailsprocess.php">
                      <div class="form-group row m-3">
                      <label for="stumail" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                          <input type="email" class="form-control" id="stumail" name="stumail"> </div>
                      </div>
                      <div class="form-group row m-3">
                      <label for="stucontact" class="col-2 col-form-label">Phone Number</label>
                        <div class="col-10">
                          <input type="text" class="form-control" id="stucontact" name="stucontact"> </div>
                      </div>
                      <div class="form-group row m-3">
                      <label for="stucontact" class="col-2 col-form-label">Password</label>
                        <div class="col-10">
                          <input type="text" class="form-control" id="stucontact" name="stucontact"> </div>
                      </div>
                      <center><p>Click on the "Choose File" button to upload profile picture:</p>
                      <form action="/action_page.php">
                        <input type="file" id="myFile" name="filename">
                        <input type="submit">
                      </form><br><br>
                      <center><button type="submit" class="btn btn-primary ml-4 mb-4">Update</button></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
      </nav2>
      
      <article>
        <h1>User Profile</h1>
          <?php

              $sql = "SELECT * FROM tb_student WHERE student_id = '$student_id'";
              $result = mysqli_query($con,$sql);

              while ($row=mysqli_fetch_array($result))
              {
                  echo "<ul>";
                  echo "<li>".$row['student_id']."</li>"; 
                  echo "<li>".$row['student_name']."</li>"; 
                  echo "<li>".$row['student_email']."</li>"; 
                  echo "<li>".$row['student_contact']."</li>"; 
                  echo "</ul>";
              }

            ?>
      </article>

    </section><!-- Student Profile Section -->	

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