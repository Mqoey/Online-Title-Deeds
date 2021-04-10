<?php
require "db/DB.php";
if(isset($_SESSION['id'])){
	header("Location:wrong_email.php");
}

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require_once "vendor/autoload.php";

// //PHPMailer Object
// $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

// //From email address and name
// $mail->From = "from@yourdomain.com";
// $mail->FromName = "Full Name";

// //To address and name
// $mail->addAddress("recepient1@example.com", "Recepient Name");
// $mail->addAddress("recepient1@example.com"); //Recipient name is optional

// //Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

// //CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

// //Send HTML or Plain Text email
// $mail->isHTML(true);

// $mail->Subject = "Subject Text";
// $mail->Body = "<i>Mail body in HTML</i>";
// $mail->AltBody = "This is the plain text version of the email content";

// try {
//     $mail->send();
//     echo "Message has been sent successfully";
// } catch (Exception $e) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome| Wrong Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="">
<div class="">
		<div id="page-wrapper">
			<div class="main-page login-page">
				<h2 class="title1" style="color:red">Incorrect Email!</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="" method="POST">
							<div class="registration">
								Back to Login ?
								<a class="" href="login.php">
									Login
								</a>
							</div>
						</form>
					</div>
				</div>				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2021 All Rights Reserved | Design by XDevelopers</a></p>
		</div>
        <!--//footer-->
	</div>	
</body>
</html>