<?php
 session_start();
header('location:feedback.php');
 $host = "localhost";    /* Host name */
 $user = "root";         /* User */
 $password = "";         /* Password */
 $dbname = "doctoroffice";   /* Database name */


 // Create connection
 $con = mysqli_connect($host, $user, $password,$dbname);
 
 // Check connection

mysqli_select_db($con,'doctoroffice');

$experience=$_POST['experience'];

$comment=$_POST['comment'];

$name=$_POST['name'];

$email=$_POST['email'];

$signup="select * from tbl_feedback where email='$email'";

$result= mysqli_query($con,$signup);

$num= mysqli_num_rows($result);

if($num==1){
    echo '<script>window.alert("Sign Up Unsuccessful Try Again")</script>'; 

 
}else{
    $regi="insert into tbl_feedback (name,email,grade,description)values('$name','$email','$experience','$comment')";
    mysqli_query($con,$regi);
    echo '<script>window.alert("Sign Up Successful")</script>'; 

    header('location:feedback.php');

    }
    ?>