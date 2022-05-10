<?php
require_once "validate.php";
require_once "config.php";
?>




   


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>User Dashboard</title>
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
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php"> Profile</a></li>
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


 <img src="assets/images/users/2.jpg"   alt="" class="img-circle">












                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $name ." " ; echo $name2 ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php"> Profile</a></li>
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
                                <a href="report2.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Report <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
<li>
                                <a href="report5.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span>Approved Report <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
<li>
                                <a href="report3.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Complain <span class="badge badge-primary pull-right"></span></span></a>
                            </li>
<li>
                                <a href="report4.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span>Approved Complain <span class="badge badge-primary pull-right"></span></span></a>
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
                                    <h4 class="pull-left page-title">Complains</h4>
                                    <ol class="breadcrumb pull-right">
                                    <li><a href="index.html">Home</a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Report Accident</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?php
//////////////////////////////////////////////////////////////////
$sql = "SELECT count(reportid) as complaincount FROM report ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    echo $row["complaincount"];
  }
} 

//mysqli_close($conn);
/////////////////////////////////////////////////////////////////////
?> </b></h3>
                                        <p class="text-muted"><b>Updated Now</b><br> Road Development Authority</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Approved Reports</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?php
//////////////////////////////////////////////////////////////////
$sql = "SELECT count(reportid) as complaincount FROM approvedreports where nic='$nic'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    echo $row["complaincount"];
  }
} 

//mysqli_close($conn);
/////////////////////////////////////////////////////////////////////
?></b></h3>
                             <p class="text-muted"><b>Updated Now</b><br> Road Development Authority</p> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Filed Complains</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b>
<?php
//////////////////////////////////////////////////////////////////
$sql = "SELECT count(complainid) as complaincount FROM complain";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    echo $row["complaincount"];
  }
} 

//mysqli_close($conn);
/////////////////////////////////////////////////////////////////////
?>



</b></h3>
<p class="text-muted"><b>Updated Now</b><br> Road Development Authority</p>                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Get Support</h4>
                                    </div>
                                    <div class="panel-body">
                                    <h3 class=""><b><a href="index.html#contactus"><button class="btn btn-primary">Support</button></a></b></h3>
                                        <p class="text-muted"><b>Contact Now</b><br> Road Development Authority</p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          
                            <div class="col-sm-4" style="width:100%;">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Make a Complain</h4>
                                        
                                        <form method="post" action="addcomplain.php" enctype="multipart/form-data">
                            
                            <input class="form-control" type="text" name="subject" placeholder="Subject" required><br>
			    <textarea class="form-control"  name="complain" rows="4" placeholder="Complain" cols="50" required></textarea><br>
			    
                            <label class="form-label" for="customFile">Upload Images</label>
			    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" id="customFile" required />

                            <div class="form-button"><br>
                                <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>




                                    </div>
                                </div>


                                    </div>
                                </div>



                                <div class="row " >
                            <div class="col-md-12">

                                <div class="panel panel-primary">

                                    <div class="panel-heading">
                                        <h3 class="panel-title">Complains You Made</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Complain ID</th>
                                                    <th>Subject</th>
                                                    <th>Complain</th>
                                                    <th>Image</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

<?php
$sql = "SELECT * FROM complain where nic='$nic'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
  //$row["complainid"];
   // $row["subject"];
   // $row["complain"];
    $imgfilename=$row["imagefilename"];

					echo "<tr>";
                                               echo "<td>" .$row["complainid"].      "</td>";
                                               echo "<td>" .$row["subject"].        "</td>";
                                               echo "<td>" .$row["complain"].        "</td>";
                                               //echo "<td>" .$row["imagefilename"].   "</td>";
echo "<td>";
echo '<img width="100%" height="auto" src="uploads/'.$nic.'/complains/'.$imgfilename.'">';
echo "</td>";                                                   
                                           echo "</tr>";


  }
} else {
 
}

//mysqli_close($conn);
?>                                              
                                           
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                           
                   


                        </div> <!-- End Row -->

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




  <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
    $(".Click-here").on('click', function() {
      $(".custom-model-main").addClass('model-open');
    }); 
    $(".close-btn, .bg-overlay").click(function(){
      $(".custom-model-main").removeClass('model-open');
    });
    </script>


    <!-- Analytics -->

    </body>
</html>