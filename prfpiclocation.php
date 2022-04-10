<?php
require_once "config.php";
require_once "validate.php";
?>



<?php

$sql = "SELECT filename FROM prfpic where nic='$nic'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $filename=$row["filename"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>