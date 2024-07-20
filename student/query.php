<?php
include_once("../dboperation.php");
class query
{

function select_weightage()
{
	$sql="select * from tbl_weightage";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function select_fee_status_by_sem( $logid,$sem)
{
$sql="select * from tbl_fee where student_login_id='$logid' and semester_id='$sem'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
 function select_sem_by_course($login_id)
{
$sql="select s.* from tbl_semester as s inner join tbl_student_reg r  on r.course_id= s.course_id where r.login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
}
}
?> 