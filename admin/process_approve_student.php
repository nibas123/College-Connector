<?php
$login_id=$_GET['id'];
include_once('query.php');
$user=new query();
$res=$user->approve_student($login_id);
$res1=$user->approve_parent($login_id);
if($res==1)
{
header('location:approve_user.php');
}
?>