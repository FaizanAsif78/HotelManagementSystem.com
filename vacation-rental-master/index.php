<?php
include('./database.php');
$obj = new rooms();
$obj4 = new roomsimages();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vacation Rental - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	require_once('./navbar.php');
	?>
	<!-- END nav -->

	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<h2 class="subheading">Welcome to Vacation Rental</h2>
					<h1 class="mb-4">Rent an appartment for your vacation</h1>
					<p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
		<div class="h1">
			<h1 class="text-center mb-4">Apartment Room</h1>
		</div>
		<div class="container-fluid px-md-0">
			<div class="row no-gutters">
				<?php
				$roomvalue =	$obj->viewrooms();
				foreach ($roomvalue as $value) {
				?>
					<div class="col-lg-6 mb-4">
						<div class="room-wrap d-md-flex">
							<?php
							$rmimgvalue =	$obj4->getrmimage();
							foreach ($rmimgvalue as $value3) {
								if ($value['Room_id'] == $value3['room_id'] && $value3['selcted_img'] == 1) {
							?>
									<a href="#" class="img"><img src="../HMS Backend/roomimages/<?php echo $value3['room_img'] ?>" alt="" width="340px" height="410px"></a>
							<?php
								}
							}
							?>

							<div class="half left-arrow d-flex align-items-center">
								<div class="text p-4 p-xl-5 text-center">
									<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
									<p class="mb-0"><span class="price mr-1">Rs:<?php echo $value['room_price'] ?></span> <span class="per">per night</span></p>
									<h3 class="mb-3"><a href="rooms.html"><?php echo $value['room_name'] ?></a></h3>
									<ul class="list-accomodation">
										<li><span>Aduld(Max) :</span><?php echo $value['Adults'] ?></li>
										<li><span>Children(Max) :</span><?php echo $value['Childrens'] ?></li>
										<li><span>Size:</span> <?php echo $value['room_area'] ?></li>
										<span>

										</span>
									</ul>
									<p class="pt-1"><a href="single_room.php?viewroom=<?php echo $value['Room_id'] ?>" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					</div>

				<?php
				}
				?>



			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services" style="margin-top:200px ;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
						<div class="img" style="background-image: url(images/services-1.jpg);"></div>
						<div class="media-body py-4 px-3">
							<h3 class="heading">Map Direction</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
						<div class="img" style="background-image: url(images/services-2.jpg);"></div>
						<div class="media-body py-4 px-3">
							<h3 class="heading">Accomodation Services</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
						<div class="img" style="background-image: url(images/services-3.jpg);"></div>
						<div class="media-body py-4 px-3">
							<h3 class="heading">Great Experience</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	


	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Happy Clients &amp; Feedbacks</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Racky Henderson</p>
									<span class="position">Father</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_2.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Henry Dee</p>
									<span class="position">Businesswoman</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_3.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Mark Huff</p>
									<span class="position">Businesswoman</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_4.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Rodel Golez</p>
									<span class="position">Businesswoman</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Ken Bosh</p>
									<span class="position">Businesswoman</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 wrap-about">
					<div class="img img-2 mb-4" style="background-image: url(images/about.jpg);">
					</div>
					<h2>The most recommended vacation rental</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
				</div>
				<div class="col-md-6 wrap-about ftco-animate">
					<div class="heading-section">
						<div class="pl-md-5">
							<h2 class="mb-2">What we offer</h2>
						</div>
					</div>
					<div class="pl-md-5">
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<div class="row">
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-diet"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Tea Coffee</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Hot Showers</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-diet-1"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Laundry</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-first"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Air Conditioning</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-first"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Free Wifi</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-first"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Kitchen</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-first"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Ironing</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-first"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Lovkers</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<h2>Ready to get started</h2>
					<p class="mb-4">It???s safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
					<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Book now</a> <a href="#" class="btn btn-white px-4 py-3">Contact us</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Latest news from our blog</h2>
					<span class="subheading">News &amp; Blog</span>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text p-4 text-center">
							<h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
							<div class="meta mb-2">
								<div><a href="#">January 30, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text p-4 text-center">
							<h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
							<div class="meta mb-2">
								<div><a href="#">January 30, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text p-4 text-center">
							<h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
							<div class="meta mb-2">
								<div><a href="#">January 30, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php

	require_once('./footer.php');
	?>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>



</body>

</html>