function validate_feedback()
{
	var feedback=document.getElementById("feedback").value;
                          
       if(feedback=="" || !isNaN(feedback))
       {


                 alert("Please Enter Valid feedback");
                  document.f1.feedback.focus();
                    return false;
            } 
}