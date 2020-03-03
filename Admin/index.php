<title>Admin</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<?php
 //include 'session.php';
  include 'dbconnect.php';
if(isset($_GET['admin']) & !empty($_GET['admin'])){
$var=$_GET['admin'];
if($var=="admin@"){
//echo 'Success'; 
$_SESSION['login_user']='admin@';
                  if($_SESSION['login_user']=='')	{
         
            //echo $_SESSION['login_user'];
          header('Location:index.php');
                          }  
                          else if($_SESSION['login_user']=='admin@'){   ?>

<style>
body { padding-top:20px; }
.panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }
</style>
<script>
$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});


</script>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation" style="width:15%;">
                <div class="logo">
                    <a hef="index.php?admin=det"><img src="/profile.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <!-- <img src="/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo"> -->
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="orders.php"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders</span></a></li>
                        <li><a href="dataip.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upload</span></a></li>
                        <li><a href="products.php"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Modifications</span></a></li>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cart Items</span></a></li>
                        <li><a href="sms.php"><i class="fa fa-paper-plane" aria-hidden="true"></i><span class="hidden-xs hidden-sm">SMS/Email</span></a></li>
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
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                   <li class="hidden-xs"><a href="https://www.thuneegadesigners.com" class="add-project" data-toggle="modal" >Home</a></li>
                                   <li><a href="logout.php"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>&nbsp<b>Log out</b></a></li> 
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
 
                
                <div class="user-dashboard">  
               
                    <div class="row">
                       
                        <div class="col-xs-6 col-md-10">
                        <?php
                        $visitors=mysqli_query($con, "SELECT * from  `visitors_table`  ");
			$rowcount=mysqli_num_rows($visitors); ?>
                         <a  class="btn btn-success btn-lg" role="button" style="margin-top:10px;"><span class="glyphicon glyphicon-user"  disabled></span> <br/>Visitors<?php echo ' : '.$rowcount; ?></a>
                          <a href="stock.php" class="btn btn-info btn-lg" role="button" style="margin-top:10px;"><span class="fa fa-bar-chart"></span> <br/>Stock Availability</a>
                          <a href="products.php" class="btn btn-primary btn-lg" role="button" style="margin-top:10px;"><span class="glyphicon glyphicon-picture"></span> <br/>Edit based on Image</a>
                         <!-- <a href="#" class="btn btn-primary btn-lg" role="button" style="margin-top:10px;"><span class="glyphicon glyphicon-tag"></span> <br/>Tags</a> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
<!-- Login -->
<?php } }}

else{
  if($_SESSION['login_user']=='admin@'){
  //header('Location: https://www.thuneegadesigners.com/Admin/index.php?admin=admin@');
  }?>
        <!-- stop PHP Code -->
      <?php
 //include '/session.php';
  include 'dbconnect.php'; ?>  
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
</head>
<body>
<div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="" method="post" name="signin">
                <fieldset>
                    <legend>Sign In</legend>
                     <div class="form-group">
                        <input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
                        <label for="name">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control" />
                        
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control"  />
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" id="submit" name="signin" value="Sign In" class="btn btn-primary" />
                    </div>
                    <a href="forgotpassword.php">Forgot Password? </a>

                </fieldset>
            </form>
           <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
           </div>
        </div>
       <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Not yet Registered? <a href="reg.php">Register Here</a>
        </div>
    </div>
 </div>
</div>
<script src="/sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="/sweetalert-master/dist/sweetalert.css">
<script>

$(document).ready(function(){
$("#submit").click(function(){
var email = $("#email").val();
var password = $("#password").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'email1='+ email + '&password1='+ password ;
if(email=='')
{
swal({
  title: "Error!",
  text: "Please enter Email Address!",
  type: "error",
  confirmButtonText: "OK"
});
//alert("Please enter Email Address");
}
else if(password==''){
swal({
  title: "Error!",
  text: "Please enter Password!",
  type: "error",
  confirmButtonText: "OK"
});
//alert("Please enter Password");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "loginprocess.php",
data: dataString,
cache: false,
success: function(result){
if(result=='Invalid Email or Password'){
//alert(result);

swal({
  title: "Error!",
  text: "Invalid User Name or Password!",
  type: "error",
  confirmButtonText: "OK"
});


}else{
//alert(result);
window.location = 'https://www.thuneegadesigners.com/Admin/index.php?admin='+result;
//window.history.go(-1);
}
}
});
}
return false;
});
});

</script>
</body>
</html>
<?php } ?>