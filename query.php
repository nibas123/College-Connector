<?php
include_once("dboperation.php");
class query
{
	
	function add_student_details($fname,$lname,$gender,$dob,$address,$phone,$email,$lid,$course_name,$semester)
	{
	 $sql="insert into tbl_student_reg(first_name,last_name,gender,dob,address,phone,email,login_id,course_id,semester_id)values('$fname','$lname','$gender','$dob','$address',$phone,'$email',$lid,$course_name,$semester)";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_student_login($uname,$password)
	{
	  
	   $sql="insert into tbl_login(username,password,usertype)values('$uname','$password','student')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_parent_details($pname,$occupation,$parent_phone,$parent_email,$lid,$stud_reg_id)
	{
	  
	   $sql="insert into tbl_parent_reg(name,occupation,phone,email,login_id,student_login_id)values('$pname','$occupation',$parent_phone,'$parent_email',$lid+1,$stud_reg_id)";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_parent_login($uname,$password)
	{
	  
	   $sql="insert into tbl_login(username,password,usertype)values('$uname','$password','parent')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	
function add_stafft_details($fname,$lname,$gender,$dob,$address,$phone,$email,$dpt,$qualification,$doj,$lid,$filename,$q)
	{
	 $sql="insert into tbl_staff_reg(first_name,last_name,gender,dob,address,phone,email,department_id,educational_qualification,date_of_join,login_id,certificate,qualification)values('$fname','$lname','$gender','$dob','$address',$phone,'$email',$dpt,'$qualification','$doj',$lid,'$filename','$q')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function add_staff_login($uname,$password,$designation)
	{
	  
	   $sql="insert into tbl_login(username,password,usertype)values('$uname','$password','$designation')";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function checkuser($uname,$pwd)
	{
		$sql="select * from tbl_login where username='$uname' and password='$pwd'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
		
	}
	function maxloginid()
	{
		 $sql="select login_id from tbl_login where login_id=(select MAX(login_id) from tbl_login) ";
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
	function select_course_by_id($department_id)
	{
$sql="select * from tbl_course where department_id='$department_id'";
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
	function select_department()
	{
	$sql="select * from tbl_department";
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
	function maxloginid1()
	{
		 $sql="select stud_reg_id  from tbl_student_reg where stud_reg_id =(select MAX(stud_reg_id) from tbl_student_reg) ";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function select_rules()
	{
	  
	   $sql="select * from tbl_rules";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
	function checkuserhod($logid)
	{
echo $sql="select count(*) as c from tbl_hod where teacher_login_id='$logid'";
		$db=new dboperation();
		$res=$db->execute($sql);
		return $res;
	}
}

?>