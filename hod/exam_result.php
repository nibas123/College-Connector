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
 <link href="../jquery/jquery-ui.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="../jquery/jquery.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui.min.js"></script>
<script>
$(function() {
 

	$( "#exam_date" ).datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true,
changeYear: true, minDate:'0'});

	
  });</script>	
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
				<h3><span class="fa fa-book" aria-hidden="true"></span> MY COLLEGE CONNECTOR</h3></div>
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
								<li><a href="index.php" class="effect-3">Home</a></li>
		<li><a href="assign_teacher.php" class="effect-3">Assign Teacher</a></li>
		<li><a href="attendance.php" class="effect-3">Attendance</a></li>
								<li><a href="exam_announcement.php" class="effect-3">Exam</a></li>
								<li><a href="assignment_announcement.php" class="effect-3">Assignment</a></li>
<li class="active"><a href="exam_result.php" class="effect-3">Exam Result</a></li>
<li><a href="assignement_result.php" class="effect-3">Assignment Result</a></li>
<li><a href="note.php" class="effect-3">Note</a></li>
<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Feedback<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="Feedback.php">Feedback</a></li>
											<li><a class="hvr-bounce-to-bottom" href="view_feedback.php">view parents feedback</a></li>          
										</ul></li>

<li><a href="change_semester.php" class="effect-3">Change Semester</a></li>

								<li><a href="rule_violation.php" class="effect-3">Rule Violation</a></li>

								<li><a href="report.php" class="effect-3">Report</a></li>
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

					
						<div class="col-md-4 wthree_contact_left_grid" style="">
							<h2>Exam Result</h2>
	<?php
$login_id=$_SESSION['login_id'];
include_once("query.php");
$user=new query();

$res1=$user->select_department_by_logid($login_id);


?>	
<form name="f1" method="post" action="process_exam_result.php" enctype="multipart/form-data">
<p align="left" style="margin-left: 20">&nbsp;</p>				
 <table>
  <tr>
    <td colspan="2" align="center"> </td></tr>
    
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
      <select name="course_name" id="course_name"   onchange="display_semester()">
       <option value="0">-- Select --</option>
      </select>
    </label></td>
  </tr>
  <tr>
      <td>Semester Name </td>
      <td><label>
<select name="semester" id="semester" onchange="display_subject1()">
       <option value="0">-- Select --</option>
       
       </select>
      </label></td>
    </tr>
  <tr>
  	   <td>Student Name </td>
      <td><label>
<select name="student" id="student">
       <option value="0">-- Select --</option>
       
       </select>
      </label></td>
    </tr>
  <tr>
    <td>Subject Name </td>
    <td><label>
      <select name="subject_name" id="subject_name" onchange="display_topic()">
	  <option value="0">..select..</option>
	 
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Topic</td>
    <td><select name="topic" id="topic" onchange="display_out_of_mark()">
    	<option value="0">--Select--</option>
    </select></td>
  </tr>
  <tr>
    <td>Out of Mark</td>
    <td><input type="text" name="out_mark" id="out_mark" readonly=""></td>
  </tr>
  <tr>
    <td>Mark</td>
    <td><input type="text" name="mark" id="mark"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><label>
      <input type="submit" name="Submit"  value="submit" class="operations" onClick="return validate_exam()">
    </label></td>
    </tr>
</table>
</form>
						</div>
						<div class="col-md-7 wthree_contact_left_grid">
	 <table  class="table table-striped">
  
    <tr class="toptrtbl">
     <th>SL No:</th>
      
      <th>Course</th>
      <th>Semster</th>
      <th>Subject</th>
      <th>Topic</th>
      <th>Exam Date</th>
      <th>Student</th>
      <th>Mark</th>
      <th>out of Mark</th>
      <th>Delete</th>
    </tr>
    <?php 

$res=$user->select_exam_result_by_login_id($login_id);
	$count1=1;
  while($r4=mysqli_fetch_array($res))
  {
  ?>
  
    <tr>
     <td><?php echo $count1 ?></td>
      
      <td><?php echo $r4['course_name'] ?></td>
      <td><?php echo $r4['semester_name'] ?></td>
      <td><?php echo $r4['subject_name'] ?></td>
     <td><?php echo $r4['topic'] ?></td>
     <td><?php echo $r4['exam_date'] ?></td>
      <td><?php echo $r4['first_name']." ".$r4['last_name'] ?></td>
      <td><?php echo $r4['mark']?></td>
      <td><?php echo $r4['out_of_mark']?></td> 
      <td><a class="btn btn-primary" href="process_delete_mark.php?id=<?php echo $r4['result_id'] ?>">Delete</a></td>
    </tr>
    <?php
	$count1++;
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
				<h3>Exam Result</h3>
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