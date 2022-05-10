<?php
require_once "validate.php";
require_once "config.php";

if (isset($_POST['submitreport'])) {

$imagedirectory='uploads/'.$nic.'/reports/'; 

if (!file_exists('uploads/'.$nic.'/reports')) {
    mkdir('uploads/'.$nic.'/reports', 0777, true);
}


$target_dir = $imagedirectory;
$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submitreport"])) {
  $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
 $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
  if(($check && $check2) !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file) && file_exists($target_file2)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload1"]["size"] && $_FILES["fileToUpload2"]["size"] > 10000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";


  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$severity=$_POST['severity'];
$typp=$_POST['typee'];
$disc=$_POST['description'];
$longti=$_POST['longtitude'];
$latti=$_POST['latitude'];
$filename1=htmlspecialchars( basename( $_FILES["fileToUpload1"]["name"]));
$filename2=htmlspecialchars( basename( $_FILES["fileToUpload2"]["name"]));
date_default_timezone_set('Asia/Colombo');
$timestmp=date( 'Y-m-d H:i:s', strtotime( 'now' ) );

$sql = "INSERT INTO report (nic,severity,type,description,date_time,longtitude,latitude,imagename,imagename2,insurancename)
VALUES ('$nic', '$severity', '$typp','$disc','$timestmp','$longti','$latti','$filename1','$filename2','$insuname')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: report2.php");
}
else{header("Location: report2.php");}
?>