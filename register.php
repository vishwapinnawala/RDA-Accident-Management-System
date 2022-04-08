<?php

require_once "config.php";

  if(isset($_POST['submit'])) {
      $nic = $_POST['nic'];
      $Name = $_POST['firstname'];
      $Surname = $_POST['lastname'];
      $birth = $_POST['birth'];
      $contact = $_POST['contact'];
      $license = $_POST['licenseno'];
      $insuranceno = $_POST['insuranceno'];
      $insurance = $_POST['insurance'];
      $email = $_POST['email'];
      $password = $_POST['password'];
/*Below hash function currently sets salt at cost 4, this can be increased till value till 22 to increase strength but this will effect stability
of the pages and server as encoding process requires more processing power. */
      $options = array("cost" => 4);
      $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

      $sql = "insert into users (nic, firstname,email, password) value('" . $nic . "', '" . $Name . "', '" . $email . "','" . $hashPassword . "')";

      $sql1 = "INSERT INTO driver(nic,firstname,lastname,DateOfBirth,ContactNo,LicenseNo,InsuranceNo,InsuranceName) value('" . $nic . "', '" . $Name . "', '" . $Surname . "', '" . $birth . "','" . $contact . "', '" . $license . "','" . $insuranceno . "','" . $insurance . "')";
      if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
          header("Location: login");

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
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
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
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
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
                            <input class="form-control" type="text" name="insname" placeholder="Insurance Name" required>
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