<?php 

if(isset($_POST['sub']))
{
  $name=@$_POST["name"];
  $email=@$_POST["email"];
  $subject=@$_POST["subject"];
  $message=@$_POST["message"];
//   $code=rand(1000,9000);
require 'phpmailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		
		$mail->SMTPDebug = 1;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPSecure = 'tls'; 
		$mail->Port = '587';                                    // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'awaisasad660@gmail.com';                 // SMTP username
		$mail->Password = 'pbvqdgttwsjhzjnw';
		//$mail->SMTPSecure = '';
		// $mail->setForm = $email;
		// $mail->FormName = $name;
		// $mail->ADDAddress($email,$name);
		$mail->ADDCC($email,$name);
		$mail->WordWrap = 50;
		//$mail->addAttachment($docs); 
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $message;
		if($mail->Send())
		{
			echo $error = '<label class="text-success"> Thank you for contacting us</label>';
	    }
		else
		{
			echo $error = '<label class="text-danger"> There is an Error</label>';
		} 
		  
       
}


?>
<html >
<head>
<title>PHPSMTP</title>
<link href="style.css" type="text/css" rel="stylesheet" media="all"/>
<link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
 <div class="container-fluid">
 <?php echo @$error; ?>
<form class="form" method="post">
  <div class="form-group">
    <label>ENTER NAME</label>
    <input type="text" class="form-control" placeholder="Enter Nmae" name="name" <?php echo @$name; ?>>
    <br/>
    <label>ENTER EMAIL</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email" <?php echo @$email; ?>>
    <br/>
    <label>ENTER SUBJECT</label>
    <input type="text" class="form-control" placeholder="Enter Subject" name="subject" <?php echo @$subject; ?>>
    <br/>
    <label>ENTER MESSAGE</label>
    <textarea type="text" class="form-control" placeholder="Enter Message" name="message" <?php echo @$message; ?>></textarea>
    <br/>
    
    <br/>
    <button type="submit" class="btn1 btn" name="sub">Submit</button>
  </div>
  </form>

  
  


<script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>