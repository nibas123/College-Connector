<?php
include_once("../dboperation.php");
class query
{
	function select_department_details($dpt)
	{
		$sql="select * from tbl_department where department_name='$dpt'";
       $db=new dboperation();
		$res=$db->execute($sql);
		return $res;

	}
function add_department_details($dpt)
{
	  echo  $sql="insert into tbl_department(department_name)values('$dpt')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}function select_department()
	{
	  
	   $sql="select * from tbl_department";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_department($id)
	{
		 $sql="delete from  tbl_department where department_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_course_details($course_name,$duration,$dpt)
	{
		$sql="select * from tbl_course where course_name='$course_name'";
       $db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_course_details($course_name,$duration,$dpt)
	{
	  
	    $sql="insert into tbl_course(course_name,duration,department_id)values('$course_name',$duration,$dpt)";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_semester_details_sem($semester,$course_id)
	{
   $sql="select * from tbl_semester where upper(semester_name)=upper('$semester') and course_id='$course_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function update_semester_details($semester,$course_id,$fee,$sid)
	{
		$sql="update tbl_semester set semester_name='$semester',course_id='$course_id',fee_amount='$fee' where semester_id='$sid'" ; 
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_semester_details($semester,$course_id,$fee)
	{
	  
	  echo  $sql="insert into tbl_semester(semester_name,course_id,fee_amount)values('$semester','$course_id','$fee')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function update_rule_details($rule_name,$description,$fine,$rule_id)

	{
		 $sql="update tbl_rules set rule_name='$rule_name',description='$description',fine=$fine where rule_id='$rule_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_rule_details($rule_name,$description,$fine)
	{
	  
	   $sql="insert into tbl_rules(rule_name,description,fine)values('$rule_name','$description',$fine)";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	 
	function select_course_dept()
	{
	  
	   $sql="select c.*,d.* from tbl_course as c inner join tbl_department as d on c.department_id=d.department_id";
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
	function select_rule()
	{
	  
	   $sql="select * from tbl_rules";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_semester_details($course_id)
	{
	  
	   $sql="select b.*,c.*,d.* from tbl_semester b inner join tbl_course c on b.course_id=c.course_id inner join tbl_department as d on d.department_id=c.department_id where b.course_id='$course_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}

	function select_fee_details()
	{
	  
	   $sql="select c.*,a.*,b.* from tbl_course c inner join tbl_account a on c.course_id=a.course_id inner join tbl_batch b on a.batch_id=b.batch_id  ";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_fee_details($course_name,$batch_name,$fee)
	{
	  
	  echo  $sql="insert into tbl_account(course_id,batch_id,payment)values($course_name,$batch_name,$fee)";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_staff()
	{
	  
	  $sql="select s.*,l.* from tbl_staff_reg s inner join  tbl_login l on s.login_id=l.login_id where l.status=0";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_staff_details()
	{
	  
	  $sql="select s.*,l.*,c.* from tbl_staff_reg s inner join  tbl_login l on s.login_id=l.login_id inner join tbl_department as c on c.department_id=s.department_id where l.status=0";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_staff_details_approved()
	{
		 $sql="select s.*,l.*,c.* from tbl_staff_reg s inner join  tbl_login l on s.login_id=l.login_id inner join tbl_department as c on c.department_id=s.department_id where l.status=1";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function approve_staff($login_id)
	{
	  
	   $sql="update tbl_login set status=1 where login_id=$login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function reject_staff_login($login_id)
	{
	  
	   $sql="delete from tbl_login where login_id=$login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function reject_staff_details($login_id)
	{
	  
	   $sql="delete from tbl_staff_reg where login_id=$login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_student()
	{
	  
	   $sql="select s.*,l.* from tbl_student_reg s inner join  tbl_login l on s.login_id=l.login_id where l.status=0";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_student_details()
	{
		 $sql="select s.*,l.*,c.*,b.*,d.* from tbl_student_reg s inner join  tbl_login l on s.login_id=l.login_id inner join  tbl_semester as b on b.semester_id=s.semester_id inner join tbl_course as c on c.course_id=b.course_id inner join tbl_department as d on c.department_id=d.department_id where l.status=0";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_student_details_approved()
	{
		$sql="select s.*,l.*,c.*,b.*,d.* from tbl_student_reg s inner join  tbl_login as l on s.login_id=l.login_id inner join  tbl_semester as b on b.semester_id=s.semester_id inner join tbl_course as c on c.course_id=b.course_id inner join tbl_department as d on c.department_id=d.department_id where l.status=1";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_student_details_approved_by_sem($sem)
	{
		$sql="select s.*,l.*,c.*,b.*,d.* from tbl_student_reg s inner join  tbl_login l on s.login_id=l.login_id inner join  tbl_semester as b on b.semester_id=s.semester_id inner join tbl_course as c on c.course_id=b.course_id inner join tbl_department as d on c.department_id=d.department_id where l.status=1 and s.semester_id='$sem'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function approve_student($login_id)
	{
	  
	   $sql="update tbl_login set status=1 where login_id=$login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function approve_parent($login_id)
	{
	  
	   $sql="update tbl_login set status=1 where login_id=$login_id+1";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function reject_student_login($login_id)
	{
	  
	   $sql="delete from tbl_login where login_id=$login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function reject_student_details($login_id)
	{
	  
	   $sql="delete from tbl_student_reg where login_id=$login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_course($id)
	{
	  
	   $sql="delete from tbl_course where course_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function update_semester($id)
	{
		$sql="update tbl_semester where semester_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_semester($id)
	{
	  
	   $sql="delete from tbl_semester where semester_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_rule($id)
	{
	  
	   $sql="delete from tbl_rules where rule_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_fee($id)
	{
	  
	   $sql="delete from tbl_account where account_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	
    function select_all_students()
	{
	  
	   $sql="select * from  tbl_student_reg";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_hdays($hdate,$description)
	{

	
	$datefromarray = explode('-', $hdate);
$newDate = strip_tags($datefromarray[2].'-'.$datefromarray[1].'-'.$datefromarray[0]);
		echo $sql="insert into tbl_calendar(offdate,description) values('$newDate ','$description')";
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
	function update_holidays($hdate,$description)
	{
		$desc=",".$description;
		$datefromarray = explode('-', $hdate);
$newDate = strip_tags($datefromarray[2].'-'.$datefromarray[1].'-'.$datefromarray[0]);
$sql="update tbl_calendar set description=concat(description,'$desc') where offdate= '$newDate'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_holidaysbydate($hdate)
	{
		$datefromarray = explode('-', $hdate);
$newDate = strip_tags($datefromarray[2].'-'.$datefromarray[1].'-'.$datefromarray[0]);
$sql="select *  from tbl_calendar where offdate= '$newDate'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_holidays_by_id($id)
{
	$sql="select * from  tbl_calendar where calendarid=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
	function update_holidays_by_id($hdate,$description,$id)
	{
		$datefromarray = explode('-', $hdate);
$newDate = strip_tags($datefromarray[2].'-'.$datefromarray[1].'-'.$datefromarray[0]);
		$sql="update tbl_calendar set description='$description',offdate= '$newDate' where calendarid=$id";
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
function add_weightage($Weightage,$type)
{
 $sql="insert into tbl_weightage(weightage,type)values('$Weightage','$type')";
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
function check_weightage($type)
{
	$sql="select * from tbl_weightage where type='$type'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}	
function update_weightage($Weightage,$type)
{
		$sql="update tbl_weightage set weightage='$Weightage' where type='$type'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function delete_weightage($id)
{
 $sql="delete from  tbl_weightage where weightage_id=$id";
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
function add_subject_details($semester,$subject)
{
   $sql="insert into tbl_subject(semester_id,subject_name)values('$semester','$subject')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_subject_detail($department_name,$course_name,$semester,$subject)
{
	echo $sql="select * from tbl_subject as s inner join tbl_semester as ss on s.semester_id=ss.semester_id inner join tbl_course as c on c.course_id=ss.course_id inner join tbl_department as d on c.department_id=d.department_id  where s.subject_name='$subject' and ss.semester_id='$semester' and d.department_id='$department_name' and c.course_id='$course_name'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
function select_subject_details()
{
$sql="select * from tbl_subject as s inner join tbl_semester as ss on s.semester_id=ss.semester_id inner join tbl_course as c on c.course_id=ss.course_id inner join tbl_department as d on c.department_id=d.department_id ";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function delete_subject($id)
	{
		 $sql="delete from  tbl_subject where subject_id=$id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_teachers_by_did($dpt)
	{
	$sql="select * from tbl_staff_reg inner join tbl_login on tbl_staff_reg.login_id=tbl_login.login_id where tbl_staff_reg.department_id='$dpt' and tbl_login.status='1'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
	}
	function add_hod($department_id,$teacher)
	{
	$sql="insert into tbl_hod(department_id, 	teacher_login_id)values('$department_id','$teacher')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
	}
	function check_hod_teacher($teacher)
	{
	$sql="select * from tbl_hod where  	teacher_login_id='$teacher'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
	}
	
	function check_hod_department($department_id)
	{
	$sql="select * from tbl_hod where  	department_id ='$department_id'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;		
	}
	function select_hod()
	{
		 $sql="select * from tbl_hod inner join tbl_department on tbl_hod.department_id=tbl_department.department_id inner join tbl_staff_reg on tbl_hod.teacher_login_id=tbl_staff_reg.login_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function delete_hod($id)
	{
	 $sql="delete from  tbl_hod where hod_id=$id";
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
function select_rules($rid)
{
	$sql="select * from tbl_rules where  rule_id='$rid'";
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
function select_rule_violation()
{
 $sql="select * from tbl_rule_violation as r inner join tbl_rules as ru on r.rule_id=ru.rule_id inner join tbl_student_reg as st on r.student_login_id=st.login_id inner join tbl_semester sem on sem.semester_id=st.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id inner join tbl_staff_reg  as ss on r.staff_login_id=ss.login_id order by r.date_fine desc";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_sem_fee($student)
{
$sql="select * from tbl_semester  where semester_id=(select semester_id from tbl_student_reg where login_id='$student') ";
        $db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function check_sem_fee($student)
{
$sql="select * from tbl_fee  where semester_id in (select semester_id from tbl_student_reg where login_id='$student') and student_login_id='$student'";
        $db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_fee_details_all()
{
$sql="select * from tbl_fee as f inner join tbl_student_reg as st on f.student_login_id=st.login_id inner join tbl_semester sem on sem.semester_id=st.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id  order by f.fee_date desc";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;	
}
function select_fee_details_all_by_sem($semester)
{
$sql="select * from tbl_student_reg as st inner join tbl_semester sem on sem.semester_id=st.semester_id inner join tbl_course as c on c.course_id=sem.course_id inner join tbl_department as d on d.department_id=c.department_id where st.semester_id='$semester' and  st.login_id in (select login_id from tbl_login where status='1')";
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
function select_distinct_sem_details()
{
	 $sql="select * from tbl_course c  inner join tbl_department as d on d.department_id=c.department_id";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
}
}
?>