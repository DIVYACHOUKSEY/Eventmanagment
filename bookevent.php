<!DOCTYPE html>
<html lang="en">
<head>
	<title>book event</title>
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
        <?php require_once 'userhomehead.php';?>

		<!--================Header Menu Area =================-->
     
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('uslogin/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					book event
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="bookeventcheck.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "enter username">
	                <input class="input100" type="text" name="venu_name" placeholder="event name">

						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="venu_address" placeholder="place">
						<span class="focus-input100" data-placeholder="&#xe82d;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="no_guest" placeholder="number of guest">
						<span class="focus-input100" data-placeholder="&#xe82b;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="date" name="date" placeholder="date">
						<span class="focus-input100" data-placeholder="&#xe82f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							book
						</button>
					</div>
				</form>
				<div class="container-login100-form-btn m-t-32">
						<div>
						<button class="login100-form-btn">
	
							<a href="#" class="txt1">
										cancel
							</a>
							</button>
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