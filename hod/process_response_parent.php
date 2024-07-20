<?php
session_start();
$response=$_POST["response"];
$feedback_id=$_POST["feedback_id"];

//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();

  
  $sql="update tbl_parent_teacher_feedback set response='$response' where feedback_id='$feedback_id'";
       $res2=$db->execute($sql); 
      
          
            if($res2)
            {
              ?>
              <script type="">
          alert("Response is added Successfully");
          window.location="view_feedback.php";

              </script>
            <?php 
        }
?>

