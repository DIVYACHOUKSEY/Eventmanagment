<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>admin home</title>
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
        <?php require_once 'adminhomehead.php';?>

		<!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
       <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h1>my Detail</h1>
						<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100"><center>
				<form  action="editadmincheck.php" method="POST">
					<table border="1px">
						<thead>
							<tr class="table100-head">
								<td class="column1">admin name</td>
								<td class="column2">address</td>
								<td class="column3">email ID</td>
								<td class="column4">password</td>
							</tr>
						</thead>
						<tbody>
						<?php 
                                  mysql_connect("localhost","root","");
                                  mysql_select_db('eventmanagment');
                                  $q=mysql_query("SELECT * FROM adminlogin");
								  while($data=mysql_fetch_array($q))
	                               {  ?>
								<tr>
									<td class="column1"> <input type="text" name="name" value="<?php echo $data['name'];?>"> </td>
									<td class="column2"> <input type="text" name="address"value="<?php echo $data['address'];?>"></td>
									<td class="column3"><input type="email"  name="adminid"value="<?php echo $data['adminid'];?>"></td>
									<td class="column4"><input type="password" name="password" value="<?php echo $data['password'];?>"></td>
								</tr><?php } ?>
						</tbody>
					</table><br>
					<input type="submit" value="submit">
					<button>cancel</button>
					</form>
					<br>
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
        				<li><a href="#">Gallery</a></li>
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
        
    </body>
</html>