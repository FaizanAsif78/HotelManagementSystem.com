
<?php
require_once('./db-cont.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rocker</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

				<li>
					<a href="./dashboard.php"><div class="parent-icon"><i class='bx bx-home-circle'></i>
					</div>
					<div class="menu-title">Dashboard</div></a>
				</li>
			
				
				
			
				<li class="menu-label">Hotel Managemant System</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">User Query</div>
					</a>
					<ul>
						<li> <a href="./viewcontact.php"><i class="bx bx-right-arrow-alt"></i>Manage Query</a>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Facilities</div>
					</a>
					<ul>
						<li> <a href="./facility.php"><i class="bx bx-right-arrow-alt"></i>Add Facility</a>
						<li> <a href="./viewfacility.php"><i class="bx bx-right-arrow-alt"></i>View Facility</a>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Features</div>
					</a>
					<ul>
						<li> <a href="./feature.php"><i class="bx bx-right-arrow-alt"></i>Add Feature</a>
						<li> <a href="./viewfeature.php"><i class="bx bx-right-arrow-alt"></i>View Feature</a>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Rooms</div>
					</a>
					<ul>
						<li> <a href="./room.php"><i class="bx bx-right-arrow-alt"></i>Add Room</a>
						<li> <a href="./viewroom.php"><i class="bx bx-right-arrow-alt"></i>View Room</a>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Booking</div>
					</a>
					<ul>
						<li> <a href="./bookings.php"><i class="bx bx-right-arrow-alt"></i>New Booking</a>
						<li> <a href="./bookingrecord.php"><i class="bx bx-right-arrow-alt"></i>Booking Records</a>
						<!-- <li> <a href="./viewroom.php"><i class="bx bx-right-arrow-alt"></i>View Room</a> -->
					</ul>
				</li>
				
			<!--end navigation-->
		</div>

		
</body>
</html>