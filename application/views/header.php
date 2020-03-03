<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo 'Thuneega Designers'; ?></title>
        <meta name="keywords" content="online shopping, online shopping sites, online shopping india, india shopping, Online shopping site" />
        <meta name="description" content="Online Shopping for Women Fashion & Lifestyle. Buy Sarees, Dupattas, Blouses and Designer Wear for women.Free Shipping and COD in India "/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" />        		
        <meta property="og:description" content="Online Shopping for Women Fashion & Lifestyle. Buy Sarees, Dupattas, Blouses and Designer Wear for women.Free Shipping and COD in India" />
        <meta property="og:site_name" content="Thuneega Designers">
        <link rel="shortcut icon" type="image/png" href="https://thuneegadesigners.com/assets/images/favicon.ico"/>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://thuneegadesigners.com/assets/css/header.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<!------ Include the above in your HEAD tag ---------->
<body onload="">

<div class="container header-cust">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="https://thuneegadesigners.com/"><img src="https://thuneegadesigners.com/assets/images/logo.png" alt="Thuneega Designers"></a>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">			
            		<li class="dropdown mega-dropdown">
    				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
				<?php
				foreach ($result as $menu) { ?>
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header"><a href="<?php echo site_url('category/' . $menu->ITEM_COLLECTION_NAME) ?>" style="color: #272424 !important;"><?php echo ucfirst($menu->ITEM_COLLECTION_DESCRIPTION); ?></a></li>
							<?php
							 $cou = 0;
							 foreach ($subcat as $subcol) {
							 $cou++;
							 if ($cou <= 5 && $menu->ITEM_COLLECTION_CODE == $subcol->COLLECTION_CODE) {?>
							 <li><a href="<?php echo site_url('category/' . $subcol->COLLECTION_CAT_CODE); ?> "> <?php echo ucfirst($subcol->CATEGORY_NAME); ?></a>           </li>
							<?php }
							 if ($cou > 5 && $cou == 6 && $menu->ITEM_COLLECTION_CODE == $subcol->COLLECTION_CODE) { ?>
                                                             <a href="<?php echo site_url('Collections'); ?>" style="color: #184dea;">More ... >></a>  
							<?php }
							} ?>
                                                
							<li class="divider"></li>							
						</ul>
					</li>
					<?php }?>
				</ul>				
			</li>
            <li><a href="<?php echo site_url('contactus'); ?>">Contact Us</a></li>
            <li><a href="<?php echo site_url('feedback'); ?>">Feedback</a></li>
		</ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if ($_SESSION['user'] == '') { ?>
        	<li>        		
        		<a href="<?php echo site_url('login/reg') ?>" ><b><i class="glyphicon glyphicon-edit"></i>&nbspRegister</b></a>
        	</li>
        	<li> 
        	 <a href="<?php echo site_url('login/') ?>" ><b> <i class="glyphicon glyphicon-log-in"></i> &nbsp&nbspLog in</b></a>
                </li>
        <?php } else { ?>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="<?php echo site_url('settings'); ?>"><i class="glyphicon glyphicon-user"></i>&nbspHi,<?php echo $_SESSION['user']; ?></a></li>
          <li><a href="<?php echo site_url('orders'); ?>"><i class="glyphicon glyphicon-send"></i>&nbspOrders</a></li>
          <li><a href="<?php echo site_url('wishitems'); ?>"><i class="glyphicon glyphicon-bookmark"></i>&nbspWishlist</a></li>
          <li><a href="<?php echo site_url('settings'); ?>"><i class="glyphicon glyphicon-cog"></i>&nbspSettings</a></li>
          <li class="divider"></li>
          <li>
            <a href="<?php echo site_url('logout'); ?>" ><b><i class="glyphicon glyphicon-log-out"></i>Sign Out</b></a>
        </li>
          </ul>
        </li>
        <?php } ?>
        <li>        		
        	<a href="<?php echo site_url('orders') ?>" ><b><i class="glyphicon glyphicon-send"></i>&nbspOrders</b></a>
        </li>
        <li><a href="<?php echo site_url('cart/items'); ?>">My cart (<span id="ccount"><?php print_r($cart_count);?></span>) items</a></li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</div>
<div class="clear"></div>
<script>
    $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

 function ref() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/count'); ?>",
                    data: null,
                    cache: false,
                    success: function (result) {
                        $("#ccount").text(result);
                        alert(result);
                    }
                });
                //alert('Refresh');
            }
</script>