<?php
require_once('../database.php');

$obj = new users();
if (isset($_POST['usersignup'])) {
   $returnvalue = $obj->signup($_POST);
}
// $returnvalue = $obj->signup($_POST);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v3 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-3.jpg');">
			<div class="inner">
				<form action="#" method="POST">
					<h3>Registration Form</h3>
					<?php
                   if (@$returnvalue) {
                    ?>
                    <div class='alert alert-success' role='alert'>
                    <?php echo $returnvalue?>
                  </div>;
                  <?php
                   }
                  ?>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">FirstName:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="first_name" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">LastName:</label>
							<div class="form-holder">
							<i class="zmdi zmdi-account-o"></i>
								<input type="text" name="last_name" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Date of Birth:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="date" name="birthday" class="form-control" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="email" name="email" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" name="passoword" placeholder="********" required>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Confirm Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" name="confirm_password" placeholder="********" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						
						<div class="form-wrapper">
							<label for="">Gender:</label>
							<div class="form-holder select">
								<select name="gender" id="" class="form-control">
									<option value="male">Male</option>
									<option value="femal">Female</option>
									<option value="other">Other</option>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Phone no:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="number" name="phone" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt required.
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
							<button type="submit" name="usersignup">Register Now</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>