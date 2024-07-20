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
								<li><a href="adminhome.php" class="effect-3">Home</a></li>
								<li><a href="department.php" class="effect-3">Department</a></li>
								<li><a href="course.php" class="effect-3">Course</a></li>
	<li><a href="semester.php" class="effect-3">Semester</a></li>
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
<li class="active"><a href="feedetails.php" class="effect-3">Fee</a></li>
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

					
						<div class="col-md-5 wthree_contact_left_grid" style="">
							<h2>Fees Details</h2>
	<?php
$login_id=$_SESSION['login_id'];
include_once("query.php");
$user=new query();

$res1=$user->select_department();
$res2=$user->select_rule();

?>	
<form name="f1" method="post" action="process_fee_student.php" enctype="multipart/form-data">
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
<select name="semester" id="semester" onchange="display_student()">
       <option value="0">-- Select --</option>
       
       </select>
      </label></td>
    </tr>
  <tr>
  	   <td>Student Name </td>
      <td><label>
<select name="student" id="student" onchange="display_fee()">
       <option value="0">-- Select --</option>
       
       </select>
      </label></td>
    </tr>
  
  
  <tr>
  	   <td>Amount </td>
      <td><label>
<input type="text" name="amount" id="amount" readonly="readonly">
      </label></td>
    </tr>
  
  <tr>
    <td colspan="2" align="center"><label>
      <input type="submit" name="Submit"  value="submit" class="operations" onClick="return validate_fee()">
    </label></td>
    </tr>
</table>
</form>
						</div>
						
						<div class="col-md-7 wthree_contact_left_grid">
							<a class="btn btn-info" href="payment_status.php">Click here to Display Student's Fee Payment Status</a>
							<h2>Student's Fee payment Details</h2>
	 <table  class="table table-striped">
  
    <tr class="toptrtbl">
     <th>SL No:</th>
           <th>Department</th>
      <th>Course</th>
      <th>Semster</th>
       
      <th>Student</th>
      
      <th>Amount</th>
    </tr>
    <?php 

$res=$user->select_fee_details_all();
	$count1=1;
  while($r4=mysqli_fetch_array($res))
  {
  ?>
  
    <tr>
     <td><?php echo $count1 ?></td>
           <td><?php echo $r4['department_name'] ?></td>
      <td><?php echo $r4['course_name'] ?></td>
      <td><?php echo $r4['semester_name'] ?></td>
    
    
      <td><?php echo $r4['first_name']." ".$r4['last_name'] ?></td>
      <td><?php echo $r4['fee_amount']?></td>
     
      
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
				<h3>Fee Details</h3>
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