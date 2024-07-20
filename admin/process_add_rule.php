<?php
include_once("query.php");
$user=new query();
$rule_name=$_POST['rule_name'];
$description=$_POST['description'];
$fine=$_POST['fine'];
$res=$user->add_rule_details($rule_name,$description,$fine);

if($res==1)
{
header("location:rule.php");
}
?>