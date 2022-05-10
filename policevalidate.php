<?php
session_start();
require_once "config.php";

if($_SESSION['usertype']=="user"){
 header("location: report.php");
}
elseif($_SESSION['usertype']=="insu"){
header("location: insurance.php");
}
elseif($_SESSION['usertype']=="Admin"){
header("location: admin2.php");
}




$now = time();

if (!isset($_SESSION["email"]) && $now > $_SESSION['expire']) 
	{
    echo '<script>alert("Your session has expired, login again.")</script>';
    header("location: login.php");
	}

else {
    $email = ($_SESSION["email"]);

    $sql = "select * from users where email = '" . $email . "'";

     if ($result = mysqli_query($conn, $sql)) {
        if(mysqli_num_rows($result) > 0) 
                   {
            while ($row = mysqli_fetch_array($result)) 
                       {
                $nic = $row['nic'];
                $name = $row['fname'];
                       }
                   } 
        else {
            echo '<script>alert("Somethings Wrong with your Account Contact Support")</script>';

             }
   
    }
}
?>