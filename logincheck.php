<?php
$admini = $_POST['adminid'];
$psw = $_POST['password'];

mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');
$q=mysql_query("SELECT * FROM ADMINLOGIN WHERE adminid='$admini' && password='$psw'");

$row=mysql_fetch_array($q);
if($row['adminid']==$admini && $row['password']==$psw)
{
	echo "login";
	header('location:adminhome.php');
}	
else
{
		header('location:login.php');

}
	
?>