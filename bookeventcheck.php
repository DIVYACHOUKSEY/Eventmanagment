<?php
$nnams = $_POST['venu_name'];
$nnamsa = $_POST['venu_address'];
$nnamsas = $_POST['no_guest'];
$nnamsad = $_POST['date'];
mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');
$q=mysql_query("insert into bookevent(venu_name,venu_address,no_guest,date)values('$nnams','$nnamsa','$nnamsas','$nnamsad')");
if($q==true)
{
	echo "data inserted";
		header('location:bookeventapproval.php');

}
else
{
	echo "error";
	
}

?>