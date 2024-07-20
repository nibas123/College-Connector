function validate_department()
{
	var department_name=document.getElementById("department_name").value;
                          
       if(department_name=="" || !isNaN(department_name))
       {


                 alert("Please Enter Valid Department Name");
                  document.f1.department_name.focus();
                    return false;
            } 
}
function validate_course()
{
	var course_name=document.getElementById("course_name").value;
                          
       if(course_name=="" || !isNaN(course_name))
       {


                 alert("Please Enter Valid Course Name");
                  document.f1.course_name.focus();
                    return false;
            } 
   	var duration=document.getElementById("duration").value;
                          
       if(duration=="" || isNaN(duration))
       {


                 alert("Please Enter Valid Course duration Number");
                  document.f1.duration.focus();
                    return false;
            } 
           var department_name=document.getElementById("txtdpt").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
            return true; 
}
function validate_semester()
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
                          
       if(semester=="" || isNaN(semester))
       {


                 alert("Please Enter Number of semester In the Course ");
           
                    return false;
            } 
        var fee=document.getElementById("fee").value;
                          
       if(fee=="" || isNaN(fee))
       {


                 alert("Please enter Valid Fee");
             document.f1.fee.focus();
                    return false;
            }   
            return true; 
}
function validate_subject()
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
       var subject=document.getElementById("subject").value;
                          
       if(subject=="" || !isNaN(subject))
       {


                 alert("Please Enter subject");
                  document.f1.subject.focus();
                    return false;
            }   
            return true; 
}
function validate_hod()
{
var department_name=document.getElementById("txtdpt").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            }
var teacher=document.getElementById("teacher").value;
                          
       if(teacher==0)
       {


                 alert("Please choose teacher ");
           
                    return false;
            } 
            return true;	
}
function validate_rules()
{
 var rule_name=document.getElementById("rule_name").value;
                          
       if(rule_name=="" || !isNaN(rule_name))
       {


                 alert("Please Enter Rule Name");
                  document.f1.rule_name.focus();
                    return false;
            } 	
  var description=document.getElementById("description").value;
                          
       if(description=="" || !isNaN(description))
       {


                 alert("Please Enter Description");
                  document.f1.description.focus();
                    return false;
            } 
   var fine=document.getElementById("fine").value;
                          
       if(fine=="" || isNaN(fine))
       {


                 alert("Please Enter Fine");
                  document.f1.fine.focus();
                    return false;
            } 	
}
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
function validate_weightage()
{
var Weightage=document.getElementById("Weightage").value;
                        
       if(Weightage=="" || isNaN(Weightage))
       {


                 alert("Please Enter Weightage");
                  document.f1.Weightage.focus();
                    return false;
            }
            var type=document.getElementById("type").value;
                        
       if(type==0)
       {


                 alert("Please choose type");
                    return false;
            }
            return true;
}
function validate_feedback()
{
  var response=document.getElementById("response").value;
                          
       if(response=="" || !isNaN(response))
       {


                 alert("Please Enter Valid response");
                  document.f1.response.focus();
                    return false;
            } 
}
function validate_fee()
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
         
   
   var amount=document.getElementById("amount").value;
         if(amount!="Already Paid")  
         {               
       if(amount=="" || isNaN(amount))
       {

                 alert("Please Enter Amount");
                  document.f1.amount.focus();
                    return false;
            }
          }
          else
          {
    alert("Already Paid");
                 
                    return false;
            
          }
           return true; 
}