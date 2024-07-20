<?php 
session_start();
$login_id=$_SESSION['login_id'];
	$exam_id=$_GET["exam_id"];
									
include_once('query.php');
$user=new query();
$res=$user->select_out_of_mark_id($exam_id);
while($row=mysqli_fetch_array($res))
{
	echo $row["out_of_mark"];

	
}


									?>