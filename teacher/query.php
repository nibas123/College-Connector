<?php
include_once("../dboperation.php");
class query
{
	
	function select_staff($login_id)
	{
	  
	  echo  $sql="select s.* from tbl_login l inner join tbl_staff_reg s on s.login_id=l.login_id where  l.usertype='Teacher' and l.status=1";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_department()
	{
 $sql="select * from tbl_department";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_course()
	{
	  
	   $sql="select * from tbl_course";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_staff_details($login_id)
	{
	  
	   $sql="select * from tbl_staff_reg login_id=$login_id ";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_batch()
	{
	  
	   $sql="select * from tbl_batch";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_subject()
	{
	  
	   $sql="select * from tbl_subject";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_student()
	{
	  
	   $sql="select * from  tbl_student_reg inner join tbl_login on tbl_student_reg.login_id=tbl_login.login_id where tbl_login.status='Approved'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_alott_staff($login_id)
	{
	  
	   $sql="select * from tbl_alott_staff a inner join tbl_subject s on a.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id inner join tbl_staff_reg as st on a.teacher_login_id=st.login_id where d.department_id=(select department_id from tbl_staff_reg where login_id='$login_id')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function assign_teacher_details($staff_name,$subject_name,$time_period,$day)
	{
	  
	   echo $sql="insert into tbl_alott_staff(teacher_login_id,subject_id,time_period,day)values($staff_name,$subject_name,$time_period,'$day')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_subject_details($course_name,$batch_name,$subject_name)
	{
	  
	  echo  $sql="insert into tbl_subject(course_id,batch_id,subject_name)values($course_name,$batch_name,'$subject_name')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_faculty_feedback($id)
	{
		 $sql="delete from tbl_faculty_feedback where feedback_id='$id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_subject($id)
	{
	  
	   $sql="delete from tbl_subject where subject_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_teacher($id)
	{
	  
	   $sql="delete from tbl_alott_staff where alott_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_feedback()
	{
	  
	   $sql="select f.*,s.* from tbl_feedback_student f inner join tbl_student_reg s on f.student_reg_id=s.stud_reg_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	
	function delete_feedback($id)
	{
	  
	  echo $sql="delete from tbl_feedback_student where feedback_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	
	function select_subject_details()
	{
	  
	   $sql="select s.*,c.*,b.* from tbl_course c inner join  tbl_subject s on c.course_id=s.course_id inner join tbl_batch b on s.batch_id=b.batch_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	 function select_rule()
	{
	  
	   $sql="select * from tbl_rules";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_rule_by_id($id)
	{
	  
	   $sql="select * from tbl_rules where rule_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function insert_rule_violation($cid,$bid,$sregid,$rule_id,$ldate)
	{
		$ldatearray = explode('-', $ldate);
$newlDate = strip_tags($ldatearray [2].'-'.$ldatearray [1].'-'.$ldatearray [0]);
		
		 $sql="insert into tbl_rule_violation(course_id,batch_id,stud_reg_id,rule_id,last_date_fine) values($cid,$bid,$sregid,$rule_id,'$newlDate')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_rule_violation()
	{
$sql="select rv.*,r.*,s.*,b.*,c.* from  tbl_rule_violation as rv inner join tbl_rules as r on rv.rule_id=r.rule_id inner join tbl_student_reg as s on rv.stud_reg_id = s.stud_reg_id inner join tbl_batch as b on b.batch_id=rv.batch_id inner join tbl_course as c on c.course_id=rv.course_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
	}
	function select_holidays()
	{
$sql="select * from  tbl_calendar";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_course_by_id($department_id)
	{
$sql="select * from tbl_course where department_id='$department_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_teachers_by_did($dpt)
	{
	 $sql="select * from tbl_staff_reg where department_id='$dpt'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
	}
	function select_semester_by_id($course_name)
{
 $sql="select * from tbl_semester where course_id='$course_name'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_subject_by_id($semester)
{
	 $sql="select * from tbl_subject where semester_id='$semester'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function select_department_by_logid($login_id)
{
 $sql="select * from tbl_department inner join tbl_staff_reg on tbl_department.department_id= tbl_staff_reg.department_id where tbl_staff_reg.login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function assign_teacher_check1($staff_name,$day,$time_period)
{
echo $sql="select * from tbl_alott_staff  where teacher_login_id='$staff_name' and day='$day' and time_period='$time_period'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function assign_teacher_check2($day,$time_period)
{
 $sql="select * from tbl_alott_staff   where  day='$day' and time_period='$time_period'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function timetable($login_id)
{
$sql="select * from tbl_alott_staff inner join   where  day='$day' and time_period='$time_period'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_time_table($login_id)
{
$day=date('l');
   $sql="select * from tbl_alott_staff a inner join tbl_subject s on a.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id inner join tbl_staff_reg as st on a.teacher_login_id=st.login_id where a.teacher_login_id='$login_id' and day='$day'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_list_student($alott_id)
{
	 $sql="select * from tbl_alott_staff a inner join tbl_subject s on a.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_student_reg as st on sem.semester_id=st.semester_id inner join tbl_login as ll on st.login_id= ll.login_id where a.alott_id='$alott_id' and ll.status='1'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function select_attendane_today($alott_id)
{
 $sql="select * from tbl_attendance as  att inner join tbl_student_reg as st on att.student_login_id=st.login_id inner join tbl_alott_staff as a on  a.alott_id=att.alott_id where a.alott_id='$alott_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_notes_by_login_id($login_id)
{
 $sql="select * from tbl_note as n inner join tbl_subject s on n.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where  n.teacher_login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function delete_notes($id)
	{
	  
	   $sql="delete from tbl_note where note_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
function select_exam_by_login_id($login_id)
{
$sql="select * from tbl_exam_announce as n inner join tbl_subject s on n.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where  n.teacher_login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
}
function delete_exam($id)
{
 $sql="delete from tbl_exam_announce where exam_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function select_assign_by_login_id($login_id)
{
$sql="select * from tbl_assignment as n inner join tbl_subject s on n.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where  n.teacher_login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
}
function delete_assignment($id)
{
 $sql="delete from tbl_assignment where assign_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_topic_by_id($subject_name,$login_id)
{
	$d=date("Y-m-d");
 $sql="select * from tbl_exam_announce where  teacher_login_id='$login_id' and subject_id='$subject_name' and exam_date<='$d'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
}
function select_topic_assign_by_id($subject_name,$login_id)
{
$d=date("Y-m-d");
$sql="select * from tbl_assignment where  teacher_login_id='$login_id' and subject_id='$subject_name' and assign_date<='$d'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}

function select_out_of_mark_id($exam_id)
{
$sql="select * from tbl_exam_announce where  exam_id='$exam_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_assign_out_of_mark_id($assign_id)
{
$sql="select * from tbl_assignment where  assign_id='$assign_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_student_by_sem($semester)
{
$sql="select * from tbl_student_reg inner join tbl_login on tbl_student_reg.login_id=tbl_login.login_id where  semester_id='$semester' and status='1'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_exam_result_by_login_id($login_id)
{
$sql="select * from tbl_exam_result as e inner join tbl_exam_announce as n on n.exam_id=e.exam_id inner join tbl_student_reg as st on e.student_login_id=st.login_id inner join tbl_subject s on n.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where  n.teacher_login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function delete_result_exam($id)
{
 $sql="delete from tbl_exam_result where result_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_assign_result_by_login_id($login_id)
{
$sql="select * from tbl_assignment_result as e inner join tbl_assignment as n on n.assign_id=e.assign_id inner join tbl_student_reg as st on e.student_login_id=st.login_id inner join tbl_subject s on n.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where  n.teacher_login_id='$login_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_weightage()
{
	$sql="select * from tbl_weightage";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function select_rule_amount($rule)
{
$sql="select * from tbl_rules where  rule_id='$rule'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_rule_violation_staff($login_id)
{
 $sql="select * from tbl_rule_violation as r inner join tbl_rules as ru on r.rule_id=ru.rule_id inner join tbl_student_reg as st on r.student_login_id=st.login_id inner join tbl_semester sem on sem.semester_id=st.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where r.staff_login_id='$login_id' order by r.date_fine desc";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
}

?>