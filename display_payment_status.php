<h2>Student's Fee payment Details</h2>
	 <table  class="table table-striped">
  
    <tr class="toptrtbl">
     <th>SL No:</th>
           <th>Department</th>
      <th>Course</th>
      <th>Semster</th>
       
      <th>Student</th>
      
      <th>Amount</th>
    </tr>
    <?php 

$res=$user->select_fee_details_all();
	$count1=1;
  while($r4=mysqli_fetch_array($res))
  {
  ?>
  
    <tr>
     <td><?php echo $count1 ?></td>
           <td><?php echo $r4['department_name'] ?></td>
      <td><?php echo $r4['course_name'] ?></td>
      <td><?php echo $r4['semester_name'] ?></td>
    
    
      <td><?php echo $r4['first_name']." ".$r4['last_name'] ?></td>
      <td><?php echo $r4['fee_amount']?></td>
     
      
    </tr>
    <?php
	$count1++;
  }
  ?>
  </table>