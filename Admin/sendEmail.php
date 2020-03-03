<?php
session_start();
include 'dbconnect.php';
//Fetching Values from URL
$to=$_POST['email1'];
$subject=$_POST['emailSubject1'];
$message=$_POST['emailMessage1'];
//All Emails
$emailAll1=$_POST['emailAll1'];
$emailSubjectall1=$_POST['emailSubjectall1'];
$emailMessageall1=$_POST['emailMessageall1'];

$body='<!DOCTYPE html>
<html>
  <head>
    <style>
      @media only screen and (max-device-width: 480px) {
        /* mobile-specific CSS styles go here */
      }
    </style>
  </head>
  <body>
    <div class="main">
      <a href="https://www.thuneegadesigners.com" style="text-decoration: none;">
      <p><img src="https://www.thuneegadesigners.com/logo.png" alt="Thuneega Designers" /></p></a>
      <p><span style="background-color: #ffffff; color: #008080;">Hello Sir / Madam,</span></p>
      <p><span style="background-color: #ffffff; color: #003366;">'.$message.'</p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #008080;">Thanks &amp; Regards!</span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"><a href="https://www.thuneegadesigners.com" style="text-decoration: none;"><span style="color: #ff6600;"><span style="color: #333333;">From</span> <strong>Thuneega Designers</strong></span>.</a></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;">       </span></p>
      <p><span style="background-color: #ffffff; color: #008080;"></span></p>
      <p><span style="background-color: #00ccff;"></span></p>
      <p></p>
    </div>
  </body>
</html>';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From:Thuneega Designers <support@thuneegadesigners.com>' . "\r\n";
        $headers .= "Reply-To: $from \r\n";
 	if($to!=''){
		 if(mail($to , $subject, $body, $headers)){
  			echo "Success";
  			}else{
  			echo "Failure";
  			}

 	}
 	if($emailAll1 =='emailAll'){
 		
 		$bodyall='<!DOCTYPE html>
<html>
  <head>
    <style>
      @media only screen and (max-device-width: 480px) {
        /* mobile-specific CSS styles go here */
      }
    </style>
  </head>
  <body>
    <div class="main">
      <a href="https://www.thuneegadesigners.com" style="text-decoration: none;">
      <p><img src="https://www.thuneegadesigners.com/logo.png" alt="Thuneega Designers" /></p></a>
      <p><span style="background-color: #ffffff; color: #008080;">Hello Sir / Madam,</span></p>
      <p><span style="background-color: #ffffff; color: #003366;">'.$emailMessageall1.'</p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #008080;">Thanks &amp; Regards!</span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"><a href="https://www.thuneegadesigners.com" style="text-decoration: none;"><span style="color: #ff6600;"><span style="color: #333333;">From</span> <strong>Thuneega Designers</strong></span>.</a></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;"><span style="color: #003366;"></span></span></p>
      <p><span style="background-color: #ffffff; color: #008080;">       </span></p>
      <p><span style="background-color: #ffffff; color: #008080;"></span></p>
      <p><span style="background-color: #00ccff;"></span></p>
      <p></p>
    </div>
  </body>
</html>';
 		
 		
 		
 		
 		$guests=mysqli_query($con, "SELECT  * from `guest-user`");
		$rowcount=mysqli_num_rows($guests);
		$emails=array();
		while ($rws= mysqli_fetch_assoc($guests)) {
		array_push($emails,$rws['email']);
		}
		$users=mysqli_query($con, "SELECT  * from `user`");
		$rowcount=mysqli_num_rows($users);
		while ($rw= mysqli_fetch_assoc($users)) {
		array_push($emails,$rw['email']);
		}
		$unq_emails = array_unique($emails, SORT_REGULAR);
		$count=0;
		foreach($unq_emails as $key=>$value){
		 mail($value, $emailSubjectall1, $bodyall, $headers);
		 $count++;
		 }
		       if($count!=0){
  			echo "Success";
  			}else{
  			echo "Failure";
  			}

 	}       
    
	

mysql_close($con); // Connection Closed
?>