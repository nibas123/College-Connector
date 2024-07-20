<?php 
session_start();
$login_id=$_SESSION['login_id'];
	$assign_id=$_GET["assign_id"];
									
include_once('query.php');
$user=new query();
$res=$user->select_assign_out_of_mark_id($assign_id);
while($row=mysqli_fetch_array($res))
{
	echo $row["out_of_mark"];

	
}


									?>