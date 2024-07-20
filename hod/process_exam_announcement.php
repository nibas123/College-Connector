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

       $sq="select * from tbl_exam_announce where subject_id='$subject_id' and topic='$topic' and teacher_login_id='$tlogid' and out_of_mark='$out_mark' and exam_date='$exam_date'";
      $res=$db->execute($sq);
      if(mysqli_num_rows($res)>0)
      {

       ?>
                <script type="">
                    alert("Exam is Already Announced.");
                    window.location="exam_announcement.php";

                </script>
            <?php
            }
            else
            {
     
        
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