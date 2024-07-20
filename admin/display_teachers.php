
			<option value="0">--Select--</option>
									<?php
									$dpt=$_GET["dpt"];
									
include_once('query.php');
$user=new query();
$res=$user->select_teachers_by_did($dpt);
while($row=mysqli_fetch_array($res))
{
	?>
	<option value="<?php echo $row["login_id"]?>"><?php echo $row["first_name"]." ". $row["last_name"]." ". $row["address"]?></option>

	<?php
}
						?>