
<?php
									
$student=$_GET["student"];
include_once('query.php');
$user=new query();
$amt=0;
//echo $student;
$res1=$user->check_sem_fee($student);
$n=mysqli_num_rows($res1);
if($n==0)
{
$res=$user->select_sem_fee($student);
while($row=mysqli_fetch_array($res))
{
$amt=$row['fee_amount'];
}
echo $amt;	
}
else
{
	echo "Already Paid";
}

?>
