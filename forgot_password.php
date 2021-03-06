<?php
require "db/DB.php";
if(isset($_SESSION['id'])){
	header("Location:forgot_password.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome| Forgot Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" type="image/x-icon" href="./images/favicon.ico"/>

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
			<div class="main-page login-page ">
				<h2 class="title1">Forgot Password</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="send_email.php" method="POST">
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<input type="submit" name="submit" value="Submit Password">
							<div class="registration">
								Don't have an account ?
								<a class="" href="signup.php">
									Request account
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