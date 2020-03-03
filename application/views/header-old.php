<?php
if (!isset($_SESSION)) {
    session_start();
    //$session = (object) ($_SESSION);    
}
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "";
}

$myTimeZone = date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d H:i:s");
//include_once("analyticstracking.php");
$serverroot = "https://thuneegadesigners.com/";
$Title = "Thuneega Designers - Online Shopping Sarees, Ethnic Wear India";
$Desc = "Online Shopping for Indian Ethnic Wear, Designer Sarees, Silk Sarees, Half Sarees, Blouses.";
$Kywds = "Sarees,Half Saree,Fashion, Blouses,Ready to wear";
$pageTitle = "Thuneega Designers";
?>
<!DOCTYPE html>

<html class="wf-inactive js  placeholder" lang="en" style="background-attachment: scroll;">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $pageTitle; ?></title>
        <meta name="keywords" content="online shopping, online shopping sites, online shopping india, india shopping, Online shopping site" />
        <meta name="description" content="Online Shopping for Women Fashion & Lifestyle. Buy Sarees, Dupattas, Blouses and Designer Wear for women.Free Shipping and COD in India "/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" />        		
        <meta property="og:description" content="Online Shopping for Women Fashion & Lifestyle. Buy Sarees, Dupattas, Blouses and Designer Wear for women.Free Shipping and COD in India" />
        <meta property="og:site_name" content="Thuneega Designers">

        <style type="text/css">
            .tk-proxima-nova{font-family: 'Whitney', sans-serif;}
        </style>
        <script>try {
                Typekit.load({async: true});
            } catch (e) {
            }</script>


        <script src="<?php echo $serverroot; ?>js/jquery.min.js" type="text/javascript"></script>  

        <script src="<?php echo $serverroot; ?>js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?php echo $serverroot; ?>js/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>

        <script type="text/javascript">
            var index = 0;
            index = 1;
        </script>
        <script src="<?php echo $serverroot; ?>js/jquery.smooth-scroll.min.js" type="text/javascript"></script> 

        <!-- Temporary -->
        <link href="<?php echo $serverroot; ?>assets/css/cs-everything.styles.scss.css" rel="stylesheet" media="screen">
        <link href="<?php echo $serverroot; ?>assets/css/cs-everything.global.scss.css" rel="stylesheet" media="screen">
        <link href="<?php echo $serverroot; ?>assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $serverroot; ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    </head>

    <body class="index-template notouch" cz-shortcut-listen="true"  style="background-attachment: scroll;">

        <!-- Header -->
        <header id="top" class="ev15 clearfix affix animated">
            <section class="top-header">
                <div class="top-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="top-header-inner">

                                <div class="right-area hidden-xs">
                                    <!-- Customer Links -->

                                    <ul class="unstyled">

                                        <?php if ($_SESSION['user'] == '') { ?>
                                            <li class="toolbar-customer login-account"> 
                                                <i class="glyphicon glyphicon-log-in"></i>                                        
                                                <a href="<?php echo site_url('login/') ?>" id="customer_login_link"><b>Log in</b></a>
                                            </li>
                                        <?php
                                        }
                                        if ($_SESSION['user'] == '') {
                                            ?>

                                            <li class="toolbar-customer create-account">

                                                <i class="glyphicon glyphicon-edit"></i>
                                                <a href="<?php echo site_url('login/reg') ?>" id="customer_register_link"> <b>Register</b></a>

                                            </li>  
<?php } else { ?>
                                            <style>
                                                .dropbtn {
                                                    background-color: transparent;
                                                    color: #FEF9E7;
                                                    padding: 1px;
                                                    font-size: 14px;
                                                    border: none;
                                                    cursor: pointer;
                                                    height:50px;
                                                    width:50px;
                                                }

                                                /* The container <div> - needed to position the dropdown content */
                                                .dropdown {
                                                    position: relative;
                                                    display: inline-block;
                                                }

                                                /* Dropdown Content (Hidden by Default) */
                                                .dropdown-content {
                                                    display: none;
                                                    position: absolute;
                                                    background-color: #f9f9f9;
                                                    min-width: 160px;
                                                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                                    z-index: 1;
                                                }

                                                /* Links inside the dropdown */
                                                .dropdown-content a {
                                                    color: black;
                                                    padding: 12px 16px;
                                                    text-decoration: none;
                                                    display: block;
                                                }

                                                /* Change color of dropdown links on hover */
                                                .dropdown-content a:hover {background-color: #f1f1f1}

                                                /* Show the dropdown menu on hover */
                                                .dropdown:hover .dropdown-content {
                                                    display: block;
                                                }

                                                /* Change the background color of the dropdown button when the dropdown content is shown */
                                                .dropdown:hover .dropbtn {
                                                    background-color: #F4F6F6;
                                                    color: black;
                                                }
                                            </style>
                                            <li>
                                                <div class="dropdown">
                                                    <i class="glyphicon glyphicon-user"></i> <button class="dropbtn" disabled ><b>Profile</b></button>
                                                    <div class="dropdown-content">

                                                        <a href="<?php echo site_url('settings'); ?>"><i class="glyphicon glyphicon-user"></i>&nbspHi,<?php echo $_SESSION['user']; ?></a>
                                                        <a href="<?php echo site_url('orders'); ?>"><i class="glyphicon glyphicon-send"></i>&nbspOrders</a>
                                                        <a href="<?php echo site_url('wishitems'); ?>"><i class="glyphicon glyphicon-bookmark"></i>&nbspWishlist</a>
                                                        <a href="<?php echo site_url('settings'); ?>"><i class="glyphicon glyphicon-cog"></i>&nbspSettings</a>
                                                    </div>
                                                </div>



                                            </li>
<?php } ?>
                                        <li class="toolbar-customer my-wishlist"><a href="<?php echo site_url('wishitems'); ?>"><i class="fas fa-heart"></i>&nbsp;Wishlist</a></li> 
                                        <li class="toolbar-customer my-wishlist"><a href="<?php echo site_url('orders'); ?>"><i class="glyphicon glyphicon-send"></i>&nbsp;Orders</a></li> 
<?php if ($_SESSION['user'] != '') { ?> 
                                            <li class="toolbar-customer login-account">
                                                <i class="glyphicon glyphicon-log-out"></i>                                        
                                                <a href="<?php echo site_url('logout'); ?>" id="customer_login_link"><b>Sign Out</b></a>
                                                </span>    
                                            </li>
<?php } ?>
                                        <!--    <li class="search-field">
                                                <a href="<?php echo $serverroot . 'search.php'; ?>" class="search dropdown-toggle dropdown-link" data-toggle="dropdown" title="Search Toolbar">
                                                    <i class="fas fa-search"></i> -->
                                        <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                        <i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
                                        </a>

                                        <div id="search-info" class="dropdown-menu" style="display: none;">
                                            <form class="search" action="<?php echo $serverroot . 'search.php'; ?>">
                                                <div class="collections-selector">
                                                    <select class="single-option-selector" data-option="collection-option" id="collection-option" name="collection">
                                                        <option value="all">All Collections</option>
                                                        <?php
                                                        foreach ($result as $menu) {
                                                            ?>
                                                            <option value="<?php echo $menu->ITEM_COLLECTION_CODE ?>"><?php echo $menu->ITEM_COLLECTION_NAME ?></option>
<?php } ?>                        



                                                    </select>
                                                </div>
                                                <input type="hidden" name="type" value="product">
                                                <input type="image" src="./Everything Clothing_files/icon-search.png" alt="Go" id="go">
                                                <input type="text" name="q" class="search_box" placeholder="Search" value="">
                                            </form> 
                                            <div class="fix_search_dropdown" style="opacity:0; height:200px;background:transparent;"></div>
                                        </div> 
                                        <script>
            $(".search-field")
                    .mouseover(function () {
                        $("#search-info").addClass("search-dropped-down");
                    })
                    .mouseout(function () {
                        $("#search-info").removeClass("search-dropped-down");
                    });
                                        </script>
                                        </li>

                                    </ul>

                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main-header">
                <div class="main-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="main-header-inner">
                                <div class="left-area">
                                    <div class="nav-logo">
                                        <div class="logo">
                                            <h1><a href="<?php echo site_url(); ?>"><img src="<?php echo $serverroot; ?>default-images/logo.png" alt="Thuneega Designers Logo"></a></h1>
                                            <h1 style="display:none"><a href="https://cs-everything-clothing.myshopify.com/">Everything Clothing</a></h1>
                                        </div>
                                    </div>
                                    <div class="sticky-logo">
                                        <div class="logo">
                                            <h1><a href="<?php echo site_url(); ?>"><img src="<?php echo $serverroot; ?>default-images/scrolldown-logo.png" alt="Thuneega Designers Logo"></a></h1>
                                            <h1 style="display:none"><a href="https://cs-everything-clothing.myshopify.com/">Everything Clothing</a></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-area hidden-xs">
                                    <div class="nav-header">
                                        <div class="nav-header-wrapper">
                                            <div class="nav-header-inner">
                                                <div class="navi-group">
                                                    <ul class="navigation-left hidden-xs" style="font-size: 23px;">
                                                        <li class="nav-item active">
                                                            <a href="<?php echo site_url(); ?>">
                                                                <span style="text-transform: capitalize;">Home</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropdown mega-menu">
                                                            <a href="<?php echo site_url('Collections'); ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                                <span style="text-transform: capitalize;">Collections</span>
                                                                <i class="fas fa-angle-down"></i>
                                                                <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                                            </a>
                                                            <div class="megamenu-container col-4 megamenu-container-1 dropdown-menu" style="width: 1170px; display: none;">

                                                                <ul class="sub-mega-menu">

                                                                    <?php
                                                                    foreach ($result as $menu) {
                                                                        ?>

                                                                        <li class="col-links col-links01">
                                                                            <ul>
                                                                                <li class="list-title" style="text-transform:none;font-family: 'Whitney', sans-serif;"><a href="<?php echo site_url('category/' . $menu->ITEM_COLLECTION_NAME) ?>" style="color: #272424 !important;"><?php echo ucfirst($menu->ITEM_COLLECTION_DESCRIPTION); ?></a></li>
                                                                                <?php
                                                                                $cou = 0;
                                                                                foreach ($subcat as $subcol) {
                                                                                    $cou++;

                                                                                    if ($cou <= 5 && $menu->ITEM_COLLECTION_CODE == $subcol->COLLECTION_CODE) {
                                                                                        ?>
                                                                                        <li class="list-unstyled li-sub-mega">
                                                                                            <a href="<?php echo site_url('category/' . $subcol->COLLECTION_CAT_CODE); ?> "> <?php echo ucfirst($subcol->CATEGORY_NAME); ?></a>           
                                                                                        </li>

                                                                                        <?php
                                                                                    }
                                                                                    if ($cou > 5 && $cou == 6 && $menu->ITEM_COLLECTION_CODE == $subcol->COLLECTION_CODE) {
                                                                                        ?>
                                                                                        <li class="list-unstyled li-sub-mega">
                                                                                            <a href="<?php echo site_url('category/index/' . $menu->ITEM_COLLECTION_NAME); ?>" style="color: #184dea;">More ... >></a>  
                                                                                        </li>
                                                                                        <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </ul>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($cou <= 4) { ?>
                                                                        <li class="col-img" style="width: 22%;"> <img src="<?php echo $serverroot ?>gallery/factory-images/mega-bg-01.png" alt="Mega menu image 1"> </li> 
<?php } ?>  
                                                                </ul>
                                                                <script>
                                                                    $(window).ready(function ($) {
                                                                        $('.megamenu-container-1').css("width", $('.main-header-inner').innerWidth());
                                                                    });
                                                                    $(window).resize(function () {
                                                                        $('.megamenu-container-1').css("width", $('.main-header-inner').innerWidth());
                                                                    });
                                                                </script>
                                                            </div> 
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo site_url('offers/') ?>">
                                                                <span style="text-transform: capitalize;">Offers Zone </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo site_url('contactus'); ?>">
                                                                <span style="text-transform: capitalize;">Contact us </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item" style=" color:black; font-size:14px; font-weight:bold;">
                                                            <a href="<?php echo site_url('contactus/feedback') ?>" >Feedback</a>
                                                        </li>





                                                        <li class="nav-item dropdown navigation hidden">
                                                            <a href="<?php echo $serverroot ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                                <span>Kids</span>
                                                                <i class="fas fa-angle-down"></i>
                                                                <i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
                                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" style="display: none;">
                                                                <li class="list-title">Kids</li>
                                                                <li class="li-sub-mega">
                                                                    <a tabindex="-1" href="<?php echo $serverroot ?>">Men's Clothing</a>
                                                                </li>
                                                                <li class="li-sub-mega">
                                                                    <a tabindex="-1" href="<?php echo $serverroot ?>">Women's Clothing</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="refresh" >
                                        <div id="cart-target" class="toolbar-cart open">
                                            <a href="<?php echo site_url('cart/items'); ?>" >
                                                <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
                                                <div class="num-items-in-cart">
                                                    <div class="block-cart">
                                                        <span class="icon"><span id="ccount" class="number"><?php echo $cart_count; ?></span></span> 

                                                    </div>   
                                                </div>
                                            </a>
                                            <div id="cart-info" class="dropdown-menu" style="display: none;">
                                                <div id="cart-content"><div id="ccount" class="empty text-center"><em><?php echo $cart_count; ?> items are in your cart <a href="<?php echo site_url('cart/items'); ?>" class="btn btn-2">View Cart</a></em></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mobile-nav-header">
                <div class="mobile-nav-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-nav-header-inner">                                            
                                <div class="mobile-top-navigation visible-xs">      
                                    <button id="showLeftPush" class="visible-xs"><i class="fas fa-bars fa-2x"></i></button>
                                    <ul class="list-inline">        

                                        <li class="is-mobile-login">
                                            <div class="btn-group">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <ul class="customer dropdown-menu">

                                                    <li class="logout">
                                                        <a href="<?php echo site_url('login/') ?>"><b>Login</b></a>
                                                    </li>
                                                    <li class="account">
                                                        <a href="<?php echo site_url('login/reg') ?>"><b>Create an account</b></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>



                                        <li class="is-mobile-cart">
                                            <a href="<?php echo site_url('cart/items'); ?>" title="Shopping Cart">
                                                <div class="num-items-in-cart">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="icon">
                                                        <span id="ccount" class="number"><?php echo $cart_count; ?></span>
                                                    </span>
                                                    <div class="ajax-subtotal" style="display:none;"><span class="money" data-currency-usd="$0.00" data-currency="USD">$0.00</span></div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="is-mobile-nav-menu nav-menu visible-xs" id="is-mobile-nav-menu" style=" font-size: 16px;">
                                    <ul class="nav navbar-nav hoverMenuWrapper">
                                        <li class="nav-item active">
                                            <a href="<?php echo site_url(); ?>">
                                                <span>Home</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo site_url('Collections'); ?>">
                                                <span>Collections</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('offers/'); ?>">
                                                <span>Offers Zone</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('contactus'); ?>">
                                                <i class="glyphicon glyphicon-earphone"></i><span>&nbsp;Contact Us</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo site_url('login/') ?>">
                                                <i class="glyphicon glyphicon-log-in"></i> <span>Login</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('login/reg') ?>">
                                                <i class="glyphicon glyphicon-pencil"></i><span>&nbsp;Register</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('wishitems'); ?>">
                                                <i class="fas fa-heart"></i>&nbsp;Wishlist</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('orders'); ?>">
                                                <i class="glyphicon glyphicon-send"></i>&nbsp;Orders</a>
                                        </li> 

                                        <li class="nav-item dropdown navigation hidden">
                                            <a href="<?php echo $serverroot ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                <span>Kids</span>
                                                <i class="fas fa-angle-down"></i>
                                                <i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="list-title">Kids</li>
                                                <li class="li-sub-mega">
                                                    <a tabindex="-1" href="<?php echo site_url('sareesoftheday.php') ?>">Men&quote;s Clothing</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mobile-nav">  
                <div class="row mobile-nav-wrapper">
                    <nav class="mobile clearfix">
                        <div class="flyout" style="display: none;">
                            <ul class="clearfix">
                                <li>
                                    <a href="<?php echo $serverroot ?>" class=" current navlink"><span>Home</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Collections'); ?>" class=" navlink"><span>COLLECTIONS</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('offers/') ?>" class=" navlink"><span>Offers Zone</span></a>
                                </li> 
                                <li>
                                    <a href="<?php echo $serverroot . 'contactus' ?>" class=" navlink"><span>CONTACT US</span></a>
                                </li> 
                                <li class="customer-links">Log in</li>
                                <li class="customer-links">Register</li>
                            </ul>
                        </div>
                    </nav>
                </div>  
            </section>


            <script>
                function addaffix(scr) {
                    if ($(window).innerWidth() >= 992) {
                        if (scr > 53) {
                            if (!$('#top').hasClass('baffix')) {
                                $('#top').addClass('affix').addClass('animated');
                            }
                        } else {
                            if ($('#top').hasClass('affix')) {
                                $('#top').prev().remove();
                                $('#top').removeClass('affix').removeClass('animated');
                            }
                        }
                    } else
                        $('#top').removeClass('affix');
                }
                $(window).scroll(function () {
                    var scrollTop = $(this).scrollTop();
                    addaffix(scrollTop);
                });
                $(window).resize(function () {
                    var scrollTop = $(this).scrollTop();
                    addaffix(scrollTop);
                });
            </script>

        </header> 
        <div class="fix-sticky"></div>




        <script>
            var refresh;
            //setInterval(ref, 500);
           /* function ref() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/count'); ?>",
                    data: null,
                    cache: false,
                    success: function (result) {
                        $("#ccount").text(result);
                        //alert(result);
                    }
                });
                //alert('Refresh');
            }*/
            function logOut() {
                //alert("Logout");
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Signout'); ?>",
                    data: "NA",
                    cache: false,
                    success: function (result) {
                        if (result === 'Please login') {
                            alert('Signed Out Successfully');
                            //window.location = "<?php //echo site_url('feedback.php?id=' + pid);   ?>";


                        } else {
                            alert(result);
                        }
                    }
                });
            }
        </script>
