<?php
session_start();
include 'dbconnect.php';
//Fetching Values from URL
$number2=$_POST['number1'];
$mobMessage2=$_POST['mobMessage1'];
$allSMS2=$_POST['allSMS1'];
$mobMessageall2=$_POST['mobMessageall1'];
//$pid2=$_POST['pid1']; 
//Insert query
if($number2!='') {
   include('way2sms-api.php');

    $res = sendWay2SMS('9603894872', '9000693778', $number2, $mobMessage2);
    if($res){
  	echo "Success";
  	}else{
  	echo "Failure";
  	}
}
//ALL SMS
if($allSMS2!='smsAll') {
   include('way2sms-api.php');
   	$guests=mysqli_query($con, "SELECT  * from `guest-user`");
	$rowcount=mysqli_num_rows($guests);
	$numbers=array();
	while ($rws= mysqli_fetch_assoc($guests)) {
	array_push($numbers,$rws['mobile']);
	}
	$users=mysqli_query($con, "SELECT  * from `user`");
	$rowcount=mysqli_num_rows($users);
	while ($rw= mysqli_fetch_assoc($users)) {
	array_push($numbers,$rw['mobile']);
	}
	$unq_numbers = array_unique($numbers, SORT_REGULAR);
	foreach($unq_numbers as $key=>$value){
    	$resAll = sendWay2SMS('9603894872', '9000693778', $value, $mobMessageall2);
    	$resAll=true;
    	}
    if($resAll){
  	echo "Success";
  	}else{
  	echo "Failure";
  	}
}

    
    
mysql_close($connection); // Connection Closed
?>