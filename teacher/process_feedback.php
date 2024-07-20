<?php
session_start();
include_once("../dboperation.php");
$db=new dboperation();
echo $subject=$_POST['subject'];
echo $feedback=$_POST['feedback'];
 echo  $slogid=$_SESSION['login_id'];
 echo  $sql="insert into tbl_faculty_feedback(subject,feedback,login_id) values('$subject','$feedback','$slogid')";
$res=$db->execute($sql);

if($res==1)
{
header("location:feedback.php");
}
?>