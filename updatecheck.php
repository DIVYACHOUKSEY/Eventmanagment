<?php
$id=$_POST['id'];
$nme = $_POST['names'];
$adee = $_POST['address'];
$lide = $_POST['phone'];
$pss1 = $_POST['email'];
$psse = $_POST['password'];

mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');

$q=mysql_query("update user set names='$nme',address='$adee',phone='$lide',email='$pss1',password='$psse'where id='$id'")or die(mysql_error());


if($q==true)
{
	echo "update";
			header('location:userprofileupdate.php');


}
?>