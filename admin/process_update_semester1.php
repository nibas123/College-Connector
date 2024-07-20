<?php
include_once("../dboperation.php");
$db=new dboperation();
$semester_id=$_POST['semester_id'];
$department_id=$_POST['department_id'];
$course_id=$_POST['course_id'];
$fee_amount=$_POST['fee'];
 $sql="update tbl_semester set fee_amount='$fee_amount' where semester_id='$semester_id'";
$res=$db->execute($sql);
  

if($res==1)
{?>
<script type="">
          alert("Update semester Successfully");
          window.location="semester.php";

              </script>
            <?php 
        }
?>