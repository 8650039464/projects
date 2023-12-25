<html>
<body>
<?php
session_start();
include('config.php'); 
$yourname = $_POST['yourname'];
$emailaddress = $_POST['emailaddress'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$file = $_POST['file'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$q="insert into registration(yourname,emailaddress,phone,course,file,password,confirmpassword ) VALUES('$yourname','$emailaddress',$phone,'$course','$file','$password','$confirmpassword')";
$i=mysqli_query($con,$q); 
if($i==1)
echo "you are registered";
?>
<a href="login1.php"> Go Back to login</a>
</body>
</html>
