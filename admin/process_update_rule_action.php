<?php
include_once("query.php");
$user=new query();
$rule_id=$_POST['rid'];
 $rule_name=$_POST['rule_name'];
 $description=$_POST['description'];
 $fine=$_POST['fine'];
 $res=$user->update_rule_details($rule_name,$description,$fine,$rule_id);

if($res==1)
{
header("location:rule.php");
}
?>