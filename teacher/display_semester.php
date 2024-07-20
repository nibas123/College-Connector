
			<option value="0">--Select--</option>
									<?php
									$course_name=$_GET["course_name"];
									
include_once('query.php');
$user=new query();
$res=$user->select_semester_by_id($course_name);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["semester_id"]?>"><?php echo $row["semester_name"]?></option>

	<?php
}


									?>