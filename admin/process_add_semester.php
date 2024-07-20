<?php
include_once("query.php");
$user=new query();
$semester=$_POST['semester'];

function numberToRoman($num)  
{ 
    // Be sure to convert the given parameter into an integer
    $n = intval($num);
    $result = ''; 
 
    // Declare a lookup array that we will use to traverse the number: 
    $lookup = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ); 
 
    foreach ($lookup as $roman => $value)  
    {
        // Look for number of matches
        $matches = intval($n / $value); 
 
        // Concatenate characters
        $result .= str_repeat($roman, $matches); 
 
        // Substract that from the number 
        $n = $n % $value; 
    } 

    return $result; 
} 

for($i=1; $i<=$semester;$i++)
{
	$course_id=$_POST['course_name'];
$fee=$_POST['fee'];
$roman= numberToRoman($i);
$semester_name="Semester ".$roman;
$res1=$user->select_semester_details_sem($semester_name,$course_id);
 $n=mysqli_num_rows($res1);
if($n==0)
{
$res=$user->add_semester_details($semester_name,$course_id,$fee);
if($res==1)
{
header("location:semester.php");
}
}
else
{
	?>
                <script type="">
                    alert("Semester is already exit");
                    window.location="semester.php";

                </script>
            <?php

}


}



?>