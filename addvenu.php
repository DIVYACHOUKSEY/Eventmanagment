

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>event organization</title>
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
					<center>
										<div class="sub-container">
										<h1>ADD VENUE</h1>
						<form action="addvenucheck.php" method="POST">
						<table>
						<tr><td>venu name</td>
						<td>
						<input type="text" name="venu_name"></td>
						</tr>
						<tr><td>venu address</td>
						<td><input type="text" name="venu_address"></td>
                         </tr>
						<tr><td>venu phone</td>
						<td><input type="mobile_number" name="venu_phone" maxlength="10" ></td>
						</tr> 
						<tr><td>capacity</td>
						<td><input type="text" name="capacity"></td>
						</tr>
						<tr><td>rupees</td>
						<td><input type="text" name="rs"></td>
						</tr>
						</table>
						<div>
						<input type="submit" value="submit" name="submit"></div>
						</form>
						</div>
						</center>
						</div>
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