<?php
include_once("query.php");
$user=new query();
$department_name=$_POST['department_name'];
$course_name=$_POST['course_name'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$re=$user->select_subject_detail($department_name,$course_name,$semester,$subject);
if(mysqli_num_rows($re)>0)
{
    ?>
                <script type="">
                    alert("Subject already Exist..");
                    window.location="subject.php";

                </script>
            <?php   

}
else
{
$res=$user->add_subject_details($semester,$subject);
if($res==1)
{
header("location:subject.php");
}
}
?>