

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Honey Wedding Multi</title>
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
					<center>
										<div class="sub-container">
						<form action="bookeventcheck.php" method="POST">
						<table>
						
						<?php 
                                  mysql_connect("localhost","root","");
                                  mysql_select_db('eventmanagment');
                                  $q=mysql_query("SELECT * FROM addvenu");
								  $options="";
								  while($row=mysql_fetch_array($q))
								  {
									  $options=$options."<option>$row[1]</option>";
								  }
	                                 ?>
						
						<tr><td>event name</td>
						<td>
                          <select name="venu_name"><?php echo $options;?></select>				
						  </tr>
						<tr><td>place</td>
						<td><input type="text" name="venu_address"></td>
                         </tr>
						<tr><td>number of guest</td>
						<td><input type="integer" maxlength="10"  data-validation="integer" name="no_guest"></td>
						</tr> 
						<tr><td>date</td>
						<td>
						
						<select name="date">
<option>1</option><option>2</option><option>3</option>
<option>4</option><option>5</option><option>6</option>
<option>7</option><option>8</option><option>9</option>
<option>10</option><option>11</option><option>12</option>
<option>13</option><option>14</option><option>15</option>
<option>16</option><option>17</option><option>18</option>
<option>19</option><option>20</option><option>21</option>
<option>22</option><option>23</option><option>24</option>
<option>25</option><option>26</option><option>27</option>
<option>28</option><option>29</option><option>30</option>
<option>31</option>
</select name="date">
<select>
<option>jan</option><option>feb</option><option>march</option>
<option>aprail</option><option>may</option><option>jun</option>
<option>july</option><option>agust</option><option>sep</option>
<option>oct</option><option>Non</option><option>Dec</option>
</select>
<select name="date">
<option>2016</option><option>2017</option><option>2018</option>
<option>2019</option><option>2020</option><option>2021</option>
<option>2022</option><option>2023</option><option>2024</option>
<option>2025</option><option>2026</option><option>2027</option>
<option>2028</option><option>2029</option><option>2030</option>
</select>
						
						</td>
						</tr>
						
						</table><br>
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