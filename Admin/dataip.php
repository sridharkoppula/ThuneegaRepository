<title>Edit</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<script>
$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<?php
//session_start();
include 'session.php';
if($user_check == 'admin@'){
?>
        
        <!DOCTYPE html>
<html>
<head>
    <style>
    .form-control{
    width:70%;
    }
    </style>
</head>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation" style="width:15%;">
                <div class="logo">
                    <a hef="index.php?admin=admin@"><img src="/profile.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <!-- <img src="/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo"> -->
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="index.php?admin=det"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="orders.php"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders</span></a></li>
                        <li class="active"><a href="dataip.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upload</span></a></li>
                        <li  ><a href="products.php"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Modifications</span></a></li>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cart Items</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
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
                                   <li><a href="logout.php"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>&nbsp<b>Log out</b></a></li> 
                                    
                                    
                                </ul>
                            </div>
                        </div>
			</header>
			</div>
			


<div class="user-dashboard">


	<div class="row">
<?php
//facebook API
require "main.php";
	
	 
	if (isset($_SESSION['token'])) {
	  try {
          
          $res = $fb->get('/me/accounts', $_SESSION['token']);
          $res = $res->getDecodedBody();
          //echo $_SESSION['token']."<br>";
          foreach($res['data'] as $page){
              echo $page['id'] . " - " . $page['name'] . "<br>";
              
          }
          
	  } catch( Facebook\Exceptions\FacebookSDKException $e ) {
	    echo $e->getMessage();
	    exit;
	  }
	}
	else{
		$helper = $fb->getRedirectLoginHelper();
		$permissions = ['email', 'user_posts', 'manage_pages', 'publish_actions', 'publish_pages'];
		$callback    = 'https://www.thuneegadesigners.com/Admin/app.php';
		$loginUrl    = $helper->getLoginUrl($callback, $permissions);
		echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <fieldset style="margin-left:15%;">
                    <legend>Product Upload</legend>

                    <div class="form-group">
                        <label for="name">Category Name</label>
           <!-- <input type="text" name="cat" placeholder="Saree/Dress" required value="<?php if($error) echo $fname; ?>" class="form-control" /> -->
                         <select class="selectpicker" data-style="btn-success" name="cat" required>
                                <option>saree</option>
                                <option>dress</option>
                                <option>blouse</option>
                        </select>
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                   <div class="form-group">
                        <label for="name">Product Image 1</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Main Image" required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Product Image 2</label>
                        <input type="file" name="fileToUpload2" id="fileToUpload" placeholder="Image 2"   class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Product Image 3</label>
                        <input type="file" name="fileToUpload3" id="fileToUpload" placeholder="Image 3"   class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Subcategory Name</label>
                        <input type="text" name="subcat" placeholder="chiffon,net...." required  class="form-control" />
                        
                    </div>

                    <div class="form-group">
                        <label for="name">Color</label>
                        <input type="text" name="color" placeholder="red,blue...." required value="<?php if($error) echo $email;?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
		    <div class="form-group">
                        <label for="name">Tags for Search</label>
                        <input type="text" name="tags" placeholder="saree,red,silk...." required  class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Dealer</label>
                        <input type="text" name="dealer" placeholder="thuneega" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Price</label>
                        <input type="text" name="price" placeholder="Price" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Original Price</label>
                        <input type="text" name="orgprice" placeholder="Original Price"  value="<?php if($error) echo $mobile; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Disc Percent</label>
                        <input type="text" name="percent" placeholder="10%"   class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Size/Length</label>
                        <input type="text" name="size" placeholder="6.3m or S, M,L..." required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Introduction</label>
                        <input type="text" name="intro" placeholder="Small description" required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" rows="5" cols="40" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <h5>Product Details</h5>
                        <label for="name">Product Name</label>
                        <input type="text" name="fabric" placeholder="Product Name" required  class="form-control" />
                        <label for="name">Color</label>
                        <input type="text" name="det-color" placeholder="Color" required  class="form-control" />
                        <label for="name">Occation Type</label>
                        <input type="text" name="occ-type" placeholder="occation type" required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Material Care</label>
                        <input type="text" name="care" placeholder="Machine Wash..." required  class="form-control" />
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Shipping Charge</label>
                        <input type="text" name="ship" placeholder="0" required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Quantity</label>
                        <input type="text" name="quant" placeholder="1" required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Visibility</label>
                        <input type="text" name="visible" placeholder="yes/no" required  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Facebook Visibility</label>
                        <input type="text" name="fb" placeholder="yes/no" required  class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary" />
                    </div>  
  
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
        
        <?php } 
        else{
        echo "
            <script type=\"text/javascript\">
            alert('Please Login as Admin');
            </script> ";
            header('Location:index.php');
        }?>