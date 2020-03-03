<?php
	   session_start();
   include('dbconnect.php');
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select email from user where email = '$user_check' ");
   
   $rws= mysqli_fetch_assoc($ses_sql);
   
   $login_session = $rws['email'];
   
?>