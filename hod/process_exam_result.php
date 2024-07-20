<?php
session_start();
$exam_id=$_POST["topic"];
$mark=$_POST["mark"];
$tlogid=$_SESSION['login_id'];
$student=$_POST["student"];
//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
   $sql5="select * from tbl_exam_result where exam_id='$exam_id' and student_login_id=$student ";
       $res5=$db->execute($sql5);

 
if(mysqli_num_rows($res5)==0)
{
   
        
 $sql="insert into tbl_exam_result(student_login_id,mark,exam_id) values('$student','$mark','$exam_id')";
       $res1=$db->execute($sql);
       if($res1)
       {
?>
<script type="text/javascript">
  
  alert("Exam Result Has been Uploaded Successfully");
window.location="exam_result.php";
</script>
<?php
       }
   }
   else
   {?>
   	<script type="text/javascript">
  
  alert("Exam Result of this student has been already Uploaded");
window.location="exam_result.php";
</script>
   <?php 
 }
       ?>  
