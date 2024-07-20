function validate_rule_violation()
{

  var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
  var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
    var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
         

            var student=document.getElementById("student").value;
                          
       if(student==0)
       {


                 alert("Please choose student ");
           
                    return false;
            } 
         
        
 var rule=document.getElementById("rule").value;
                          
       if(rule==0)
       {


                 alert("Please Choose Rule Name");
              
                    return false;
            }   

   var fine=document.getElementById("fine").value;
                          
       if(fine=="" || isNaN(fine))
       {


                 alert("Please Enter Fine");
                  document.f1.fine.focus();
                    return false;
            }
            return true;  
}
function validate_assignn()
{
var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
    var staff_name=document.getElementById("staff_name").value;
                          
       if(staff_name==0)
       {


                 alert("Please Enter Valid Staff Name");
                  document.f1.staff_name.focus();
                    return false;
            } 
	var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
   	var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
var subject_name=document.getElementById("subject_name").value;
                          
       if(subject_name==0)
       {


                 alert("Please choose subject name ");
           
                    return false;
            } 
var day=document.getElementById("day").value;
                          
       if(day==0)
       {
alert("Please choose day");
           
                    return false;
            } 
            var time_period=document.getElementById("time_period").value;
                          
       if(time_period==0)
       {
alert("Please choose time period");
           
                    return false;
            }

}
function validate_exam_announce()
{
var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
  
 
	var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
   	var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
var subject_name=document.getElementById("subject_name").value;
                          
       if(subject_name==0)
       {


                 alert("Please choose subject name ");
           
                    return false;
            }	
    var topic=document.getElementById("topic").value;
                          
       if(topic=="" || !isNaN(topic))
       {


                 alert("Please Enter topic");
                  document.f1.topic.focus();
                    return false;
            }
    var out_mark=document.getElementById("out_mark").value;
                          
       if(out_mark=="" || isNaN(out_mark))
       {


                 alert("Please Enter out mark");
                  document.f1.out_mark.focus();
                    return false;
            } 
      var exam_date=document.getElementById("exam_date").value;
                          
       if(exam_date=="")
       {


                 alert("Please Enter exam date");
                  document.f1.exam_date.focus();
                    return false;
            } 
}
function validate_assign()
{
var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
  
 
  var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
    var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
var subject_name=document.getElementById("subject_name").value;
                          
       if(subject_name==0)
       {


                 alert("Please choose subject name ");
           
                    return false;
            } 
    var topic=document.getElementById("topic").value;
                          
       if(topic=="" || !isNaN(topic))
       {


                 alert("Please Enter topic");
                  document.f1.topic.focus();
                    return false;
            }
    var out_mark=document.getElementById("out_mark").value;
                          
       if(out_mark=="" || isNaN(out_mark))
       {


                 alert("Please Enter out mark");
                  document.f1.out_mark.focus();
                    return false;
            } 
      var end_date=document.getElementById("end_date").value;
                          
       if(end_date=="")
       {


                 alert("Please Enter end date");
                  document.f1.end_date.focus();
                    return false;
            } 	
}
function validate_exam()
{
var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
  
 
  var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
    var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
 var student=document.getElementById("student").value;
                          
       if(student==0)
       {


                 alert("Please choose student name ");
           
                    return false;
            }           
var subject_name=document.getElementById("subject_name").value;
                          
       if(subject_name==0)
       {


                 alert("Please choose subject name ");
           
                    return false;
            }
var topic=document.getElementById("topic").value;
                          
       if(topic==0)
       {


                 alert("Please Enter tohhpic");
                  document.f1.topic.focus();
                    return false;
            }
    var out_mark=document.getElementById("out_mark").value;
                      
       if(out_mark=="" || isNaN(out_mark))
       {


                 alert("Please Enter out mark");
                  document.f1.out_mark.focus();
                    return false;
            } 
   var mark=document.getElementById("mark").value;
                          
       if(mark=="" || isNaN(mark))
       {


                 alert("Please Enter  mark");
                  document.f1.mark.focus();
                    return false;
            }
            else if(parseInt(out_mark)<parseInt(mark))
            {
 alert("Mark is greater than Out of Mark");
                  document.f1.out_mark.focus();
                    return false;
            }
return true;
            }
    function validate_assign_result()
    {
 var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
  
 
  var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
    var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
 var student=document.getElementById("student").value;
                          
       if(student==0)
       {


                 alert("Please choose student name ");
           
                    return false;
            }           
var subject_name=document.getElementById("subject_name").value;
                          
       if(subject_name==0)
       {


                 alert("Please choose subject name ");
           
                    return false;
            }
var topic=document.getElementById("topic").value;
                          
       if(topic==0)
       {


                 alert("Please Enter topic");
                  document.f1.topic.focus();
                    return false;
            }
    var out_mark=document.getElementById("out_mark").value;
                   
       if(out_mark=="" || isNaN(out_mark))
       {


                 alert("Please Enter out mark");
                  document.f1.out_mark.focus();
                    return false;
            } 
   var mark=document.getElementById("mark").value;
                          
       if(mark=="" || isNaN(mark))
       {


                 alert("Please Enter  mark");
                  document.f1.mark.focus();
                    return false;
            }
            else if(parseInt(out_mark)<parseInt(mark))
            {
 alert("Mark is greater than Out of Mark");
                  document.f1.out_mark.focus();
                    return false;
            }
return true;     
    }
        function validate_note()
    {
 var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
  
 
  var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
    var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester ");
           
                    return false;
            } 
           
var subject_name=document.getElementById("subject_name").value;
                          
       if(subject_name==0)
       {


                 alert("Please choose subject name ");
           
                    return false;
            }
  var title=document.getElementById("title").value;
                          
       if(title=="" || !isNaN(title))
       {


                 alert("Please Enter  title");
                  document.f1.title.focus();
                    return false;
            }
var file=document.getElementById("file").value;
                        
       if(file=="")
{
                 alert("Please choose note");
                  document.f1.file.focus();
                    return false;
            }
else{
var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();
  var allowedExtensions = ['docx','doc','pdf'];
  if (file.length > 0)
     {
          if (allowedExtensions.indexOf(extension) === -1) 
             {
               alert('Invalid file Format. Only ' + allowedExtensions.join(', ') + ' are allowed.');
               return false;
             }
    }                   
                            }
}