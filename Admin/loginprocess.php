<?php
session_start();
include 'dbconnect.php';
//Fetching Values from URL
$email2=$_POST['email1'];
$password2=md5($_POST['password1']);
//Insert query
$query = mysqli_query($con,"SELECT * from `user` WHERE email='$email2' AND password='$password2'");
$match  = mysqli_num_rows($query);
$rws=mysqli_fetch_assoc($query);
$mobile=$rws['mobile'];
$user_check=$email2;
if($match !=0) {
include('way2sms-api.php');

    //$res = sendWay2SMS('9603894872', '9000693778', $mobile, 'Your Thuneega Designers Account logged in from unknown device');
  
    

$_SESSION['login_user'] = $email2;
echo $_SESSION['login_user'];
}else{
echo "Invalid Email or Password";
}
mysql_close($connection); // Connection Closed
?>