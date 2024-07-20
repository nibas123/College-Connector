<?php
session_start();
$subject_id=$_POST["subject_name"];
$title=$_POST["title"];

$tlogid=$_SESSION['login_id'];
//Include dboperation class file 
 include_once("../dboperation.php");
 // code to create object of class dboperations
       $db=new dboperation();
     
           $ext = explode('.', basename($_FILES['file']['name']));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable

              $h = 0;
                $dir = '../notes/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $h++;
        }
    }
    $n1=$h+1;
        $fname=$n1.".".$file_extension;
      move_uploaded_file($_FILES["file"]["tmp_name"], "../notes/$fname");
  
 $sql="insert into tbl_note(subject_id,note_name,teacher_login_id,title) values('$subject_id','$fname','$tlogid','$title')";
       $res1=$db->execute($sql);
       if($res1)
       {
?>
<script type="text/javascript">
  
  alert("Note Has been Uploaded Successfully");
window.location="note.php";
</script>
<?php
       }
       ?>