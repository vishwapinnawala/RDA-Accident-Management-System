<?php
require_once "config.php";
?>

  <?php
if(isset($_POST['submit'])){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	$sql = "select * from users where email = '".$email."'";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);

	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		$usertype=$row['type'];
                if($password==$row['password']){
            session_start();
            $_SESSION["username"] = $email;
            $_SESSION["email"] = $email;
            $_SESSION['start'] = time();
            $_SESSION['usertype']=$usertype;
            $_SESSION['expire'] = $_SESSION['start'] + (720 * 60);  // 12 hour session window
if($row['type']=="Admin")
{
header("Location: admin2.php");
}
elseif($row['type']=="police")
{
header("Location: police.php");
}
elseif($row['type']=="insu")
{
header("Location: insurance.php");
}
else
{
         header("Location: report2.php");}
		}
		else{
    echo '<script>alert("Wrong Password")</script>';
		}
}
	else{
    echo '<script language="javascript">';
echo 'alert("Account not found, please register!")';
echo '</script>';
	}
}
  ?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - RDA</title>
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
                        <h3>Let's Drive Safe Avoid Accidents and Problems</h3>
                        <p>Access to the report or complain your problems about accidents</p>
                        <div class="page-links">
                            <a href="login.php" class="active">Login</a><a href="register.php">Register</a>
                        </div>
                        <form method="post">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" name="submit" class="ibtn">Login</button> <a href="forget5.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
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