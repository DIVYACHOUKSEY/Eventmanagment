<?php
$nna= $_POST['name'];
$ada = $_POST['address'];
$pna = $_POST['phone'];
$cpa = $_POST['email'];
$pfa = $_POST['password'];
mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');
$q=mysql_query("insert into user(name,address,phone,email,password)values('$nna','$ada','$pna','$cpa','$pfa')");
if($q==true)
{
	echo "data inserted";
		header('location:uslogin.php');
}
else
{
	echo "error";
	
}

?>
