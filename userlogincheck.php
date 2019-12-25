<?php
session_start();
$emaill = $_POST['email'];
$psws = $_POST['password'];
$hostname='localhost';
$dbname='root';
$password='';

mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');
$q=mysql_query("SELECT * FROM user WHERE email='$emaill' && password='$psws'");

$row=mysql_fetch_array($q);
if($row['email']==$emaill && $row['password']==$psws)
{
session_register("myemail");
$_SESSION['login_user']=$email;	
	header('location:userhome.php');
}	
	else{
		$error="your login name or password is invalid";

	}
?>