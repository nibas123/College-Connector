<h2>Student's Fee payment Details</h2>
	 <table  class="table table-striped">
  
    <tr class="toptrtbl">
     <th>SL No:</th>
           <th>Department</th>
      <th>Course</th>
      <th>Semster</th>
       
      <th>Student</th>
      
      <th>Amount</th>
       <th>Status</th>
    </tr>
    <?php 
include_once('query.php');
$user=new query();
$semester=$_GET["semester"];
$res=$user->select_fee_details_all_by_sem($semester);
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
      <td>
        <?php 
        $res2=$user->select_fee_status_by_sem( $r4['login_id'],$semester);
  $n=mysqli_num_rows( $res2);
  if($n==0)
  {
    ?>
    <div class="alert alert-danger">Not Paid</div>
    <?php
  }
  else
  {?>
    <div class="alert alert-info">Paid</div>
<?php  }
?>
      </td>
     
      
    </tr>
    <?php
	$count1++;
  }
  ?>
  </table>