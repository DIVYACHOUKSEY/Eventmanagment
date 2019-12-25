<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<!--================Header Menu Area =================-->
        <?php require_once 'adminhomehead.php';?>

		<!--================Header Menu Area =================-->
     

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">event id</th>
								<th class="column2">event name</th>
								<th class="column3">event place</th>
								<th class="column4">number of guest</th>
								<th class="column5">date</th>
								<th class="column6">delete</th>
							</tr>
						</thead>
						<tbody>
						<?php 
                                  mysql_connect("localhost","root","");
                                  mysql_select_db('eventmanagment');
                                  $q=mysql_query("SELECT * FROM bookevent");
								  while($data=mysql_fetch_array($q))
	                               {  ?>
								<tr>
									<td class="column1"> <?php echo $data['id'];?></td>
									<td class="column2"> <?php echo $data['venu_name'];?></td>
									<td class="column3"><?php echo $data['venu_address'];?></td>
									<td class="column4"><?php echo $data['no_guest'];?></td>
									<td class="column5"><?php echo $data['date'];?></td>
									<td class="colomn6"><center><a  href="del.php?id=<?php echo $data['id']?>"><button>Delete</button></a><center></td>
								</tr><?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/bootstrap/js/popper.js"></script>
	<script src="table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="table/js/main.js"></script>

</body>
</html>