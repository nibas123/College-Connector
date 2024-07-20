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
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
<script type="text/javascript" src="Ajax/ajax.js"></script>
  <link href="jquery/jquery-ui.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
<script>
$(function() {
 

	$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true,
changeYear: true,maxDate:0  });

	
  });</script>
		
</head>

<body>
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
								<li ><a href="index.php" class="effect-3">Home</a></li>
					
								<li ><a href="login.php" class="effect-3">Login</a></li>
								<li class="active"><a href="student_registration.php" class="effect-3">Student Registration</a></li>
								<li><a href="staff_registration.php" class="effect-3">Staff Registration</a></li>
								
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
				<h3 class="heading-agileinfo">Student Registration<span>Register Here</span></h3>
			<div class="inner_sec_grids_info_w3ls">

				<div class="clearfix"> </div>
				<div class="w3layouts_mail_grid">

					<form name="f1" action="process_student_register.php" method="post" onSubmit=" return check()">
						<div class="col-md-6 wthree_contact_left_grid">
						

<?php
include_once('query.php');
$user=new query();
$res=$user->select_department();

?>

 <table class="table">

  <tr>
    <td>First Name </td>
    <td>
      <label>
        <input type="text" name="fname" id="fname" />
        </label>       </td>
  </tr>
  <tr>
    <td>Last Name </td>
    <td>
      <label>
        <input type="text" name="lname" id="lname" />
        </label>       </td>
  </tr>
 <tr>
    <td>Gender</td>
    <td>
      <label>
        <input name="gender" type="radio" value="male" />
        male</label>
      <label>
      <input name="gender" type="radio" value="female" />
      female</label>    </td>
  </tr>

  <tr>
    <td>Date of Birth </td>
    <td>
      <label><input type="text" id="datepicker" name="dob"></label>       </td>
  </tr>
  <tr>
    <td height="54">Address</td>
    <td>
      <label>
        <textarea name="address" id="address"></textarea>
        </label>     </td>
  </tr>

  <tr>
    <td>Department </td>
    <td><label>
    <select name="department_name" id="department_name" onchange="display_course()">
      <option value="0">-- Select --</option>
       <?php
	  while($r1=mysqli_fetch_array($res))
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
      <select name="course_name" id="course_name"  onchange="display_semester1()">
       <option value="0">-- Select --</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Semester Name </td>
    <td><label>
      <select name="semester" id="semester">
         <option value="0">-- Select --</option>
       
      </select>
    </label></td>
  </tr>
</table>
	
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<table>
    <tr>
    <td>Phone</td>
    <td>
      <label>
        <input type="text" name="phone" id="phone"/>
        </label>      </td>
  </tr>
<tr>
    <td>E-Mail ID </td>
    <td>
      <label>
        <input type="text" name="email" id="email"/>
        </label>      </td>
  </tr>
  <tr>
    <td>User Name </td>
    <td>
      <label>
        <input type="text" name="uname" id="uname"/>
        </label>       </td>
  </tr>
  <tr>
    <td>Pass Word </td>
    <td>
      <label>
        <input type="password" name="password" id="password"/>
        </label>      </td>
  </tr>
  <tr>
    <td>Confirm Pass Word </td>
    <td>
      <label>
        <input type="password" name="cpassword" id="cpassword"/>
        </label>      </td>
  </tr>
  <tr>
    <td colspan="2" align="center">Parent Details </td>
  </tr>
  <tr>
    <td> Parent Name</td>
    <td>
      <label>
        <input type="text" name="pname" id="pname"/>
        </label>    </td>
  </tr>

  <tr>
    <td>Occupation</td>
    <td>
      <label>
        <input type="text" name="occupation" id="occupation" />
        </label>    </td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>
      <label>
        <input type="text" name="parent_phone" id="parent_phone" />
        </label>    </td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td>
      <label>
        <input type="text" name="parent_email" id="parent_email" />
        </label>    </td>
  </tr>
  <tr>
    <td height="38">Password </td>
    <td><label>
      <input type="password" id="parent_password" name="parent_password" />
    </label></td>
  </tr>
  <tr>
    <td>Confirm PassWord </td>
    <td>
      <label>
        <input type="password" name="pcpassword" id="pcpassword"/>
        </label>      </td>
  </tr>
  </table>							
							
						</div>
						<div class="clearfix"> </div>
<div style="margin: auto;width:30%;"><input type="submit" value="Submit" onclick="return validate_student()"></div>
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
				<h3>Student Registration</h3>
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
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>