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
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet"> <link href="../jquery/jquery-ui.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="../jquery/jquery.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="../Ajax/ajax.js"></script>
<script>
$(function() {
 

	$( "#fdate" ).datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true,
changeYear: true,maxDate:0 });
	$( "#tdate" ).datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true,
changeYear: true ,maxDate:0 });
	
  });</script>	
		
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
								<li><a href="index.php" class="effect-3">Home</a></li>
								<li   class="active"><a href="attendance.php" class="effect-3">Attendance</a></li>
								<li><a href="exam_announcement.php" class="effect-3">Exam </a></li>
								<li><a href="assignment_announcement.php" class="effect-3">Assignment</a></li>
<li><a href="exam_result.php" class="effect-3">Exam Result</a></li>
<li><a href="assignement_result.php" class="effect-3">Assignment Result</a></li>
<li><a href="note.php" class="effect-3">Note</a></li>

<li><a href="rule.php" class="effect-3">Rule</a></li>
<li><a href="rule_violation.php" class="effect-3">Rule Violation</a></li>
<li><a href="fee.php" class="effect-3">Fee</a></li>
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

					
			
							
							<div  class="col-md-5"  style="margin: 10px;">
<h2>Attendance Status  By Date</h2>
								From Date <input type="text" name="date1" id="fdate">
To Date <input type="text" name="date2"  id="tdate">
<input type="button" name="" value="submit" onclick="display_attendance()" class="btn btn-info"></div>
<div  class="col-md-5 "  style="margin: 10px;">
<h2>Attendance Status  By Category</h2>
<?php
$login_id=$_SESSION['login_id'];
include_once("query.php");
$user=new query();

$res1=$user->select_sem_by_course($login_id);


?>	
<form name="f1" method="post" action="process_notes.php" enctype="multipart/form-data">
			
Semester
    <select name="semester" id="semester" onchange="display_attendance_by_sem()">
      <option value="0">-- Select --</option>
       <?php
	  while($r1=mysqli_fetch_array($res1))
	  {
	   ?>
        <option value="<?php echo $r1['semester_id'] ?>"><?php echo $r1['semester_name'] ?></option>
        <?php
	  }
	   ?>
      </select>

</form>
							</div>
	<div class="clearfix"> </div>
<div id="result">
	<?php //Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
     $slogid=$_SESSION['login_id'];
        
  $sql="select * from tbl_attendance as at inner join tbl_alott_staff as a on at.alott_id=a.alott_id inner join tbl_subject s on a.subject_id=s.subject_id inner join tbl_semester sem on sem.semester_id=s.semester_id inner join tbl_student_reg as st on at.student_login_id=st.login_id  where at.student_login_id=$slogid";
       $res1=$db->execute($sql);

?>	
			

  
<table  class="table table-striped">
    <tr>
   <tr class="alert alert-info">
       <th>SL No</th>
      <th>Name </th>
      <th>Attendance Date </th>
      <th>Semester</th>
      <th>Status</th>
    </tr>
	<?php
	$count1=1;
	while($r1=mysqli_fetch_array($res1))
	{
	?>

    <tr  class=ros<?php echo  $count1%2; ?>>
     <td ><?php echo $count1++; ?></td>
      <td ><?php echo ucwords($r1['first_name']." ".$r1['last_name']) ?></td>
      
      <td><?php echo $r1['attendance_date'] ?></td>
    <td><?php echo $r1['semester_name'] ?></td>
   
   <td><?php echo $r1["attendance_status"] ?></td>
        
    </tr>
	<?php
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
				<h3>Attendance</h3>
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

	<?php
}
else
{
    header("location:../login.php");
}
?>
</body>
</html>