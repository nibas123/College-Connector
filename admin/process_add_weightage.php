<?php
include_once("query.php");
$user=new query();
$Weightage=$_POST['Weightage'];
$type=$_POST['type'];
$res1=$user->check_weightage($type);
$n=mysqli_num_rows($res1);
if($n==0)
{
$res=$user->add_weightage($Weightage,$type);
}
else
{
$res=$user->update_weightage($Weightage,$type);	
}



if($res==1)
{
header("location:add_weightage.php");
}
?>