<?php
$course_name=$_POST['course_name'];
$semester=$_POST['semester'];

$s=$semester+1;


 //Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();

        $sql5="select * from tbl_student_reg inner join tbl_login on tbl_student_reg.login_id= tbl_login.login_id where tbl_student_reg.semester_id='$semester' and tbl_login.status='1'";
       $res5=$db->execute($sql5);
       if(mysqli_num_rows($res5))
       {
       while($row5=mysqli_fetch_array($res5))
{
  $student=$row5["login_id"];


    $sql4="select change_date from tbl_sem_change where  sem_change_id=(select max(sem_change_id)  from tbl_sem_change where student_login_id='$student' and semester_id='$semester')";
       $res4=$db->execute($sql4);
      $change_date="";
while($row4=mysqli_fetch_array($res4))
{
  $change_date=$row4["change_date"];
}

$date = date('Y-m-d', strtotime("+6 month",strtotime($change_date)));

$curdate=date("Y-m-d");
if(strtotime($curdate) >= strtotime($date))
{
   $sql="select max(semester_id) as sem from tbl_semester where course_id='$course_name'";
       $res1=$db->execute($sql);
       $semmax="";

while($row=mysqli_fetch_array($res1))
{
$semmax=$row["sem"];
}
if($semester<$semmax)
{
$sql="update tbl_student_reg set semester_id=semester_id+1 where login_id='$student'";
$res=$db->execute($sql);
if($res)
{
    ?>
                <script type="">
                    alert("Student's semester has been changed to Semester "+<?php echo $s; ?>);
                    window.location="change_semester.php";

                </script>
            <?php   

}
}
else
{

$sql="update tbl_student_reg set semester_id=0 where login_id='$student'";
$res=$db->execute($sql);
if($res)
{
    ?>
                <script type="">
                    alert("Student has been completed this Course");
                    window.location="change_semester.php";

                </script>
            <?php   

}
}
}
else
{
 ?>
                <script type="">
                    alert("Semester has been not completed Yet.. It will be completed on or after <?php echo $date ?> ");
                    window.location="change_semester.php";

                </script>
            <?php
}
}
}
else
{
 ?>
                <script type="">
                    alert("No student in this Semester ");
                    window.location="change_semester.php";

                </script>
            <?php
}
?>