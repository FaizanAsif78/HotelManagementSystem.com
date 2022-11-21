<?php
require_once('./database.php');
@$umemail = $_SESSION['user_email'];
$obj7 = new fetchspecficuserdata();
$returnuserdetail = 	$obj7->specfic($umemail);
@$userfirstname = $returnuserdetail['user_firstname'];
@$userlastname = $returnuserdetail['user_lastname'];
// print_r($returnuserdetail);
// echo "<script>alert($umemail)</script>"
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Navbar</title>
</head>

<body>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#"><?php echo $umemail ?></a></p>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<a class="navbar-brand" href="index.html">Vacation<span>Rental</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="rooms.php" class="nav-link">Apartment Room</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<?php
					if ($umemail) {
						echo	"<div class='dropdown mt-4' >
						<button class='btn btn-outline-danger dropdown-toggle' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
						  Profile
						</button>
						<div class='dropdown-menu' aria-labelledby='dropdownMenu2'>
						  <button class='dropdown-item' type='button'>Name: $userfirstname <span>$userlastname</span></button>
						  <button class='dropdown-item' type='button'>Another action</button>
						  <a href='./logout.php'><button class='dropdown-item' type='button'>logout</button></a>
						</div>
					  </div>";
					} else {

						echo	"<li class='nav-item'><a href='./login/login.php' class='nav-link'><button class='btn btn-danger'>Login</button></a></li>";
					}

					?>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					<!-- "<li class='nav-item'><a href='contact.html' class='nav-link'><button style="back">profile</button></a></li>" -->
					
					<!-- <li class='nav-item'><button class='btn btn-success'>Login</button></li> -->
				</ul>
			</div>
		</nav>
	</div>

</body>

</html>