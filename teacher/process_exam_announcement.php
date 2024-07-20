<?php
session_start();
$subject_id=$_POST["subject_name"];
$topic=$_POST["topic"];
$out_mark=$_POST["out_mark"];
$exam_date=$_POST["exam_date"];
$tlogid=$_SESSION['login_id'];
//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
     
        
 $sql="insert into tbl_exam_announce(subject_id,topic,teacher_login_id,out_of_mark,exam_date) values('$subject_id','$topic','$tlogid','$out_mark','$exam_date')";
       $res1=$db->execute($sql);
       if($res1)
       {
?>
<script type="text/javascript">
  
  alert("Exam Details Has been Uploaded Successfully");
window.location="exam_announcement.php";
</script>
<?php
       }
       ?>