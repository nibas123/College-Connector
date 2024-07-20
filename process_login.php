<?php
session_start();
include_once("query.php");
$user=new query();
$uname=$_POST["username"];
$pass=md5($_POST["password"]);
$res=$user->checkuser($uname,$pass);
$r=mysqli_fetch_array($res);
	
$_SESSION['uname']=$uname;
	$_SESSION['login_id']=$r[0];

	echo $r[3];
	if($r[3]=="admin" && $r[4]==1)
	{
	header("location:admin/adminhome.php");
	
	}
	
	else if($r[3]=="Teacher" && $r[4]==1)	
	{
		$res2=$user->checkuserhod($r[0]);
		$r2=mysqli_fetch_array($res2);

		if($r2[0]>0)	
	{
	
		header("location:hod/index.php");
	}
	else
	{
		header("location:teacher/index.php");
	}
	}
	
	else if($r[3]=="student" && $r[4]==1 )	
	{
		
		header("location:student/index.php");
	}
    else if($r[3]=="parent" && $r[4]==1)	
	{
		
		header("location:parent/index.php");
	}

else
{
?>
            	<script type="">
            		alert("Invalid User");
            		window.location="login.php";

            	</script>
            <?php 	

}
	
?>