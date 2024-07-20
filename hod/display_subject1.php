
			<option value="0">--Select--</option>
									<?php
									$semester=$_GET["semester"];
									
include_once('query.php');
$user=new query();
$res=$user->select_subject_by_id($semester);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["subject_id"]?>"><?php echo $row["subject_name"]?></option>

	<?php
}
echo "|";
?>
<option value="0">--Select--</option>
<?php
$res=$user->select_student_by_sem($semester);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["login_id"]?>"><?php echo $row["first_name"]." ".$row["last_name"]?></option>

	<?php
}
?>