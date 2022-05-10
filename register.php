<?php

require_once "config.php";

  if(isset($_POST['submit'])) {
      $nic = $_POST['NIC'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $dob = $_POST['dob'];
      $conno = $_POST['conno'];
      $licno = $_POST['licno'];
      $insuranceno = $_POST['insuno'];
      $insurancename = $_POST['insname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $type="user";


      $sql = "insert into users (nic, fname,type,email, password) value('$nic','$type', '" . $fname . "', '" . $email . "','" . $password . "')";

      $sql1 = "INSERT INTO driver(NIC,fname,lname,dob,email,conno,insuranceno,insurancename,licenseno) value('$nic', '" . $fname . "', '" . $lname . "', '" . $dob . "', '" . $email . "','" . $conno . "', '" . $insuranceno . "','" . $insurancename . "','" . $licno . "')";
      if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
          header("Location: login.php");

      } else {
          echo '<script>alert("Registration Failed, Try Again later")</script>'
              . mysqli_error($conn);
      }
  }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page - RDA</title>
    
    <link rel="shortcut icon" href="assets/images/RDA-Logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                    <img  src="assets/images/2.png" alt="">
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic2.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Let's Manage & Report Accident</h3>
                        <p> <b>ROAD DEVELOPMENT AUTHORITY</b></p>
                        <div class="page-links">
                            <a href="login.php">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                        <form method="post">


                            <input class="form-control" type="text" name="NIC" placeholder="NIC" required>
                            <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                            <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                            <input class="form-control" type="date" name="dob" placeholder="Date of Birth" required>
                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                            <input class="form-control" type="text" name="conno" placeholder="Contact No" required>
                           

<select class="form-control" name="insname" required>
    <option>Sri Lanka Insurance</option>
    <option>AIA Insurance Lanka</option>
    <option>Allianz Insurance Lanka</option>
    <option>Continental Insurance Lanka</option>
  </select><br>

                            <input class="form-control" type="text" name="insuno" placeholder="Insurance No" required>
                            <input class="form-control" type="text" name="licno" placeholder="License No" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="password" placeholder="Confirm Password" required>
                            <div class="form-button">
                                <button id="submit" name="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>