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
                    <a hef="index.php?admin=det"><img src="/profile.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <!-- <img src="/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo"> -->
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li ><a href="index.php?admin=admin@"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="orders.php"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Orders</span></a></li>
                        <li><a href="dataip.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Upload</span></a></li>
                        <li ><a href="products.php"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Modifications</span></a></li>
                        <li class="active"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cart Items</span></a></li>
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
			
			
			
<form name="sod" id="sod" action="<?php echo $_REQUEST['redirurl']; ?>" method="post" >
<main class="row cd-main-content1">
<div class="col-sm-2 cd-filter-block">
					<h4>From</h4>
					
					<div class="cd-filter-content">
					  <input type="date" name="from" id="from" required/>	
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
				<div class="col-sm-2 cd-filter-block">
					<h4>Up to Date</h4>
					
					<div class="cd-filter-content">
						<input type="date" name="upto" id="upto" required/>
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
		     <div class="col-sm-2" style="padding-top:3%;">
<input type="submit" name="submit" id="submit" Value="Get" style="float:right; background-color:#73C6B6; color:white;  font-weight: bold; font-family:"Verdana";"/>

		     </div>
				
			</main>
			</form>
		
	<?php 
if (isset($_POST["submit"])){ ?>
<div class="user-dashboard">
<div class="row">
<?php 
 include 'session.php';
  include 'dbconnect.php';
$timeFrom = strtotime($_POST['from']);
$timeTo = strtotime($_POST['upto']);
$new_date1 = date('Y-m-d', $timeFrom);
$new_date2= date('Y-m-d', $timeTo);
  echo '<div>From '.$new_date1;
   echo ' Upto '.$new_date2; 

 $cart_items=mysqli_query($con, "SELECT p.*, c.* from  `cart_items` as `c` , `products` as `p` WHERE  c.product_id=p.id AND date(`created`) between '$new_date1' and '$new_date2'");
$rowcount=mysqli_num_rows($cart_items); 
echo '<br>Total Items:<b> '.$rowcount.'</b></div>'; 
if($rowcount!=0){     
			while($rws = mysqli_fetch_assoc($cart_items))
		         {		
		?>	  	
	  	<div class="col-md-4">
                  <div class="thumbnail"> 
<a href="https://www.thuneegadesigners.com/productdetails.php?product=<?php echo $rws['product_id'] ?>" style="text-decoration:none"> 
<img  src="https://www.thuneegadesigners.com/gallery/product-images/sarees/<?php echo $rws['productImage1'];?>" alt="Sarees" style="width:100px; height:100px;">
  
 <strong>Category&nbsp:</strong><?php echo htmlentities($rws['cat_name']);?>&nbsp&nbsp&nbsp&nbsp  
 <strong>Material&nbsp&nbsp&nbsp:</strong><?php echo htmlentities($rws['subCategory']);?>                   
  <br>
 <strong>Qty&nbsp:</strong><?php echo htmlentities($rws['quantity']);?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
 <strong>Price</strong>(<?php echo $rws['quantity']?>x<?php echo $rws['productPrice']?>):₹&nbsp<?php echo $rws['quantity']*$rws['productPrice']; ?>   </a>
</div></div>
		<?php 
			$total = $total +$rws['quantity']* $rws['productPrice'];
			$i++; 
			} 
                 
		?>
		<table> <!-- <tr>
			<td><strong>Total Price</strong></td>
			<td><strong>₹&nbsp<?php echo $total; ?></strong></td>
			<td><a href="payment.php" class="btn btn-info">Place Order</a></td>
		</tr> -->
	  </table>
 <?php } else{ ?>
<div style="color:red; font-size:20px;">No items in your cart</div>
        <?php }         ?>

</div>
</div>

	<?php }else{?>		
		

<div class="user-dashboard">
<div class="row">
	  
<?php
 include 'session.php';
  include 'dbconnect.php';
 $cart_items=mysqli_query($con, "SELECT p.*, c.* from  `cart_items` as `c` , `products` as `p` WHERE  c.product_id=p.id ");
$rowcount=mysqli_num_rows($cart_items); //echo $rowcount; 
if($rowcount!=0){     
			while($rws = mysqli_fetch_assoc($cart_items))
		         {		
		?>	  	
	  	<div class="col-md-4">
                  <div class="thumbnail"> 
<a href="https://www.thuneegadesigners.com/productdetails.php?product=<?php echo $rws['product_id'] ?>" style="text-decoration:none"> 
<img  src="https://www.thuneegadesigners.com/gallery/product-images/sarees/<?php echo $rws['productImage1'];?>" alt="Sarees" style="width:100px; height:100px;">
  
 <strong>Category&nbsp:</strong><?php echo htmlentities($rws['cat_name']);?>&nbsp&nbsp&nbsp&nbsp  
 <strong>Material&nbsp&nbsp&nbsp:</strong><?php echo htmlentities($rws['subCategory']);?>                   
  <br>
 <strong>Qty&nbsp:</strong><?php echo htmlentities($rws['quantity']);?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
 <strong>Price</strong>(<?php echo $rws['quantity']?>x<?php echo $rws['productPrice']?>):₹&nbsp<?php echo $rws['quantity']*$rws['productPrice']; ?>   </a>
</div></div>
		<?php 
			$total = $total +$rws['quantity']* $rws['productPrice'];
			$i++; 
			} 
                 
		?>
		<table> <!-- <tr>
			<td><strong>Total Price</strong></td>
			<td><strong>₹&nbsp<?php echo $total; ?></strong></td>
			<td><a href="payment.php" class="btn btn-info">Place Order</a></td>
		</tr> -->
	  </table>
 <?php } else{ ?>
<div style="color:red; font-size:20px;">No items in your cart</div>
        <?php }         ?>

</div>
</div>

<?php } ?>
</div>
</div>
</div>
</body>