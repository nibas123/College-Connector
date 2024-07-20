<?php 
session_start();
$login_id=$_SESSION['login_id'];
	$rule=$_GET["rule"];
									
include_once('query.php');
$user=new query();
$res=$user->select_rule_amount($rule);
while($row=mysqli_fetch_array($res))
{
	echo $row["fine"];

	
}


									?>