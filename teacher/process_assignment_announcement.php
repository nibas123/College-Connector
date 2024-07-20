<?php
session_start();
$subject_id=$_POST["subject_name"];
$topic=$_POST["topic"];
$out_mark=$_POST["out_mark"];
$end_date=$_POST["end_date"];
$tlogid=$_SESSION['login_id'];
//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
     
        
 $sql="insert into tbl_assignment(subject_id,topic,teacher_login_id,out_of_mark,assign_date) values('$subject_id','$topic','$tlogid','$out_mark','$end_date')";
       $res1=$db->execute($sql);
       if($res1)
       {
?>
<script type="text/javascript">
  
  alert("Assignment Details Has been Added Successfully");
window.location="assignment_announcement.php";
</script>
<?php
       }
       ?>