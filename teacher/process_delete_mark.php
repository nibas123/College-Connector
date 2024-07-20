<?php
$id=$_GET['id'];
include_once('query.php');
$user=new query();
$res=$user->delete_result_exam($id);
if($res==1)
{
header('location:exam_result.php');
}
?>