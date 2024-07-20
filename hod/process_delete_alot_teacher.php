<?php
$id=$_GET['id'];
include_once('query.php');
$user=new query();
$res=$user->delete_teacher($id);
if($res==1)
{
header('location:assign_teacher.php');
}
?>