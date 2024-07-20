
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
echo "|";
?>
<option value="0">--Select--</option>
<?php
$res1=$user->select_teachers_by_did($department_name);
while($row1=mysqli_fetch_array($res1))
{
	?>
	<option value="<?php echo $row1["login_id"]?>"><?php echo $row1["first_name"]." ". $row1["last_name"]." ". $row1["address"]?></option>

	<?php
}



			

									?>