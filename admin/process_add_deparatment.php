<?php
include_once("query.php");
$user=new query();
$user1=new query();
$department_name=$_POST['department_name'];


$res1=$user1->select_department_details($department_name);
      
    
if(mysqli_num_rows($res1)>0)
{
    ?>
                <script type="">
                    alert("department already Exist.. Registration Failed");
                    window.location="department.php";

                </script>
            <?php   

}
else
{
$res=$user->add_department_details($department_name);
if($res==1)
{
header("location:department.php");
}
}
?>