<title>Send SMS</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="sms.css">
<script>
$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});


</script>
<?php
include 'dbconnect.php';
?>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation" style="width:15%;">
                <div class="logo">
                    <a hef="index.php?admin=det"><img src="/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <!-- <img src="/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo"> -->
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="index.php?admin=admin@"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="orders.php"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders</span></a></li>
                        <li><a href="dataip.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upload</span></a></li>
                        <li class="active"><a href="products.php"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Modifications</span></a></li>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cart Items</span></a></li>
                        <li><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Send SMS/Email</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
			</div>
			<div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                   <li class="hidden-xs"><a href="https://www.thuneegadesigners.com" class="add-project" data-toggle="modal" >Home</a></li>
                                   <?php 
                                   include 'session.php';
				   if($user_check == 'admin@'){?>
                                   <li><a href="logout.php"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>&nbsp<b>Log out</b></a></li> 
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
			</header>
			</div>
			


<div class="user-dashboard hm-gradient" >

	<div class="row">
		<div class="col-sm-3">
			<button class="btn btn-primary show_hide">Specific Number</button>
		</div>
		<div class="col-sm-3">
			<button class="btn btn-warning show_hide1">Send to All Number</button>
		</div>
		<div class="col-sm-3">
			<button class="btn btn-primary show_hide2">Specific Email</button>
		</div>
		<div class="col-sm-3">
			<button class="btn btn-warning show_hide3">Send to All Email</button>
		</div>
		<div class="col-xs-12 slidingDiv">
			<div class="card near-moon-gradient form-white">
                        <div class="card-body">
                            <!-- Form contact -->
                            <form method="post">
                                <h2 class="text-center py-4 font-bold font-up white-text">Send SMS to Specific Number</h2>
                          
                                <div class="md-form">
                                    <i class="fa fa-tag1 prefix white-text"></i>
                                    <input type="text" id="number" class="form-control" required>
                                    <label for="form342">Number</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil1 prefix white-text"></i>
                                    <textarea type="text" id="mobMessage" class="md-textarea" style="height: 100px"></textarea>
                                    <label for="form82">Message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-lg" id="snSubmit" style="font-size:14px;">Send</button>
                                </div>
                            </form>
                            <!-- Form contact -->
                        </div>
                    </div>
		</div> <!-- End Specific Number -->
		
			<div class="col-xs-12 slidingDiv1">
			<div class="card near-moon-gradient form-white">
                        <div class="card-body">
                            <!-- Form contact -->
                            <form method="post">
                                <h2 class="text-center py-4 font-bold font-up white-text">Send SMS to All Number</h2>
                          
                                <div class="md-form">
                                    <i class="fa fa-tag1 prefix white-text"></i>
                                    <input type="hidden" id="allSMS" class="form-control" vlaue="smsAll">
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil1 prefix white-text"></i>
                                    <textarea type="text" id="mobMessageall" class="md-textarea" style="height: 100px" required></textarea>
                                    <label for="form82">Message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-lg" id="saSubmit" style="font-size:14px;">Send</button>
                                </div>
                            </form>
                            <!-- Form contact -->
                        </div>
                    </div>
		</div><!-- End All Number -->
		<div class="col-xs-12 slidingDiv2">
			<div class="card near-moon-gradient form-white">
                        <div class="card-body">
                            <!-- Form contact -->
                            <form method="post">
                                <h2 class="text-center py-4 font-bold font-up white-text">Send Email to Specific user</h2>
                          
                                <div class="md-form">
                                    <i class="fa fa-tag1 prefix white-text"></i>
                                    <input type="email" id="email" class="form-control" style="font-size:14px;" required>
                                    <label for="form342">Email</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-tag1 prefix white-text"></i>
                                    <input type="text" id="emailSubject" class="form-control" style="font-size:14px;" required>
                                    <label for="form342">Subject</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil1 prefix white-text"></i>
                                    <textarea type="text" id="emailMessage" class="md-textarea" style="height: 100px;font-size:14px;" required></textarea>
                                    <label for="form82">Message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-lg" id="seSubmit" style="font-size:14px;">Send</button>
                                </div>
                            </form method="post">
                            <!-- Form contact -->
                        </div>
                    </div>
		</div> <!-- End Specific Email -->
		<div class="col-xs-12 slidingDiv3">
			<div class="card near-moon-gradient form-white">
                        <div class="card-body">
                            <!-- Form contact -->
                            <form method="post">
                                <h2 class="text-center py-4 font-bold font-up white-text">Send Email to All</h2>
                                 <div class="md-form">
                                    <i class="fa fa-tag1 prefix white-text"></i>
                                    <input type="hidden" id="emailAll" value="emailAll" class="form-control">
                                    <label for="form342"></label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-tag1 prefix white-text"></i>
                                    <input type="text" id="emailSubjectall" class="form-control" required>
                                    <label for="form342">Subject</label>
                                </div>
                                
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil1 prefix white-text"></i>
                                    <textarea type="text" id="emailMessageall" class="md-textarea" style="height: 100px"></textarea>
                                    <label for="form82">Message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-lg" id="saeSubmit" style="font-size:14px;">Send</button>
                                </div>
                            </form>
                            <!-- Form contact -->
                        </div>
                    </div>
		</div> <!-- End All Email -->
	</div>  


    
        <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
  <script type="text/javascript">

$(document).ready(function(){

$(".slidingDiv").hide();
$(".show_hide").show();

$('.show_hide').click(function(){
$(".slidingDiv").slideToggle();
$(".slidingDiv1").hide();
$(".slidingDiv2").hide();
$(".slidingDiv3").hide();
});

});

</script>
<script type="text/javascript">

$(document).ready(function(){

$(".slidingDiv1").hide();
$(".show_hide1").show();

$('.show_hide1').click(function(){
$(".slidingDiv1").slideToggle();
$(".slidingDiv").hide();
$(".slidingDiv2").hide();
$(".slidingDiv3").hide();
});

});

</script>
<script type="text/javascript">

$(document).ready(function(){

$(".slidingDiv2").hide();
$(".show_hide2").show();

$('.show_hide2').click(function(){
$(".slidingDiv2").slideToggle();
$(".slidingDiv1").hide();
$(".slidingDiv3").hide();
$(".slidingDiv").hide();
});

});

</script>
<script type="text/javascript">

$(document).ready(function(){

$(".slidingDiv3").hide();
$(".show_hide3").show();

$('.show_hide3').click(function(){
$(".slidingDiv3").slideToggle();
$(".slidingDiv1").hide();
$(".slidingDiv2").hide();
$(".slidingDiv").hide();
});

});
</script>
<script>

$(document).ready(function(){
$("#snSubmit").click(function(){
var number = $("#number").val();
var mobMessage = $("#mobMessage").val();
//var pid = $("#pid").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'number1='+ number + '&mobMessage1='+ mobMessage;
if(true)
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "sendMessage.php",
data: dataString,
cache: false,
success: function(result){
if(result==='Failure'){
alert('SMS Failed');
}else{
alert('SMS sent successfully');
}
}
});
}
return false;
});
});

</script>
<script>

$(document).ready(function(){
$("#saSubmit").click(function(){
var allSMS = $("#allSMS").val();
var mobMessageall = $("#mobMessageall").val();
//var pid = $("#pid").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'allSMS1 ='+ allSMS + '&mobMessageall1='+ mobMessageall;
if(true)
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "sendMessage.php",
data: dataString,
cache: false,
success: function(result){
if(result==='Failure'){
alert('SMS Failed');
}else{
alert('SMS sent successfully');
}
}
});
}
return false;
});
});

</script>
<script>

$(document).ready(function(){
$("#seSubmit").click(function(){
var email= $("#email").val();
var emailSubject= $("#emailSubject").val();
var emailMessage = $("#emailMessage").val();

//var pid = $("#pid").val();
// Returns successful data submission message when the entered information is stored in database.
//var dataString = 'email1 ='+ email + '&emailSubject1 ='+ emailSubject + '&emailMessage1 ='+ emailMessage;
var dataString = 'email1='+ email + '&emailSubject1='+ emailSubject+ '&emailMessage1='+ emailMessage;
//alert(dataString);
if(true)
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "sendEmail.php",
data: dataString,
cache: false,
success: function(result){
if(result==='Failure'){
alert('SMS Failed');
}else{
alert('SMS sent successfully');
}
}
});
}
return false;
});
});

</script>
<script>

$(document).ready(function(){
$("#saeSubmit").click(function(){
var emailAll= $("#emailAll").val();
var emailSubjectall= $("#emailSubjectall").val();
var emailMessageall= $("#emailMessageall").val();

//var pid = $("#pid").val();
// Returns successful data submission message when the entered information is stored in database.
//var dataString = 'email1 ='+ email + '&emailSubject1 ='+ emailSubject + '&emailMessage1 ='+ emailMessage;
var dataString = 'emailAll1='+ emailAll+ '&emailSubjectall1='+ emailSubjectall+ '&emailMessageall1='+ emailMessageall;
//alert(dataString);
if(true)
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "sendEmail.php",
data: dataString,
cache: false,
success: function(result){
if(result==='Failure'){
alert('SMS Failed');
}else{
alert('SMS sent successfully');
}
}
});
}
return false;
});
});

</script>

</div>
</body>