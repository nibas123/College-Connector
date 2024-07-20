<?php
session_start();
include_once("../dboperation.php");
$db=new dboperation();
$feedback=$_POST['feedback'];
  $slogid=$_SESSION['login_id'];
  $sql="insert into tbl_feedback(feedback, parent_login_id) values('$feedback','$slogid')";
$res=$db->execute($sql);

if($res==1)
{
header("location:feedback.php");
}
?>