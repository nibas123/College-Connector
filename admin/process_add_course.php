<?php
include_once("query.php");
$user=new query();
$user1=new query();
$course_name=$_POST['course_name'];
echo $dpt=$_POST['txtdpt'];

$duration=$_POST['duration'];
$res1=$user1->select_course_details($course_name,$duration,$dpt);
      
    
if(mysqli_num_rows($res1)>0)
{
    ?>
                <script type="">
                    alert("course already Exist.. Registration Failed");
                    window.location="course.php";

                </script>
            <?php   

}
else
{
$res=$user->add_course_details($course_name,$duration,$dpt);

if($res==1)
{
header("location:course.php");
}
}
?>