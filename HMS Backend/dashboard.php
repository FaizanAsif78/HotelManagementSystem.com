<?php
// include("./db-cont.php");
// require('./db-cont.php');
require_once('./db-cont.php');
// $obj = new sitesetting();
$obj2 = new sitesetting();
$obj = new Contactstting();
$dynamicsitesetting = $obj2->sitesetting();
$dynamiccontact = $obj->contactdetails();
if (isset($_POST['setsubmite'])) {
	$obj2->updatesitesetting($_POST);
}
if (isset($_POST['contactsubmit'])) {
	// echo "<script>alert('fghjkl')</script>";
	$obj->updatecontact($_POST);
}
?>


<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 14:03:11 GMT -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" media="all">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<aside>
			<?php include("./sidebar.php"); ?>
		</aside>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">


							<li class="nav-item dropdown dropdown-large">

								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">

									</a>
									<div class="header-notifications-list">


									</div>

								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">

								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">

									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">

										</a>


									</div>

								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="./logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-3 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Total Orders</p>
									<h4 class="my-1 text-info">4805</h4>
									<p class="mb-0 font-13">+2.5% from last week</p>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-cart'></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Revenue</p>
								   <h4 class="my-1 text-danger">$84,245</h4>
								   <p class="mb-0 font-13">+5.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Bounce Rate</p>
								   <h4 class="my-1 text-success">34.6%</h4>
								   <p class="mb-0 font-13">-4.5% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Customers</p>
								   <h4 class="my-1 text-warning">8.4K</h4>
								   <p class="mb-0 font-13">+8.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->
<!--end row-->

			

			</div>
		</div>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--end row-->

				<div class="row">

					<div class="col-12 col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="col-md-6 pl-3">
										<h4 class="mb-0">Site Setting</h4>
										<div class="mt-4 pl-2">
											<h6>Site Title :</h6>
											<p><?php echo $dynamicsitesetting['Site_title'] ?></p>
										</div>
										<div class="pl-2">
											<h6>About us :</h6>
											<p class="pr-5"><?php echo $dynamicsitesetting['Site_Aboutdetail'] ?></p>
										</div>
									</div>
									<div class="col-md-6 ms-auto" align="right">
										<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#sitesettings">
											Edit
										</button>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-12 col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
								<div class="col-md-6 pl-3">
										<h4 class="mb-0">Contact Page Info</h4>
										<div class="mt-4 pl-2">
											<h6>Hotel Address : <span style="font-weight:400;"><?php echo $dynamiccontact['Hotel_address']?></span></h6>
											
										</div>
										<div class="mt-4 pl-2">
											<h6> Phone : <span style="font-weight:400;"><?php echo $dynamiccontact['Hotel_phone']?></span></h6>
											
										</div>
										<div class="mt-4 pl-2">
											<h6> Email : <span style="font-weight:400;"><?php echo $dynamiccontact['Hotel_email']?></span></h6>
											
										</div>
										<div class="mt-4 pl-2">
											<h6> Website : <span style="font-weight:400;"><?php echo $dynamiccontact['Hotel_website']?></span></h6>
											
										</div>
										
										
									</div>
									<div class="dropdown ms-auto col-lg-6" align="right">
										<button type="button" class="btn btn-dark" data-toggle="modal"  data-target="#contactsetting">
											Edit
										</button>
									</div>
								</div>
							</div>
						</div>

					</div>





					<!-- Modals start -->

					<!------- -------------------------------------------modal1 ---------------------------------->

					<div class="modal fade" id="sitesettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">sitesetting</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form class="p-3" method="post">
									<div class="form-group">
										<label for="exampleInputEmail1">Site Title</label>
										<input type="text" class="form-control" name="Titless" value="<?php echo $dynamicsitesetting['Site_title'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">About Description</label>
										<input type="text" class="form-control" name="aboutdecs" value="<?php echo $dynamicsitesetting['Site_Aboutdetail'] ?>" id="exampleInputPassword1" placeholder="Password">
									</div>

									<button type="submit" class="btn btn-primary d-none" name="setsubmite" id="submits">Submit</button>
								</form>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" onclick="Settingupdate()">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!------- -------------------------------------------modal2 ---------------------------------->
					<div class="modal fade" id="contactsetting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Edit Contact  Info</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form class="p-3" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Hotel Address</label>
										<input type="text" class="form-control" id="exampleInputEmail1" name="hoteladress" value="<?php echo $dynamiccontact['Hotel_address']?>" aria-describedby="emailHelp" placeholder="Enter email">
										
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Phone no</label>
										<input type="text" class="form-control" name="hotelphone" id="exampleInputEmail1" value="<?php echo $dynamiccontact['Hotel_phone']?>" aria-describedby="emailHelp" placeholder="Enter email">
										
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" name="hotelemail" id="exampleInputEmail1" value="<?php echo $dynamiccontact['Hotel_email']?>" aria-describedby="emailHelp" placeholder="Enter email">
										
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Website</label>
										<input type="text" class="form-control" name="hotelwebsite" id="exampleInputPassword1"  value="<?php echo $dynamiccontact['Hotel_website']?>"placeholder="Password">
									</div>
									
									<button type="submit" class="btn btn-primary" name="contactsubmit" id="contactsubmit">Submit</button>
								</form>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" onclick="contactcub()">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Modals End -->
					<!--end row-->

					<!--end page wrapper -->
					<!--start overlay-->
					<div class="overlay toggle-icon"></div>
					<!--end overlay-->
					<!--Start Back To Top Button-->
					<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
					<!--End Back To Top Button-->
					<footer class="page-footer">
						<p class="mb-0">Copyright © 2021. All right reserved.</p>
					</footer>
				</div>
				<!--end wrapper-->
				<!--start switcher-->
				<div class="switcher-wrapper">
					<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
					</div>
					<div class="switcher-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
							<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
						</div>
						<hr />
						<h6 class="mb-0">Theme Styles</h6>
						<hr />
						<div class="d-flex align-items-center justify-content-between">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
								<label class="form-check-label" for="lightmode">Light</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
								<label class="form-check-label" for="darkmode">Dark</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
								<label class="form-check-label" for="semidark">Semi Dark</label>
							</div>
						</div>
						<hr />
						<div class="form-check">
							<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
							<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
						</div>
						<hr />
						<h6 class="mb-0">Header Colors</h6>
						<hr />
						<div class="header-colors-indigators">
							<div class="row row-cols-auto g-3">
								<div class="col">
									<div class="indigator headercolor1" id="headercolor1"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor2" id="headercolor2"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor3" id="headercolor3"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor4" id="headercolor4"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor5" id="headercolor5"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor6" id="headercolor6"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor7" id="headercolor7"></div>
								</div>
								<div class="col">
									<div class="indigator headercolor8" id="headercolor8"></div>
								</div>
							</div>
						</div>
						<hr />
						<h6 class="mb-0">Sidebar Colors</h6>
						<hr />
						<div class="header-colors-indigators">
							<div class="row row-cols-auto g-3">
								<div class="col">
									<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
								</div>
								<div class="col">
									<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end switcher-->
				<!-- Bootstrap JS -->
				<script src="assets/js/bootstrap.bundle.min.js"></script>
				<!--plugins-->
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
				<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
				<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
				<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
				<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
				<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
				<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
				<script src="assets/js/index.js"></script>
				<!--app JS-->
				<script src="assets/js/app.js"></script>
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

				<script>
					function Settingupdate() {
						document.getElementById('submits').click();
						// location.reload();
					}
					function contactcub() {
						// alert("fguhji");
						document.getElementById('contactsubmit').click();
					}
				</script>

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 14:03:47 GMT -->

</html>