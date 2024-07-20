<?php
session_start();
 //Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
     $slogid=$_SESSION['login_id'];
        $date1=$_GET["date1"];
         $date2=$_GET["date2"];
   $sql="select at.*,st.first_name,st.last_name,sem.*  from tbl_attendance as at inner join tbl_alott_staff as a on at.alott_id=a.alott_id inner join tbl_subject s on a.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_student_reg as st on at.student_login_id=st.login_id  where at.student_login_id=$slogid and date(at.attendance_date) between '$date1' and '$date2'";
       $res1=$db->execute($sql);

?>	
			

  
<table  class="table table-striped">
    <tr>
      <tr class="alert alert-info">
       <th>SL No</th>
      <th>Name </th>
      <th>Attendance Date </th>
      <th>Semester</th>
      <th>Status</th>
    </tr>
	<?php
	$count1=1;
	while($r1=mysqli_fetch_array($res1))
	{
	?>

    <tr  class=ros<?php echo  $count1%2; ?>>
     <td ><?php echo $count1++; ?></td>
      <td ><?php echo ucwords($r1['first_name']." ".$r1['last_name']) ?></td>
      
      <td><?php echo $r1['attendance_date'] ?></td>
    <td><?php echo $r1['semester_name'] ?></td>
   
   <td><?php echo $r1["attendance_status"] ?></td>
        
    </tr>
	<?php
	}
	?>
  </table>