function validate_login()
{
	var username=document.getElementById("username").value;
                          
       if(username=="" || !isNaN(username))
       {


                 alert("Please Enter Valid Username");
                  document.f1.username.focus();
                    return false;
            } 
            var password=document.getElementById("password").value;
                          
       if(password=="" || !isNaN(password))
       {


                 alert("Please Enter Valid password");
                  document.f1.password.focus();
                    return false;
            }
           }

  function validate_student()
    {
  	var letters = /^[A-Za-z]+$/;
	var fname=document.getElementById("fname").value;
                          
       if(fname==""  ||   (!fname.match(letters)) )
       {


               alert("Please Enter Valid First Name");
                 document.f1.fname.focus();
                                return false;
            }


 
     var lname=document.getElementById("lname").value;
                            
          if(lname=="" ||  (!lname.match(letters)) ){
             alert("Please Enter Valid Last Name");
               document.f1.lname.focus();
                                return false;
                            } 

 if(document.f1.gender[0].checked==false && document.f1.gender[1].checked==false)
 {
alert("Please choose your gender");
return false;
 }

var datepicker=document.getElementById("datepicker").value;
                          
       if(datepicker=="")
       {


                 alert("Please choose Date of Birth");
                 
                    return false;
            }
     
  var address=document.getElementById("address").value;
    if(address=="" || !isNaN(address)){
           alert("Please Enter Valid Address");
                document.f1.address.focus();
                                return false;
                            } 
var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            } 
        var course_name=document.getElementById("course_name").value;
                          
       if(course_name==0)
       {


                 alert("Please choose Course");
                 
                    return false;
            }  
var semester=document.getElementById("semester").value;
                          
       if(semester==0)
       {


                 alert("Please choose semester");
                 
                    return false;
            }  
       var phone_npt = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;

var phone_no=document.getElementById("phone").value;
  if(!phone_no.match(phone_npt))
        {
         
  alert("Please Enter Valid 10 digit Phone Number - Starting from 7 or 8 or 9");
       document.f1.phone.focus();
return false;
          }


        


   var emailid=document.getElementById("email").value;
     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!emailid.match(mailformat))
{
  alert("Please Enter Valid Email Id");
       document.f1.email.focus();
return false;
} 
 var alpfnumeric = /^[A-Za-z0-9]+$/;   
var username=document.getElementById("uname").value;
  if(username=="" || (!username.match(alpfnumeric)) || (username.length < 5) || (username.length
   > 15) || !isNaN(username)){
                                alert("Please Enter Valid User Name(5-15 digit alphanumeric username)");
                     document.f1.uname.focus();
                                return false;
                            }
var password=document.getElementById("password").value;
                            
if(password=="" || (!password.match(alpfnumeric)) || (password.length < 5) || (password.length > 15) || !isNaN(password)){
alert("Please Enter your Password(5-15 digit alphanumeric Password)");
document.f1.password.focus();
return false;
 }
                           
var cpassword=document.getElementById("cpassword").value;
                            
if(cpassword==""){
alert("Please Enter your Confirm Password");
document.f1.cpassword.focus();
return false;
                            }
                           
                            
else{
 if(password!=cpassword){
alert("Password doesn't match")
document.f1.cpassword.focus();
 return false;
}

}
  var pname=document.getElementById("pname").value;
    if(pname=="" || !isNaN(pname)){
           alert("Please Enter Valid Parent Name");
                document.f1.pname.focus();
                                return false;
                            }  
 var occupation=document.getElementById("occupation").value;
    if(occupation=="" || !isNaN(occupation)){
           alert("Please Enter Valid occupation");
                document.f1.occupation.focus();
                                return false;
                            }       
  var phone_npt = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;

var parent_phone=document.getElementById("parent_phone").value;
  if(!parent_phone.match(phone_npt))
        {
         
  alert("Please Enter Valid 10 digit Parent Phone Number - Starting from 7 or 8 or 9");
       document.f1.parent_phone.focus();
return false;
          }
   var parent_email=document.getElementById("parent_email").value;
     //var mailformat1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!parent_email.match(mailformat))
{
  alert("Please Enter Valid Parent  Email Id");
       document.f1.parent_email.focus();
return false;
} 
var parent_password=document.getElementById("parent_password").value;
                            
if(parent_password=="" || (!parent_password.match(alpfnumeric)) || (parent_password.length < 5) || (password.length > 15) || !isNaN(password)){
alert("Please Enter your Password(5-15 digit alphanumeric Password)");
document.f1.parent_password.focus();
return false;
 }
                           
var pcpassword=document.getElementById("pcpassword").value;
                            
if(pcpassword==""){
alert("Please Enter your Parent Confirm Password");
document.f1.pcpassword.focus();
return false;
                            }
                           
                            
else{
 if(parent_password!=pcpassword){
alert("Password doesn't match")
document.f1.pcpassword.focus();
 return false;
}

}                  
  }
  function validate_staff()
  {
  var letters = /^[A-Za-z]+$/;
  var fname=document.getElementById("fname").value;
                          
       if(fname==""  ||   (!fname.match(letters)) )
       {


               alert("Please Enter Valid First Name");
                 document.f1.fname.focus();
                                return false;
            }


 
     var lname=document.getElementById("lname").value;
                            
          if(lname=="" ||  (!lname.match(letters)) ){
             alert("Please Enter Valid Last Name");
               document.f1.lname.focus();
                                return false;
                            } 

 if(document.f1.gender[0].checked==false && document.f1.gender[1].checked==false)
 {
alert("Please choose your gender");
return false;
 }

var datepicker=document.getElementById("datepicker").value;
                          
       if(datepicker=="")
       {


                 alert("Please choose Date of Birth");
                 
                    return false;
            }
     
  var address=document.getElementById("address").value;
    if(address=="" || !isNaN(address)){
           alert("Please Enter Valid Address");
                document.f1.address.focus();
                                return false;
                            } 
           var phone_npt = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;

var phone_no=document.getElementById("phone").value;
  if(!phone_no.match(phone_npt))
        {
         
  alert("Please Enter Valid 10 digit Phone Number - Starting from 7 or 8 or 9");
       document.f1.phone.focus();
return false;
          }


   /*  var file=document.getElementById("file").value;
  if(file==""){
         alert("Please Choose a file");
           
            return false;
                            }
                            else{
             var extension = file.substr(file.lastIndexOf('.') + 1).toLowerCase();
  var allowedExtensions = ['jpg', 'jpeg', 'png'];
  if (file.length > 0)
     {
          if (allowedExtensions.indexOf(extension) === -1) 
             {
               alert('Invalid file Format. Only ' + allowedExtensions.join(', ') + ' are allowed.');
               return false;
             }
    }                   
                            }     
*/

   var emailid=document.getElementById("email").value;
     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!emailid.match(mailformat))
{
  alert("Please Enter Valid Email Id");
       document.f1.email.focus();
return false;
} 
var department_name=document.getElementById("department_name").value;
                          
       if(department_name==0)
       {


                 alert("Please choose department");
                 
                    return false;
            } 
    var qualification=document.getElementById("qualification").value;
    if(qualification=="" || !isNaN(qualification)){
           alert("Please Enter Valid qualification");
                document.f1.pname.focus();
                                return false;
                            }  
 var doj=document.getElementById("doj").value;
    if(doj==""){
           alert("Please Enter Valid Date of Joining");
                document.f1.doj.focus();
                                return false;
                            }     
 var alpfnumeric = /^[A-Za-z0-9]+$/;   
var username=document.getElementById("uname").value;
  if(username=="" || (!username.match(alpfnumeric)) || (username.length < 5) || (username.length
   > 15) || !isNaN(username)){
                                alert("Please Enter Valid User Name(5-15 digit alphanumeric username)");
                     document.f1.uname.focus();
                                return false;
                            }
var password=document.getElementById("password").value;
                            
if(password=="" || (!password.match(alpfnumeric)) || (password.length < 5) || (password.length > 15) || !isNaN(password)){
alert("Please Enter your Password(5-15 digit alphanumeric Password)");
document.f1.password.focus();
return false;
 }
                           
var cpassword=document.getElementById("cpassword").value;
                            
if(cpassword==""){
alert("Please Enter your Confirm Password");
document.f1.cpassword.focus();
return false;
                            }
                           
                            
else{
 if(password!=cpassword){
alert("Password doesn't match")
document.f1.cpassword.focus();
 return false;
}

}
}
