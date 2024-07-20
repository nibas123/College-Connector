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
<li   class="active"><a href="rule.php" class="effect-3">Rule</a></li>
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

			
						<div class="col-md-6 wthree_contact_left_grid" style="">
							<h3 class="heading-agileinfo">Rule<span>Add Rule Here</span></h3>
					 <?php
include_once("query.php");
$user=new query();
$res=$user->select_rule();
 ?>
</p>

<form name="f1" method="post" action="process_add_rule.php">
    <table>
    <tr>
    <td colspan="2" align="center"></td></tr><tr>
      <td>Rule Name </td>
      <td><label>
        <input name="rule_name" type="text" id="rule_name">
      </label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="description" id="description"></textarea></td>
    </tr>
    <tr>
      <td>Fine</td>
      <td><label>
        <input name="fine" type="text" id="fine">
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="Submit"  class="operations" onClick="return validate_rules()">
     </td>
    </tr>
  </table>



</form>
							
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
	<table class="table">
   <tr>
       <th>Sl No</th>
      <th>Rule Name</th>
      <th>Description</th>
      <th>Fine</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
    <?php 
	$count=1;
  while($r=mysqli_fetch_array($res))
  {
  ?>
    <tr>
    <tr>
      <td width="40"><?php echo  $count ?></td>
      <td><?php echo $r['rule_name'] ?></td>
      <td><?php echo $r['description'] ?></td>
      <td><?php echo $r['fine'] ?></td>
      <td><a class="operations" href="process_delete_rule.php?id=<?php echo $r['rule_id']; ?>">Delete</a></td>
      <td><a class="operations" href="process_update_rule.php?id=<?php echo $r['rule_id']; ?>">Update</a></td>
    </tr>
    <?php
	$count++;
  }
  ?>
  </table>						
							
						</div>
						<div class="clearfix"> </div>

					</form>
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
				<h3>Rule</h3>
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