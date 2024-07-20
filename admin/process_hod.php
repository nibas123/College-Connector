<?php
include_once("query.php");
$user=new query();
$department_id=$_POST['txtdpt'];
$teacher=$_POST['teacher'];
$res1=$user->check_hod_teacher($teacher);
echo $n1=mysqli_num_rows($res1);
$res2=$user->check_hod_department($department_id);
echo $n2=mysqli_num_rows($res2);
if($n1==0 && $n2==0)
{
$res=$user->add_hod($department_id,$teacher);
if($res==1)
{
header("location:hod.php");
}
}	
else
{
        	?>
            	<script type="">
            alert("Already Exist");
            window.location="hod.php";

            	</script>
            <?php 
        }

?>