<?php
require_once "adminvalidate.php";
require_once "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/RDA-Logo.png">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="assets/images/2.png" height="28"></a>
                        <a href="index.html" class="logo-sm"><img src="assets/images/RDA-Logo.png" height="36"></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                                    </a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="fa fa-crosshairs"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"> Profile</a></li>
                                        <li class="divider"></li>
                                        <li><a href="logout.php"> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="text-center">
                            <img src="assets/images/users/1.jpg" alt="" class="img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ADMIN</a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"> Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)"> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            
                            <li>
                                <a href="admin2.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Create Accounts <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
<li>
                                <a href="admin3.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> View Complaints <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
                         
                            <li>
                                <a href="admin4.php" class="waves-effect"><i class="ti-calendar"></i><span> View Reports <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
<li>
                                <a href="admin5.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Approved Complaints <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
                         
                            <li>
                                <a href="admin6.php" class="waves-effect"><i class="ti-calendar"></i><span> Approved Reports <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
  <li>
                                <a href="admin7.php" class="waves-effect"><i class="ti-calendar"></i><span> User Details <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
  <li>
                                <a href="admin8.php" class="waves-effect"><i class="ti-calendar"></i><span> Insurance Agent Details <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
<li>
  <a href="admin9.php" class="waves-effect"><i class="ti-calendar"></i><span> Police Officer Details <span class="badge badge-primary pull-right"></span></span></a>
                            </li>

                        

                            <!--<li class="has_sub">-->
                                <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                                <!--<ul>-->
                                    <!--<li class="has_sub">-->
                                        <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                                        <!--<ul style="">-->
                                            <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
                                            <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
                                        <!--</ul>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</li>-->
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header-title">
                                    <h4 class="pull-left page-title">Dashboard</h4>
                                    <ol class="breadcrumb pull-right">
                                    <li><a href="index.html">Home</a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                     

                        <div class="row">
                              <div class="col-sm-4" style="width:100%;">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Create Insurance Agent Account</h4>
                                       <form method="post">             
<select class="form-control" name="companyname" required>
    <option>Sri Lanka Insurance</option>
    <option>AIA Insurance Lanka</option>
    <option>Allianz Insurance Lanka</option>
    <option>Continental Insurance Lanka</option>
  </select><br>               
                            <input class="form-control" type="text" name="empid" placeholder="EmployeeID" required><br>
                            <input class="form-control" type="text" name="email" placeholder="Email" required><br>
                            <input class="form-control" type="text" name="fname" placeholder="First Name" required><br>
			    <input class="form-control" type="text" name="lname" placeholder="Last Name" required><br>
                            <input class="form-control" type="text" name="nic" placeholder="NIC No" required><br>
                            <input class="form-control" type="text" name="conno" placeholder="Contact No" required><br>
                            <input class="form-control" type="text" name="pwd" placeholder="Password" required><br>   
                            <div class="form-button"><br>
                                <button type="submit" name="submitinsurance" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>
<?php
 if(isset($_POST['submitinsurance']))
{
$companyname=$_POST['companyname'];
$insuempid=$_POST['empid'];
$insuemail=$_POST['email'];
$insufname=$_POST['fname'];
$insulname=$_POST['lname'];
$insunic=$_POST['nic'];
$insuconno=$_POST['conno'];
$insupwd=$_POST['pwd'];

$sql = "INSERT INTO insuranceagent (eid,company,email,fname,lname,nic,conno)
VALUES ('$insuempid','$companyname', '$insuemail', '$insufname','$insulname','$insunic','$insuconno')";

$sql2 = "INSERT INTO users (email,fname,nic,password,type)
VALUES ('$insuemail', '$insufname', '$insunic','$insupwd','insu')";


if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
  echo "New record created successfully";
} else {
  echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
}
//mysqli_close($conn);
}


?>
                                    </div>
                                </div>
                            </div>
  <div class="row">
                              <div class="col-sm-4" style="width:100%;">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Create Police Officer Account</h4>
                                       <form method="post"  >                            
                            <input class="form-control" type="text" name="officerid" placeholder="OfficerID" required><br>
                            <input class="form-control" type="text" name="officeremail" placeholder="Email" required><br>
                            <input class="form-control" type="text" name="officerfname" placeholder="First Name" required><br>
			    <input class="form-control" type="text" name="officerlname" placeholder="Last Name" required><br>
                            <input class="form-control" type="text" name="officernic" placeholder="NIC No" required><br>
                            <input class="form-control" type="text" name="officerconno" placeholder="Contact No" required><br>
                            <input class="form-control" type="text" name="officerpwd" placeholder="Password" required><br>   
                            <div class="form-button"><br>
                                <button type="submit" name="submitpolice" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>

<?php



 if(isset($_POST['submitpolice']))
{
$officerid=$_POST['officerid'];
$officeremail=$_POST['officeremail'];
$officerfname=$_POST['officerfname'];
$officerlname=$_POST['officerlname'];
$officernic=$_POST['officernic'];
$officerconno=$_POST['officerconno'];
$officerpwd=$_POST['officerpwd'];

$sql = "INSERT INTO policeofficer (officerid,email,fname,lname,nic,conno)
VALUES ('$officerid', '$officeremail', '$officerfname','$officerlname','$officernic','$officerconno')";

$sql2 = "INSERT INTO users (email,fname,nic,password,type)
VALUES ('$officeremail', '$officerfname', '$officernic','$officerpwd','police')";


if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}



?>
                                    </div>
                                </div>
                            </div>

                          

                           
                       


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2022 © Road Development Authority
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>

        <script src="assets/pages/dashborad.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>