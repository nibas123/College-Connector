function display_course()
{
  var department_name=document.getElementById("department_name").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
document.getElementById('course_name').innerHTML=xmlhttp.responseText;
  
    }
  }
  xmlhttp.open("GET","display_course.php?department_name="+department_name,true);
  xmlhttp.send();

}
function display_course1()
{
  var department_name=document.getElementById("department_name").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
     
    var r=xmlhttp.responseText.split("|");
     document.getElementById('course_name').innerHTML=r[0];
          document.getElementById('staff_name').innerHTML=r[1];

   
    }
  }
  xmlhttp.open("GET","display_course1.php?department_name="+department_name,true);
  xmlhttp.send();

}
function display_semester()
{
  var course_name=document.getElementById("course_name").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('semester').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_semester.php?course_name="+course_name,true);
  xmlhttp.send();

}
function display_semester1()
{
  var course_name=document.getElementById("course_name").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('semester').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_semester1.php?course_name="+course_name,true);
  xmlhttp.send();

}
function display_teachers()
{
   var dpt=document.getElementById("txtdpt").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('teacher').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_teachers.php?dpt="+dpt,true);
  xmlhttp.send(); 
}
function display_place()
{
 var district=document.getElementById("district").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('city').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_place.php?district="+district,true);
  xmlhttp.send();
 
}
function display_subject()
{
  var semester=document.getElementById("semester").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('subject_name').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_subject.php?semester="+semester,true);
  xmlhttp.send();

}
function display_subject1()
{
  var semester=document.getElementById("semester").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
    
     var r=xmlhttp.responseText.split("|");
     document.getElementById('subject_name').innerHTML=r[0];
          document.getElementById('student').innerHTML=r[1];

    }
  }
  xmlhttp.open("GET","display_subject1.php?semester="+semester,true);
  xmlhttp.send();

}
function display_topic()
{
  var subject_name=document.getElementById("subject_name").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('topic').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_topic.php?subject_name="+subject_name,true);
  xmlhttp.send();  
}
function display_topic1()
{
  var subject_name=document.getElementById("subject_name").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('topic').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_topic1.php?subject_name="+subject_name,true);
  xmlhttp.send();    
}
function display_out_of_mark()
{
  var topic=document.getElementById("topic").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('out_mark').value=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_out_mark.php?exam_id="+topic,true);
  xmlhttp.send();
}
function display_out_of_mark1()
{
   var topic=document.getElementById("topic").value;


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('out_mark').value=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_out_mark1.php?assign_id="+topic,true);
  xmlhttp.send(); 
}
function display_student()
{
  var semester=document.getElementById("semester").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('student').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_student.php?semester="+semester,true);
  xmlhttp.send(); 
}
function display_amount()
{
   var rule=document.getElementById("rule").value;
 

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('fine').value=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_rule_amount.php?rule="+rule,true);
  xmlhttp.send();  
}
function display_report()
{
   var student=document.getElementById("student").value;
if(student==0)
{
  document.getElementById("report").style.color = "red";
document.getElementById('report').innerHTML="Choose Student";
}
else
{


    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('report').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_report.php?student="+student,true);
  xmlhttp.send();   
}
}
function display_student_details()
{
  var semester=document.getElementById("semester").value;
 
alert(semester);
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_student_list.php?semester="+semester,true);
  xmlhttp.send(); 
}


function display_fee()
{
   var student=document.getElementById("student").value;
 //alert("ffffffffffffffff");

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('amount').value=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_fee.php?student="+student,true);
  xmlhttp.send();  
}
function display_student_status()
{
    var semester=document.getElementById("semester").value;
 //alert("ffffffffffffffff");

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_payment_status.php?semester="+semester,true);
  xmlhttp.send();  
}

function display_attendance()
{
 var date1=document.getElementById("fdate").value;
  var date2=document.getElementById("tdate").value;
 //alert("ffffffffffffffff");

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_attendance.php?date1="+date1+"&date2="+date2,true);
  xmlhttp.send();   
}
function display_attendance_by_sem()
{
  var semester=document.getElementById("semester").value;
  
 //alert("ffffffffffffffff");

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_attendance_by_sem.php?semester="+semester,true);
  xmlhttp.send();   
}
function display_attendance_parent()
{
 var date1=document.getElementById("fdate").value;
  var date2=document.getElementById("tdate").value;
 //alert("ffffffffffffffff");

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_attendance.php?date1="+date1+"&date2="+date2,true);
  xmlhttp.send();   
}
function display_attendance_by_sem_parent()
{
  var semester=document.getElementById("semester").value;
  
 //alert("ffffffffffffffff");

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    
      document.getElementById('result').innerHTML=xmlhttp.responseText;
   
    }
  }
  xmlhttp.open("GET","display_attendance_by_sem.php?semester="+semester,true);
  xmlhttp.send();   
}