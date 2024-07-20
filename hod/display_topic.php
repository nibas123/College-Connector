<?php 
session_start();
$login_id=$_SESSION['login_id'];
 ?>
			<option value="0">--Select--</option>
									<?php
									$subject_name=$_GET["subject_name"];
									
include_once('query.php');
$user=new query();
$res=$user->select_topic_by_id($subject_name,$login_id);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["exam_id"]?>"><?php echo $row["topic"]?></option>

	<?php
}


									?>