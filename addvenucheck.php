<?php
$nnam = $_POST['venu_name'];
$ad = $_POST['venu_address'];
$pn = $_POST['venu_phone'];
$cp = $_POST['capacity'];
$rss = $_POST['rs'];
mysql_connect("localhost","root","");
mysql_select_db('eventmanagment');
$q=mysql_query("insert into addvenu(venu_name,venu_address,venu_phone,capacity,rs)values('$nnam','$ad','$pn','$cp','$rss')");



if($q==true)
{
	echo "data inserted";
			header('location:addvenusuccess.php');


}
else
{
	echo "error";
	
}

?>