<?php
include("./db-cont.php");
// include("./phpmailer/phpmailer/PHPMailerAutoload.php");

if (isset($_POST['gotsubmit'])) {
    $uemail =  $_POST['forgotemail'];
    $token = rand(1000,9999);
    $query = "SELECT * FROM `admin-login` WHERE  admin_email = '$uemail'";
    $run = mysqli_query($con, $query);
    $fet = mysqli_fetch_assoc($run);
    if ($fet >0) {
        $query2= "UPDATE `admin-login` SET `Token`='$token' WHERE admin_email='$uemail'";
        $run2 = mysqli_query($con,$query2);
        if ($run2) {
            $_SESSION['admin_eml'] = $uemail;
			echo "<script>alert('$uemail')</script>";

        require './phpmailer/phpmailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		
		// $mail->SMTPDebug = 1;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPSecure = 'tls'; 
		$mail->Port = '587';                                    // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'fa921865@gmail.com';                 // SMTP username
		$mail->Password = 'gttdqjdgfelscglk';
		//$mail->SMTPSecure = '';
		// $mail->setForm = $email;
		// $mail->FormName = $name;
		// $mail->ADDAddress($email,$name);
		$mail->ADDCC($uemail);
		$mail->WordWrap = 50;
		//$mail->addAttachment($docs); 
		$mail->IsHTML(true);
		$mail->Subject = "Local host Forgot your password";
		$mail->Body = "Your Otp Is This:$token";
		if($mail->Send())
		{
        $_SESSION['email']=$uemail;
			// echo $error = '<label class="text-success"> Thank you for contacting us</label>';
            header("location:./verifyotp.php");
	    }
		else
		{
			echo $error = '<label class="text-danger"> There is an Error</label>';
		} 
		  
       
    


        
       
}
    }else {
        echo "<script>alert('Email is not valid')</script>";
        
    }

}


?>


<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 14:09:33 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Forgot Password</h3>

                                        </p>
                                    </div>
                                    <div class="d-grid">

                                        </span>

                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" action="" method="post">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="forgotemail" id="inputEmailAddress" placeholder="Email Address">
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                  <button type="submit" name="gotsubmit" class="btn btn-primary">Send Email</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 14:09:35 GMT -->

</html>