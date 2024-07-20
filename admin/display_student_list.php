
			<?php
$count=1;
$sem=$_GET["semester"];
include_once("query.php");
$user=new query();
$res1=$user->select_student_details_approved_by_sem($sem);
 ?>


   
<div id="list">
 <div align="center"><h2> Student List </h2></div>
 <?php $num1=mysqli_num_rows($res1);
 if($num1>0)
 {
 
  ?>

    <table  class="table table-striped">
    <tr>
      <tr class="toptrtbl">
       <th>SL No</th>
      <th>Name</th>
      <th >Gender</th>
      <th>Date of Birth </th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email ID </th>
       <th>Department Name </th>
      <th>Course Name </th>
      <th>Semester Name </th>
 
    </tr>
	<?php
	$count1=1;
	while($r1=mysqli_fetch_array($res1))
	{
	?>

    <tr  class=ros<?php echo  $count1%2; ?>>
     <td ><?php echo $count1++; ?></td>
      <td ><?php echo ucwords($r1['first_name']." ".$r1['last_name']) ?></td>
      <td><?php echo $r1['gender'] ?></td>
      <td><?php echo $r1['dob'] ?></td>
      <td><?php echo $r1['address'] ?></td>
      <td><?php echo $r1['phone'] ?></td>
      <td><?php echo $r1['email'] ?></td>
      <td><?php echo $r1['department_name'] ?></td>
      <td><?php echo $r1['course_name'] ?></td>
      <td><?php echo $r1['semester_name'] ?></td>
      
     
    </tr>
	<?php
	}
	?>
  </table>
</form>
<?php
$count1++;
}
else
{
?>
<h3 style="padding: 20px; margin: 10px" class="btn-danger">No Student to be approved</h3><?php	
}
 ?></div>