<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>MY COLLEGE CONNECTOR</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Instruction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!--//tags -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
<script type="text/javascript" src="../Ajax/ajax.js"></script>	
	<script type="text/javascript" src="validation.js"></script>	
</head>

<body>
	 <?php 
if(isset($_SESSION['login_id']))
{ 
    ?>
	<!-- header -->
	<div class="header-1">
	<div class="agileits_top_menu">
		<div class="w3l_header_left">
					<div>
				<h3><span class="fa fa-book" aria-hidden="true"></span>MY COLLEGE CONNECTOR</h3></div>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li  ><a href="adminhome.php" class="effect-3">Home</a></li>
								<li><a href="department.php" class="effect-3">Department</a></li>
								<li  ><a href="course.php" class="effect-3">Course</a></li>
	<li class="active"><a href="semester.php" class="effect-3">Semester</a></li>
	<li><a href="subject.php" class="effect-3">Subject</a></li>
	<li><a href="hod.php" class="effect-3">HOD</a></li>
<li><a href="rule.php" class="effect-3">Rule</a></li>
<li><a href="rule_violation.php" class="effect-3">Rule Violation</a></li>
<li><a href="approve_user.php" class="effect-3">Approve User</a></li>
	<li><a href="add_weightage.php" class="effect-3">Weightage</a></li>	

	<li><a href="staff.php" class="effect-3">Staff</a></li>
<li><a href="student.php" class="effect-3">Student</a></li>	
<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Feedback<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="Feedback.php">Parent</a></li>
											<li><a class="hvr-bounce-to-bottom" href="faculty_feedback.php">Faculty</a></li>          
										</ul></li>
<li><a href="feedetails.php" class="effect-3">Fee</a></li>
					<li><a href="report.php" class="effect-3">
								Report</a></li>
								<li><a href="../logout.php" class="effect-3">Logout</a></li>
								
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->
		<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			
			<div class="inner_sec_grids_info_w3ls">

				<div class="clearfix"> </div>
				<div class="w3layouts_mail_grid">

					
						<div class="col-md-6 wthree_contact_left_grid" style="">
						
 <?php
include_once("query.php");
$user=new query();

$res1=$user->select_department();

 ?>
</p>

<form name="f1" method="post" action="process_add_semester.php">
 <table class="table">
    <tr>

    <td colspan="2" align="center"><h4> Add Semester</h4></td></tr><tr>
    	<tr>
    <td>Department </td>
    <td><label>
    <select name="department_name" id="department_name" onchange="display_course()">
      <option value="0">-- Select --</option>
       <?php
	  while($r1=mysqli_fetch_array($res1))
	  {
	   ?>
        <option value="<?php echo $r1['department_id'] ?>"><?php echo $r1['department_name'] ?></option>
        <?php
	  }
	   ?>
      </select>
    </label></td>
  </tr>

  <tr>
    <td>Course Name </td>
    <td><label>
      <select name="course_name" id="course_name"  >
       <option value="0">-- Select --</option>
      </select>
    </label></td>
  </tr>
      <td>Number of Semesters </td>
      <td><label>
      <input type="text" name="semester" id="semester">
      </label></td>
    </tr>
      <tr>
    <td>Fee Per Semester</td>
    <td><label>
      <input type="text" name="fee" id="fee"> 
    </label></td>
  </tr>
   
    <tr>
      <td colspan="2" align="center">
<input style="width:50%" class="operations" type="submit" name="Submit" value="Submit" onClick="return validate_semester()">
     </td>
    </tr>
  </table>



</form>
						</div>
			<div class="col-md-6 wthree_contact_left_grid">
	
    <?php 
     $res22=$user->select_distinct_sem_details();
	$count=1;
 while($r2=mysqli_fetch_array($res22))
  {
 $course_id=$r2["course_id"];
 ?> 
 
 <?php 
    $res2=$user->select_semester_details($course_id);
	$count=1;
	$n=mysqli_num_rows($res2);
	if($n>0)
	{
		?>
		 <table  class="table table-striped">
 <tr class="alert alert-info"><td colspan="6">Department  Name: <?php echo $r2['department_name']?></td></tr>

   <tr class="alert alert-info"><td colspan="6">Course  Name: <?php echo $r2['course_name']?></td></tr>
    <tr class="toptrtbl">

       <th>SL No</th>
        	
       <th>Semester</th>
        <th>Fee Amount</th>
        <th>Delete</th> 
      <th>Update</th>
    </tr>
		<?php
  while($r=mysqli_fetch_array($res2))
  {
  ?>
    <tr  class=ros<?php echo  $count%2; ?>>
    <td><?php echo$count ?></td>
      
      <td><?php echo $r['semester_name'] ?></td>
       <td><?php echo $r['fee_amount'] ?></td>
       <td><a class="btn btn-danger" href="process_delete_semester.php?id=<?php echo $r['semester_id'] ?>">Delete</a></td>
      <td><a class="btn btn-danger" href="process_update_semester.php?id=<?php echo $r['semester_id'] ?>&department_id=<?php echo $r['department_id'] ?>&course_id=<?php echo $r['course_id']?>&fee_amount=<?php echo $r['fee_amount'] ?>">Update</a></td>
       
    </tr>
    <?php
	$count++;
  }
}

}
  ?>
  </table>
						
							
						</div>
						<div class="clearfix"> </div>

				
				</div>


			</div>

		</div>
	</div>
	<!-- //mid-services -->
	<!-- /map -->
	
	<!-- //map -->

	<!-- //inner_content -->
	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>Semester</h3>
				<p>MY COLLEGE CONNECTOR
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				
			</div>
			<div class="col-md-4 footer_grid">
				
			</div>
			<div class="clearfix"> </div>
			<div class="footer_grids">
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
					<div class="footer_bottom1">
						<p>MY COLLEGE CONNECTOR</p>
					</div>
		</div>
	</div>
	<!-- //footer -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Instruction</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g12.jpg" class="img-responsive" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<?php
}
else
{
    header("location:../login.php");
}
?>
</body>
</html>