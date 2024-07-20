<?php
$login_id=$_GET["login_id"];
$alott_id=$_GET["alott_id"];
//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
$d=date('Y-m-d');
$sql3="select semester_id from tbl_student_reg where login_id ='$login_id' ";
$semester_id="";
        $res3=$db->execute($sql3);
       while($row=mysqli_fetch_array($res3))
       {
$semester_id=$row["semester_id"];
       }


$sql="select * from tbl_attendance where student_login_id ='$login_id' and   DATE(  attendance_date) ='$d' and semester_id='$semester_id'  and alott_id='$alott_id' ";

        $res=$db->execute($sql);
       $c=mysqli_num_rows($res);
  if($c==0)
  {  
 $sql="insert into tbl_attendance(attendance_status,alott_id,student_login_id,semester_id) values('Present','$alott_id','$login_id','$semester_id')";
       $res1=$db->execute($sql); 
    header("location:mark_attendace.php?alot_id=$alott_id");
        }
        else
        {
          $sql="update tbl_attendance set attendance_status='Present' where student_login_id='$login_id' and alott_id='$alott_id' and DATE(attendance_date) ='$d' and semester_id='$semester_id'";
       $res1=$db->execute($sql); 
        header("location:mark_attendace.php?alot_id=$alott_id");
      }

?>




