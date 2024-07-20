<?php
include_once("query.php");
$user=new query();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$course_name=$_POST['course_name'];
$semester=$_POST['semester'];
$uname=$_POST['uname'];
$password=md5($_POST['password']);
$pname=$_POST['pname'];
$occupation=$_POST['occupation'];
$parent_phone=$_POST['parent_phone'];
$parent_email=$_POST['parent_email'];
$parent_password=md5($_POST['parent_password']);

include_once("dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();

      
    $sql5="select * from tbl_login where username='$uname'";
       $res5=$db->execute($sql5);

    $sql6="select * from tbl_login where username='$parent_email'";
       $res6=$db->execute($sql6);
if(mysqli_num_rows($res5)>0 || mysqli_num_rows($res6)>0)
{
    ?>
                <script type="">
                    alert("Username already Exist.. Registration Failed");
                    window.location="staff_registration.php";

                </script>
            <?php   

}
else
{

$res1=$user->add_student_login($uname,$password);
$l=$user->maxloginid();

while($r=mysqli_fetch_array($l))
{
	 $lid=$r['login_id'];
}


$res=$user->add_student_details($fname,$lname,$gender,$dob,$address,$phone,$email,$lid,$course_name,$semester);
$l1=$user->maxloginid1();

while($r1=mysqli_fetch_array($l1))
{
	 $stud_reg_id=$r1['login_id'];
}
$res3=$user->add_parent_login($parent_email,$parent_password);

$res2=$user->add_parent_details($pname,$occupation,$parent_phone,$parent_email,$lid,$lid);

if($res==1)
{
	?>
                <script type="">
                    alert("Student is registered Successfully");
                    window.location="student_registration.php";

                </script>
            <?php

}
}
?>