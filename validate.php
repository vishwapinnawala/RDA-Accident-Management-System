<?php

require_once "config.php";

session_start();

$now = time();

if (!isset($_SESSION["email"]) && $now > $_SESSION['expire']) {
    echo '<script>alert("Your session has expired, login again.")</script>';
    header("location: login.php");
}
/*
else {
    $email = ($_SESSION["email"]);

    $sql = "select name,LicenseNo,ContactNo,NIC from driver where email = '" . $email . "'";

    $result = mysqli_query($conn, $sql)

        if (mysqli_num_rows($result) > 0) 
                   {
            while ($row = mysqli_fetch_array($result)) 
                       {
                $nic = $row['NIC'];
                $phone = $row['ContactNo'];
                $license = $row['LicenseNo'];
                $name = $row['name'];
                       }
                   } 
   else {
            echo '<script>alert("Somethings Wrong with your Account Contact Support")</script>';

        }
   
    }
*/
?>