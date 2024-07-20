<?php
include_once("query.php");
$user=new query();
$qual="";
foreach($_POST['q1'] as $selected){
$qual=$qual.$selected.",";
}
$q = rtrim($qual,',');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$department=$_POST['department_name'];
$qualification=$_POST['qualification'];
$doj=$_POST['doj'];
$uname=$_POST['uname'];
$password=md5($_POST['password']);
$desi='Teacher';
include_once("dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();

      
    $sql5="select * from tbl_login where username='$uname'";
       $res5=$db->execute($sql5);
if(mysqli_num_rows($res5)>0)
{
    ?>
                <script type="">
                    alert("Username already Exist.. Registration Failed");
                    window.location="staff_registration.php";

                </script>
            <?php   

}
else
{

  $i = 0; 
    $dir = 'certificate/';
    //Code to get total number of files in Photo_uploads folder
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
$target_dir = "certificate/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $filename=$i.".".$imageFileType;
move_uploaded_file($_FILES["file"]["tmp_name"], "certificate/".$filename);
$res1=$user->add_staff_login($uname,$password,$desi);

$l=$user->maxloginid();

while($r=mysqli_fetch_array($l))
{
	$lid=$r['login_id'];
}


$res=$user->add_stafft_details($fname,$lname,$gender,$dob,$address,$phone,$email,$department,$qualification,$doj,$lid,$filename,$q);


if($res==1)
{
    ?>
                <script type="">
                    alert("Staff is registered Successfully");
                    window.location="staff_registration.php";

                </script>
            <?php   

}
}
?>