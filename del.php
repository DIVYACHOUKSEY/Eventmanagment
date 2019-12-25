<?php
					mysql_connect("localhost","root","");
                    Mysql_select_db('eventmanagment');
$id=$_REQUEST['id'];
                                  $q=mysql_query("DELETE FROM bookevent where id=$id");
								  header('location:AHISTORY.php');

?>