<?php
$id=$_GET['id'];
include_once('query.php');
$user=new query();
$res=$user->delete_hod($id);
if($res==1)
{
header('location:hod.php');
}
?>