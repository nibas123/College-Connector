<?php
include_once("query.php");
$user=new query();
$staff_name=$_POST['staff_name'];
$course_name=$_POST['course_name'];
$day=$_POST['day'];
$subject_name=$_POST['subject_name'];
$time_period=$_POST['time_period'];
$res1=$user->assign_teacher_check1($staff_name,$day,$time_period);
echo $check1=mysqli_num_rows($res1);
$res2=$user->assign_teacher_check2($day,$time_period);
echo $check2=mysqli_num_rows($res2);
if($check1==0 && $check2==0)
{
$res3=$user->assign_teacher_details($staff_name,$subject_name,$time_period,$day);
if($res3==1)
{
header("location:assign_teacher.php");
}
}
else
{
	?>
	<script type="text/javascript">
		alert("Already Assigned");
		window.location='assign_teacher.php';
	</script>
	<?php
}
?>