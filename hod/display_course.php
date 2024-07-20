
			<option value="0">--Select--</option>
									<?php
									$department_name=$_GET["department_name"];
									
include_once('query.php');
$user=new query();
$res=$user->select_course_by_id($department_name);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["course_id"]?>"><?php echo $row["course_name"]?></option>

	<?php
}


									?>