<?php
require_once "validate.php";
require_once "config.php";
require_once "prfpiclocation.php";
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).on('click','img',function(){
 $('#fileToUpload').click();
});
</script>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4" style="align-items: center; margin:0; text-align:center;">
						<div class="img-circle text-center mb-3">
				<img src="<?php echo "uploads/".$filename;?>" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"><?php echo $name ." ". $name2 ?></h4>


<form action="upload.php" method="post" enctype="multipart/form-data">
  <span style=" font-size: 12px;">Click on Profile Picture to select a photo</span>
  <input type="file" name="fileToUpload" id="fileToUpload" style="display: block;visibility: hidden;width: 0;height: 0;">
  <input type="submit" class="btn btn-primary" value="Upload Image" name="submit" style="margin-top:10px;">
</form>


















					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Security
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Application
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" class="form-control" value="<?php echo $name ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" class="form-control" value="<?php echo $name2 ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="<?php echo $email ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" value="<?php echo $phno ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>NIC No</label>
								  	<input type="text" class="form-control" value="<?php echo $nic ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Date of Birth</label>
								  	<input type="text" class="form-control" value="<?php echo $dob ?>">
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
								  	<label>Insurance Name</label>
								  	<input type="text" class="form-control" value="<?php echo $insuname ?>">
								</div>
							</div>
<div class="col-md-6">
								<div class="form-group">
								  	<label>Insurance No</label>
								  	<input type="text" class="form-control" value="<?php echo $insuno ?>">
								</div>
							</div>
<div class="col-md-6">
								<div class="form-group">
								  	<label>License No</label>
								  	<input type="text" class="form-control" value="<?php echo $licno ?>">
								</div>
							</div>
							
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
			<form method="post">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" name="oldpassword" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
			
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" name="newpassword" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button type="submit" name="pwdupdate" class="btn btn-primary">Update</button>

							<button class="btn btn-light">Cancel</button>
			</form>

<?php
///////////////////user password update//////////////////////////////////////////////////
if(isset($_POST["pwdupdate"]))
{
$oldpwd= $_POST["oldpassword"];
$newpwd=$_POST["newpassword"];

$sql = "SELECT * from users where email= '" . $email . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
   if($oldpwd==$row["password"])
           {

		$sql = "UPDATE users SET password='" . $newpwd . "' WHERE email='" . $email . "'";

		if (mysqli_query($conn, $sql)) {
	  echo "Record updated successfully";
		} else {
	  echo "Error updating record: " . mysqli_error($conn);
	  }
	mysqli_close($conn); 
           }

   else
{
echo "Wrong Password Entered!";
}
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
}
////////////////////////////////////////////////////////////////////////////////////////
?>

						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Login</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Two-factor auth</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Lorem ipsum dolor sit.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>