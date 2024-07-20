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
								<li ><a href="index.php" class="effect-3">Home</a></li>
								<li><a href="attendance.php" class="effect-3">Attendance</a></li>
								<li><a href="exam_announcement.php" class="effect-3">Exam </a></li>
								<li><a href="assignment_announcement.php" class="effect-3">Assignment</a></li>
<li><a href="exam_result.php" class="effect-3">Exam Result</a></li>
<li><a href="assignement_result.php" class="effect-3">Assignment Result</a></li>

<li><a href="rule.php" class="effect-3">Rule</a></li>
<li><a href="rule_violation.php" class="effect-3">Rule Violation</a></li>
<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Feedback<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a class="hvr-bounce-to-bottom" href="Feedback.php">Feedback</a></li>
                      <li><a class="hvr-bounce-to-bottom" href="add_teacher_feedback.php">Teachers feedback</a></li>          
                    </ul></li>
<li  class="active"><a href="report.php" class="effect-3">Report</a></li>
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
<?php 
include_once("query.php");
$user=new query();
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
      $slogid=$_SESSION['login_id'];
$student= $slogid;
$res=$user->select_weightage();
	$count=1;
	$exam_weightage=0;
	$attendance_weightage=0;
	$assignment_weightage=0;
	$rule_weightage=0;
  while($r=mysqli_fetch_array($res))
  {
  if($r["type"]=="Examination")	
  {
$exam_weightage=$r["weightage"];
  }
   if($r["type"]=="Attendance")	
  {
$attendance_weightage=$r["weightage"];
  }
  if($r["type"]=="Assignment")	
  {
$assignment_weightage=$r["weightage"];
  }
  if($r["type"]=="Rule")	
  {
$rule_weightage=$r["weightage"];
  }



  }

        
 $sql="select count(*)   as c,sum(er.mark) as summark,sum(ea.out_of_mark) as totalmark from  tbl_exam_result as er inner join  tbl_exam_announce as ea on er.exam_id=ea.exam_id where er.student_login_id=(select student_login_id from tbl_parent_reg where login_id=$slogid)";
       $res1=$db->execute($sql);
       $examcount=0;
       $summark=0;
       $totalmark=0;
        while($row1=mysqli_fetch_array($res1))
  {
  	  $examcount=$row1["c"];
  	  $summark=$row1["summark"];
  	  $totalmark=$row1["totalmark"];
  }
  if($summark>0)
            {
           $percentagemark=$summark/$totalmark*100;
            }
            else
            {
             $percentagemark=0;   
            }
       $sql="select count(*)   as c,sum(er.mark) as summark,sum(ea.out_of_mark) as totalmark from  tbl_assignment_result as er inner join  tbl_assignment as ea on er.assign_id=ea.assign_id where er.student_login_id=(select student_login_id from tbl_parent_reg where login_id=$slogid)";
       $res1=$db->execute($sql);
       $assignment_count=0;
       $assignment_summark=0;
       $assignment_totalmark=0;
        while($row1=mysqli_fetch_array($res1))
  {
  	  $assignment_count=$row1["c"];
  	  $assignment_summark=$row1["summark"];
  	  $assignment_totalmark=$row1["totalmark"];
  }
  if($assignment_summark>0)
            {
           $assinment_percentagemark=$assignment_summark/$assignment_totalmark*100;
            }
            else
            {
             $assinment_percentagemark=0;   
            }
       
        $sql5="select count(*) as c3 from  tbl_attendance as a  where a.student_login_id=(select student_login_id from tbl_parent_reg where login_id=$slogid) and a.attendance_status='Present'";
        $res5=$db->execute($sql5);
             
           while($row5=mysqli_fetch_array($res5))
  {
           $totalpresent= $row5["c3"];
          }
 $sql4="select count(*) as c4 from  tbl_attendance as a  where a.student_login_id=(select student_login_id from tbl_parent_reg where login_id=$slogid) and a.attendance_status='Absent'";
        $res4=$db->execute($sql4);
             
           while($row4=mysqli_fetch_array($res4))
  {
            $totalabsent= $row4["c4"];
          }

       $totalperiod=$totalabsent+$totalpresent;    
          if($totalperiod>0)
          {
           $attendance_percentage=$totalpresent/$totalperiod*100;
          }
          else
          {
           $attendance_percentage=0;   
          }
           $attendance_percentage;
    $sql6="select count(*) as c4, sum(r.fine) as total_rules_fine  from   tbl_rule_violation as rv inner join tbl_rules as r on rv.rule_id=r.rule_id  where rv.student_login_id=(select student_login_id from tbl_parent_reg where login_id=$slogid)";
     $res6=$db->execute($sql6);
             
while($row6=mysqli_fetch_array($res6))
  {
           $total_no_rule_violated= $row6["c4"];
           $fineamount=  $row6["total_rules_fine"];
          if($total_no_rule_violated>0)
          {
           $percentage_rule_violation=$total_no_rule_violated/50*100;
          }
          else
          {
           $percentage_rule_violation=0;   
          }
         
            } 
              $percentage_rule_violation;
            $weightage= $percentagemark/100*$exam_weightage/100+$assinment_percentagemark/100*$assignment_weightage/100+$attendance_percentage/100*$attendance_weightage/100-$percentage_rule_violation/100*$rule_weightage/100;
           $score=$weightage*10;
            $roundOff = ($score*100.0)/100.0;
 $qry22="select *  from tbl_student_reg where login_id=(select student_login_id from tbl_parent_reg where login_id=$slogid)";
     
          
    
          $res22=$db->execute($qry22);
             
while($row22=mysqli_fetch_array($res22))
  {
               $StudentName=$row22["first_name"]." ".$row22["last_name"];
              
              }

?>
<h3 class="heading-agileinfo">Performance Evaluation Report of <?php echo $StudentName?><span>Report</span></h3>

            <table class="table table-striped">
     <tr><td colspan="2"></td></tr>
     <tr><td class="logo1" style="color:#F39C12;  font-size: 30px"><b>Performance Evaluation Score: <?php echo $roundOff?></b></td> </tr>
     <tr><td colspan="2" align="center" class="logo1" style="color:#E15700;  font-size: 30px"><b>Grade:<?php 
        if($score>0 && $score<1)
           {
           echo "D  Need More Improvement";  
           }
          else if($score>1 && $score<2)
           {
             echo  ("D  Need Improvement");  
           }
          else if($score>2 && $score<3)
           {
             echo "D  Need Improvement";  
           }
          else if($score>3 && $score<4)
           {
             echo "D+  Marginal";  
           }
          else if($score>4 && $score<5)
           {
             echo "C  Average" ;  
           }
         else if($score>5 && $score<6)
           {
             echo "C+  Above Average";  
           }
           else if($score>=6 && $score<7)
           {
             echo "B  Good";      
           }
           else if($score>=7 && $score<8)
           {
             echo "B+ Very Good";    
           }
           else if($score>=8 && $score<9)
           {
              echo "A Excellent";     
           }
           else if($score>=9 && $score<=10)
           {
              echo "A+  OutStanding";    
           }
           else
           {
               echo "Undefined";
           }
          
     ?>
             
   </b></td></tr>
        <tr><td>
                <table class="table table-striped">
                    <tr><th>Grade</th><th>Range of Mark</th><th>Score</th><th>Level</th></tr>  
                      <tr><td>A+</td><td>90% to 100% </td><td>9</td><td>Outstanding</td></tr>   
                     <tr><td>A</td><td>80% to 89% </td><td>8</td><td>Excellent</td></tr>   
                      <tr><td>B+</td><td>70% to 79% </td><td>7</td><td>Very Good</td></tr>   
                      <tr><td>B</td><td>60% to 69% </td><td>6</td><td>Good</td></tr>   
                       <tr><td>C+</td><td>50% to 59% </td><td>5</td><td>Above Average</td></tr>   
                        <tr><td>C</td><td>40% to 49% </td><td>4</td><td>Average</td></tr>   
                         <tr><td>D+</td><td>30% to 39% </td><td>3</td><td>Marginal</td></tr>   
                       <tr><td>D</td><td>20% to 29% </td><td>2</td><td>Need Improvement</td></tr>   
                        <tr><td>E</td><td>Below 20%</td><td>1</td><td>Need Improvement</td></tr>   
                    
                </table>    
                
                
                
              </td></tr>

          
     
    
 <tr><td><table  class="table table-striped"><tr><th colspan="2" align="center" style="color: #FFF; ">Details</th></tr>
     <tr><td  colspan="2" style="background-color:#F39C12;color: #FFF;">1.Examination</td></tr>
     <tr><td>Total Number of Examination</td><td><?php echo $examcount?></td></tr>
      <tr><td>Sum of Mark</td><td><?php echo $summark?></td></tr>
       <tr><td>Out of Mark</td><td><?php echo $totalmark?></td></tr>
       <tr><td>Percentage</td><td><?php echo ($percentagemark*100.0)/100.0 ?></td></tr>
          <tr><td colspan="2">
               <table class="table table-striped">
                   <tr><td colspan="3" align="center">Mark Details</td></tr>
                   
                   <tr><td>Subject</td><td>Mark</td><td>Out of Mark</td></tr>
          <?php  $query8="select * from  tbl_exam_result as er inner join  tbl_exam_announce as ea on er.exam_id=ea.exam_id inner join tbl_subject as s on s.subject_id=ea.subject_id where er.student_login_id='$student'";
             
            $res8=$db->execute($query8);
             
while($row8=mysqli_fetch_array($res8))
  { 
  	?>
            <tr><td><?php echo $row8["subject_name"]?></td><td><?php echo $row8["mark"]?></td><td><?php echo $row8["out_of_mark"]?></td></tr>
          <?php  }
            
         ?>
                   </table>
           </td>     
           
       </tr>
       
       
       
       <tr><td  colspan="2" style="background-color:#F39C12;color: #FFF;">2.Assignment</td></tr>
     <tr><td>Total Number of Assignment</td><td><?php $assignment_mark?></td></tr>
      <tr><td>Sum of Mark</td><td><?php echo $assignment_summark ?></td></tr>
       <tr><td>Out of Mark</td><td><?php echo $assignment_totalmark ?></td></tr>
         <tr><td>Percentage</td><td><?php echo ($assinment_percentagemark*100.0)/100.0?>%</td></tr>
          <tr><td colspan="2">
               <table class="table table-striped">
                   <tr><td colspan="3" align="center">Mark Details</td></tr>
                   
                   <tr><td>Subject</td><td>Mark</td><td>Out of Mark</td></tr>
          <?php  $query9="select * from   tbl_assignment_result as ar inner join   tbl_assignment as aa on ar.assign_id=aa.assign_id  inner join tbl_subject as s on s.subject_id=aa.subject_id where ar.student_login_id='$student'";
             
     $res9=$db->execute($query9);
             
while($row9=mysqli_fetch_array($res9))
  { 
  	?>
            <tr><td><?php echo $row9["subject_name"]?></td><td><?php echo $row9["mark"]?></td><td><?php echo $row9["out_of_mark"]?></td></tr>
          <?php }
         ?>
                   </table>
           </td>     
           
       </tr>
 
         
         
         
       <tr><td  colspan="2" style="background-color:#F39C12;color: #FFF;">3.Attendance</td></tr>
     <tr><td>Total Periods</td><td><?php echo  $totalperiod ?></td></tr>
      <tr><td>Attendance</td><td><?php echo $totalpresent?> </td></tr>
      <tr><td>Percentage</td><td><?php echo ($attendance_percentage*100.0)/100.0 ?>%</td></tr>
      
      
      <tr><td  colspan="2" style="background-color:#F39C12;color: #FFF;">4.Rules Violation</td></tr>
     <tr><td>Number of Rules Violated</td><td><?php echo $total_no_rule_violated?></td></tr>
      <tr><td>Amount Paid as Fine</td><td><?php echo $fineamount?></td></tr>
      <tr><td>Percentage Deducted</td><td><?php echo ($percentage_rule_violation*100.0)/100.0?>%</td></tr>
      
      
  </table>  </td></tr> 
</table>
   


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
				<h3>Report</h3>
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