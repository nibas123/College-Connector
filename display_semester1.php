
			<option value="0">--Select--</option>
									<?php
									$course_name=$_GET["course_name"];
									
include_once('query.php');
$user=new query();
$res=$user->select_semester_by_id($course_name);
$count=1;
while($row=mysqli_fetch_array($res))
{
	if($count%2==1)
	{
	?>
	<option value="<?php echo $row["semester_id"]?>"><?php echo $row["semester_name"]?></option>

	<?php

}
$count++;
}


									?>