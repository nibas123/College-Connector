<?php
session_start();
$semester=$_POST["semester"];
$student=$_POST["student"];

//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();

  
  $sql="insert into tbl_fee(student_login_id,semester_id) values('$student','$semester')";
       $res2=$db->execute($sql); 
      
          
            if($res2)
            {
              ?>
              <script type="">
          alert("Fee is added Successfully");
          window.location="feedetails.php";

              </script>
            <?php 
        }
?>

