<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>user home</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="head/css/bootstrap.css">
        <link rel="stylesheet" href="head/vendors/linericon/style.css">
        <link rel="stylesheet" href="head/css/font-awesome.min.css">
        <link rel="stylesheet" href="head/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="head/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="head/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="head/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="head/css/style.css">
        <link rel="stylesheet" href="head/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php require_once 'userhomehead.php';?>

		<!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">						
						<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100"><center>
					<table border="1px">
						<thead>
							<tr class="table100-head">
								<th class="column1">user name</th>
								<th class="column2">address</th>
								<th class="column3">phone number</th>
								<th class="column4">email</th>
								<th class="column5">password</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						
						        
                                  mysql_connect("localhost","root","");
                                  mysql_select_db('eventmanagment');
                                  $q=mysql_query("SELECT * FROM user ");
								  $row=mysql_fetch_array($q)
	                   ?>
								<tr>
									<td class="column1"> <?php echo $row['names'];?></td>
									<td class="column2"> <?php echo $row['address'];?></td>
									<td class="column3"><?php echo $row['phone'];?></td>
									<td class="column4"><?php echo $row['email'];?></td>
									<td class="column5"><?php echo $row['password'];?></td>
								</tr>
						</tbody>
					</table><br>
					<center><a  href="edituser.php?id=<?php echo $row['id']?>"><button>update</button></a>
					</center>
				</div>
			</div>
		</div>
	</div>

						<img src="head/img/banner/shap-2.png" alt="">
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
        	<div class="container box_1620">
        		<div class="footer_inner p_120">
        			<img src="img/footer-logo.png" alt="">
        			<ul class="list f_menu">
        				<li><a href="#">Home</a></li>
        				<li><a href="#">Our Story</a></li>
        				<li><a href="#">Accomodation</a></li>
        				<li><a href="#">Gallery</a></li>
        				<li><a href="#">Pages</a></li>
        				<li><a href="#">Blog</a></li>
        				<li><a href="#">Contact</a></li>
        			</ul>
        			<ul class="list f_social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
					</ul>
       				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/flipclock/timer.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>