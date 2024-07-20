<?php
session_start();
include_once("../dboperation.php");
$db=new dboperation();
$teacher_name=$_POST['teacher_name'];
$feedback=$_POST['feedback'];
  $slogid=$_SESSION['login_id'];
  $sql="insert into tbl_parent_teacher_feedback(feedback, parent_login_id,staff_id) values('$feedback','$slogid','$teacher_name')";
$res=$db->execute($sql);

if($res==1)
{
header("location:add_teacher_feedback.php");
}
?>