<?php
session_start();
$student=$_POST["student"];
$rule=$_POST["rule"];

//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
     
        
 $sql="insert into tbl_rule_violation( 	student_login_id,rule_id) values('$student','$rule')";
       $res1=$db->execute($sql);
       if($res1)
       {
?>
<script type="text/javascript">
  
  alert("Rule Violation Details Has been Added Successfully");
window.location="rule_violation.php";
</script>
<?php
       }
       ?>