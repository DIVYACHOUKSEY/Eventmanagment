<?php

$nm = $_POST['name'];
$ade = $_POST['address'];
$lid = $_POST['adminid'];
$pss = $_POST['password'];

mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');

$q=mysql_query("update adminlogin set name='$nm',address='$ade',adminid='$lid',password='$pss'")or die(mysql_error());


if($q==true)
{
	echo "update";
	header('location:adminprofilrupdate.php');
}
?>