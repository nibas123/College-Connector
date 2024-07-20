<?php
$login_id=$_GET['id'];
include_once('query.php');
$user=new query();
$res=$user->approve_staff($login_id);
if($res==1)
{
header('location:approve_user.php');
}
?>