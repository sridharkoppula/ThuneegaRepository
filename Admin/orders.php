<?php 
include 'session.php';
if($_SESSION['login_user']==''){
                          echo "
            <script type=\"text/javascript\">
            alert('Please Login');
            </script> ";
           header('Location:index.php');
                          }  
                          else if($_SESSION['login_user']=='admin@'){   ?>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">


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
                    <a hef="index.php?admin=admin@"><img src="/profile.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <!-- <img src="/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo"> -->
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="index.php?admin=det"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="active"><a href="orders.php"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders</span></a></li>
                        <li><a href="dataip.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upload</span></a></li>
                        <li ><a href="products.php"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Modifications</span></a></li>
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
 include 'session.php';
  include 'dbconnect.php';
  $order_items=mysqli_query($con, "SELECT p.*, c.* from  `orders` as `c` , `products` as `p` WHERE  c.product_id=p.id ");
$rowcount=mysqli_num_rows($order_items); //echo $rowcount; 
                         if($rowcount!=0){ ?> 

         
	  <table class="table">
          <tr> <th style="color:aqua;">Orders</th></tr>
	  	<tr>
	  		<th>S.NO</th>
                        <th>Date</th>
                        <th>user_id</th>
	  		<th>Product</th>
                        
                        <th>Quantity</th>
	  		<th>Price</th>
                        
	  	</tr> 
	<?php
                         $i=1;
		     
			while($r = mysqli_fetch_assoc($order_items))
		         {
			
		?>	
	<tr>   <?php  
                         ?> 
	  	<td><?php echo $i; ?></td>
                        <td><?php echo $r['added_date']; ?></td>
                         <td><?php 
                         $string = $r['user_id']; 
                         if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string))
				{
    				echo $string;
				}else{ 
				$user=mysqli_query($con, "SELECT `email` FROM `guest-user` WHERE `session_id`='".$string."'");
				$rs = mysqli_fetch_assoc($user);
				echo $rs['email'];
				}
                         ?>
                         </td>
	  		<td><a href="productdetails.php?product=<?php echo $r['product_id'] ?>"> 
<img  src="https://www.thuneegadesigners.com/gallery/product-images/sarees/<?php echo $r['productImage1'];?>" alt="Sarees" style="width:50px; height:50px;"></a></td>
                       
                        <td><?php echo $r['quantity']; ?></td>
	  		<td>₹<?php echo $r['quantity']*$r['productPrice']; ?></td>
                        
	  	</tr> 
		 <?php   
			$i++; 
			} 

      
		?> 
		
	  
</table> 

		
 <?php } else{ ?>
<div style="color:red; font-size:20px;">No Products</div>
        <?php }
         ?>




</div>
</div>
</div>
</div>
</div>
</body>
<?php } ?>