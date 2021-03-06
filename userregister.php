<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="uslogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="uslogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="uslogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="uslogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="uslogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
 <!--================Header Menu Area =================-->
        <?php require_once 'head.html';?>

		<!--================Header Menu Area =================-->
     
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('uslogin/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					user register
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="userregistercheck.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "enter username">
						<input class="input100" type="text" name="name" placeholder="name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter address">
						<input class="input100" type="text" name="address" placeholder="address">
						<span class="focus-input100" data-placeholder="&#xe82d;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter mobile number">
						<input class="input100" type="integer" name="phone" maxlength=10 placeholder="mobile number">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							register
						</button>
					</div>
				</form>
				<div class="container-login100-form-btn m-t-32">
						<div>
						
	
							<a href="uslogin.php" class="txt1"><button class="login100-form-btn">
										login
						
							</button></a>
						</div>
					</div>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="uslogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="uslogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="uslogin/vendor/bootstrap/js/popper.js"></script>
	<script src="uslogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="uslogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="uslogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="uslogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="uslogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="uslogin/js/main.js"></script>

</body>
</html>