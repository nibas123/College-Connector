<?php
$login_id=$_GET['id'];
include_once('query.php');
$user=new query();
$res=$user->reject_student_login($login_id);
$res1=$user->reject_student_details($login_id);
if($res==1)
{
header('location:approve_user.php');
}
?>