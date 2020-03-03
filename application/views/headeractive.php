<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
    $session = (object) ($_SESSION);
}

$serverroot ="http://www.thuneegadesigners.com/";
$Title = "Thuneega Designers - Online Shopping Sarees, Ethnic Wear India";
$Desc = "Online Shopping for Indian Ethnic Wear, Designer Sarees, Silk Sarees, Half Sarees, Blouses.";
$Kywds = "Sarees,Half Saree,Fashion, Blouses,Ready to wear";
?>
<!DOCTYPE html>

<html class="wf-inactive js  placeholder" lang="en" style="background-attachment: scroll;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $pageTitle; ?></title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
body{
font-family: 'Josefin Sans', sans-serif;
}
</style>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $serverroot; ?>default-images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo (isset($fbpageTitle) && !empty($fbpageTitle)) ? $fbpageTitle : $pageTitle; ?>" />		
        <meta property="og:description" content="<?php echo $pageDescription; ?>" />
        <meta property="og:image" content="<?php echo $fbshareimage; ?>">
        <meta property="og:url" content="<?php echo $siteurl->getCurPageURL(); ?>">
        <meta property="og:site_name" content="Thuneega Designers">

        <link rel="stylesheet" href="<?php echo $serverroot; ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $serverroot; ?>css/styles.css">
        <link href="<?php echo $serverroot; ?>css/social-buttons.scss.css" rel="stylesheet" type="text/css" media="all">
        <script async="" src="<?php echo $serverroot; ?>js/fbevents.js"></script>
        <script type="text/javascript" async="" src="<?php echo $serverroot; ?>js/spr.js"></script>
        <script async="" src="<?php echo $serverroot; ?>js/analytics.js"></script>
        <script async="" src="<?php echo $serverroot; ?>js/fbds.js"></script>
        <script type="text/javascript" async="" src="<?php echo $serverroot; ?>js/trekkie.storefront.min.js"></script>
        <script type="text/javascript" async="" src="<?php echo $serverroot; ?>js/shopify_stats.js"></script>
        <script src="<?php echo $serverroot; ?>js/vlu7umk.js"></script>
        <style type="text/css">
            .tk-proxima-nova{font-family: 'Josefin Sans', sans-serif;}
        </style>
        <script>try {
        Typekit.load({async: true});
    } catch (e) {
    }</script>
        <link rel="stylesheet" type="text/css" href="<?php echo $serverroot; ?>css/css-file.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $serverroot; ?>css/css-file1.css">
        <link href="<?php echo $serverroot; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $serverroot; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $serverroot; ?>css/animate.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $serverroot; ?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">    
        <link href="<?php echo $serverroot; ?>css/cs-everything.global.scss.css" rel="stylesheet" type="text/css" media="all"> 
        <link href="<?php echo $serverroot; ?>css/cs-everything.styles.scss.css" rel="stylesheet" type="text/css" media="all">  
        <script src="<?php echo $serverroot; ?>js/html5shiv.js" type="text/javascript"></script>


        <script>

            // (function() {
            // function asyncLoad() {
            // var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=cs-everything-clothing.myshopify.com"]; 
            // for (var i = 0; i < urls.length; i++) { 
            // var s = document.createElement('script'); 
            // s.type = 'text/javascript';
            // s.async = true;
            // s.src = urls[i]; 
            // var x = document.getElementsByTagName('script')[0]; 
            // x.parentNode.insertBefore(s, x); 
            // } 
            // }
            // window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false); 
            // })(); 

        </script>
        <script id="__st">
        <!-- var __st={"a":10823216,"offset":-18000,"reqid":"4c215fea-0353-4aa0-916e-6892ac3dc5a7","pageurl":"cs-everything-clothing.myshopify.com\/","u":"11086906b1f2","p":"home"}; -->
        </script>
        <script>
        <!-- (function() { -->
        <!-- var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; -->
        <!-- s.src = '//cdn.shopify.com/s/javascripts/shopify_stats.js?v=6'; -->
        <!-- var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); -->
        <!-- })(); -->
        </script>


        <script async="" src="<?php echo $serverroot; ?>js/shop_events_listener.js"></script>
        <script src="<?php echo $serverroot; ?>js/jquery.min.js" type="text/javascript"></script>  
        <script src="<?php echo $serverroot; ?>js/option_selection.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/api.jquery.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/scripts.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/social-buttons.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/jquery.tweet.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/jquery.fancybox.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <style type="text/css">.fb-margin{margin-right:17px;}</style>
        <script async="true" type="text/javascript" src="<?php echo $serverroot; ?>js/roundtrip.js"></script>
        <script async="true" type="text/javascript" src="<?php echo $serverroot; ?>js/IE5C.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $serverroot; ?>css/spr.css" media="screen">
        <script type="text/javascript" src="<?php echo $serverroot; ?>js/jquery.min.js"></script>
        <script src="<?php echo $serverroot; ?>js/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>

        <script type="text/javascript">
           var index = 0;
           index = 1;
        </script>
        <script src="<?php echo $serverroot; ?>js/modernizr.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/classie.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/jquery.smooth-scroll.min.js" type="text/javascript"></script>  
        <script src="<?php echo $serverroot; ?>js/jquery.bxslider.min.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/owl.carousel.min.js" type="text/javascript"></script>  
        <script src="<?php echo $serverroot; ?>js/cs-everything.cart.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/cs-everything.script.js" type="text/javascript"></script>
        <script type="text/javascript">

            jQuery(document).ready(function ($) {
                $('#quick-shop-modal').on('hidden.bs.modal', function () {
                    $('.zoomContainer').css('z-index', '1');
                    $('#top').removeClass('z-idx');
                })

                $('#quick-shop-modal').on('shown.bs.modal', function () {
                    $('#top').addClass('z-idx');
                    $('.modal-dialog').addClass("animated");
                    imagesLoaded('#quick-shop-modal', function () {
                        updateScrollThumbsQS();
                        $("#gallery_main_qs .qs-vertical-slider").owlCarousel({
                            navigation: true,
                            pagination: false,
                            items: 3,
                            slideSpeed: 200,
                            paginationSpeed: 800,
                            rewindSpeed: 1000,
                            itemsDesktop: [1199, 3],
                            itemsDesktopSmall: [979, 2],
                            itemsTablet: [768, 2],
                            itemsTabletSmall: [540, 1],
                            itemsMobile: [360, 1],
                            navigationText: ['<i class="fa fa-angle-left" title="Previous" data-toggle="tooltip" data-placement="top"></i>', '<i class="fa fa-angle-right" title="Next" data-toggle="tooltip" data-placement="top"></i>']
                        });
                        var delayLoadingQS = '';
                        delayLoadingQS = setInterval(function () {
                            quickShopModalBackground.hide();
                            $('.zoomContainer').css('z-index', '2000');
                            $('#quick-shop-modal .modal-body').resize();
                            clearInterval(delayLoadingQS);
                        }, 500);
                    });
                });

                var quickShopModal = $('#quick-shop-modal');
                var quickShopContainer = $('#quick-shop-container');
                var quickShopImage = $('#quick-shop-image');
                var quickShopTitle = $('#quick-shop-title');
                var quickShopRating = $('.rating-star');
                var quickShopDescription = $('#quick-shop-description');
                var quickShopVariantsContainer = $('#quick-shop-variants-container');
                var quickShopPriceContainer = $('#quick-shop-price-container');
                var quickShopAddButton = $('#quick-shop-add');
                var quickShopAddToCartButton = $('#quick-shop-add');
                var quickShopTags = $('#quick-shop-tags');
                var quickShopProductActions = $('#quick-shop-product-actions');
                var quickShopModalBackground = $('#quick-shop-modal .quick-shop-modal-bg');

                $('body').on(clickEv, '.quick_shop:not(.unavailable)', function (event) {
                    var quickShopImage = $('#quick-shop-image');
                    var $this = $(this);
                    var product_json = $this.find('.product-json').html();
                    var selectedProduct = JSON.parse(product_json);
                    var selectedProductID = selectedProduct.id;

                    // Update add button
                    quickShopAddButton.data('product-id', selectedProductID);

                    // Update image
                    quickShopImage.empty();
                    quickShopImage.html('<div id="featuted-image" class="main-image featured"><img class="img-zoom img-responsive image-fly" src="' + Shopify.resizeImage(selectedProduct.featured_image, "large") + '" data-zoom-image="' + selectedProduct.featured_image + '" alt="" /></div>');
                    quickShopImage.append('<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini"><div class="qs-vertical-slider"></div></div>');
                    quickShopImage.append('<div class="vertical-slider"></div>');
                    var qs_images = selectedProduct.images;
                    $.each(qs_images, function (index, value) {
                        if (index)
                            quickShopImage.find('.qs-vertical-slider').append('<a class="image-thumb" href="' + value + '" alt="" data-image="' + Shopify.resizeImage(value, 'large') + '" data-zoom-image="' + Shopify.resizeImage(value, 'original') + '"><img src="' + Shopify.resizeImage(value, "small") + '" alt="" /></a>');
                        else
                            quickShopImage.find('.qs-vertical-slider').append('<a class="image-thumb active" href="' + value + '" alt="" data-image="' + Shopify.resizeImage(value, 'large') + '" data-zoom-image="' + Shopify.resizeImage(value, 'original') + '"><img src="' + Shopify.resizeImage(value, "small") + '" alt="" /></a>');
                    });


                    // Update title
                    quickShopTitle.html('<a href="/products/' + selectedProduct.handle + '">' + selectedProduct.title + '</a>');

                    // Update Rating Review
                    quickShopRating.html('<span class="shopify-product-reviews-badge" data-id="' + selectedProduct.id + '"></span>');

                    // Update description
                    quickShopDescription.html(selectedProduct.description.substring(0, 140) + "...");

                    // Generate variants
                    var productVariants = selectedProduct.variants;
                    var productVariantsCount = productVariants.length;

                    quickShopPriceContainer.html('');
                    quickShopVariantsContainer.html('');
                    quickShopAddToCartButton.removeAttr('disabled').fadeTo(200, 1);

                    if (productVariantsCount > 1) {
                        // Reveal variants container
                        quickShopVariantsContainer.show();

                        // Build variants element
                        var quickShopVariantElement = $('<select>', {'id': ('#quick-shop-variants-' + selectedProductID), 'name': 'id'});
                        var quickShopVariantOptions = '';

                        for (var i = 0; i < productVariantsCount; i++) {
                            quickShopVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
                        }
                        ;

                        // Add variants element to page
                        quickShopVariantElement.append(quickShopVariantOptions);
                        quickShopVariantsContainer.append(quickShopVariantElement);

                        // Bind variants to OptionSelect JS
                        new Shopify.OptionSelectors(('#quick-shop-variants-' + selectedProductID), {product: selectedProduct, onVariantSelected: selectOptionCallback});

                        // Add label if only one product option and it isn't 'Title'.
                        if (selectedProduct.options.length == 1 && selectedProduct.options[0] != 'Title') {
                            $('#quick-shop-product-actions .selector-wrapper:eq(0)').prepend('<label>' + selectedProduct.options[0] + '</label>');
                        }

                        // Auto-select first available variant on page load.
                        var found_one_in_stock = false;
                        for (var i = 0; i < selectedProduct.variants.length; i++) {
                            var variant = selectedProduct.variants[i];
                            if (variant.available && found_one_in_stock == false) {
                                found_one_in_stock = true;
                                for (var j = 0; j < variant.options.length; j++) {
                                    $('.single-option-selector:eq(' + j + ')').val(variant.options[j]).trigger('change');
                                }
                            }
                        }



                    } else { // If product only has a single variant    
                        // Hide unnecessary variants container
                        quickShopVariantsContainer.hide();

                        // Build variants element
                        var quickShopVariantElement = $('<select>', {'id': ('#quick-shop-variants-' + selectedProductID), 'name': 'id'});
                        var quickShopVariantOptions = '';

                        for (var i = 0; i < productVariantsCount; i++) {
                            quickShopVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
                        }
                        ;

                        // Add variants element to page
                        quickShopVariantElement.append(quickShopVariantOptions);
                        quickShopVariantsContainer.append(quickShopVariantElement);

                        // Add tags
                        quickShopTags.html('translation missing: en.products.general.tag' + selectedProduct.tags);

                        // Update the add button to include correct variant id
                        quickShopAddToCartButton.data('variant-id', productVariants[0].id);

                        // Determine if product is on sale
                        if (productVariants[0].compare_at_price > 0 && productVariants[0].compare_at_price > productVariants[0].price) {
                            quickShopPriceContainer.html('<del class="price_compare">' + Shopify.formatMoney(productVariants[0].compare_at_price, "<span class='money'>${{amount}}</span>") + '</del>' + '<span class="price_sale">' + Shopify.formatMoney(productVariants[0].price, "<span class='money'>${{amount}}</span>") + '</span>');
                        } else {
                            quickShopPriceContainer.html('<span class="price">' + Shopify.formatMoney(productVariants[0].price, "<span class='money'>${{amount}}</span>") + '</span>');
                        }
                    } // END of (productVariantsCount > 1)


                    // Update currency
                    currenciesCallbackSpecial('#quick-shop-modal span.money');


                });

                /* selectOptionCallback
                 ===================================== */
                var selectOptionCallback = function (variant, selector) {
                    // selected a valid and in stock variant
                    if (variant && (variant.inventory_quantity > 0 || (variant.inventory_quantity <= 0 && variant.inventory_policy == 'continue'))) {
                        quickShopAddToCartButton.data('variant-id', variant.id);
                        quickShopAddToCartButton.removeAttr('disabled').fadeTo(200, 1);
                        // determine if variant is on sale
                        if (variant.compare_at_price > 0 && variant.compare_at_price > variant.price) {
                            quickShopPriceContainer.html('<del class="price_compare">' + Shopify.formatMoney(variant.compare_at_price, "<span class='money'>${{amount}}</span>") + '</del>' + '<span class="price_sale">' + Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span>');
                        } else {
                            quickShopPriceContainer.html('<span class="price">' + Shopify.formatMoney(variant.price, "<span class='money'>${{amount}}</span>") + '</span>');
                        }
                        ;
                        // selected an invalid or out of stock variant 
                    } else {
                        // variant doesn't exist
                        quickShopAddToCartButton.attr('disabled', 'disabled').fadeTo(200, 0.5);
                        var message = variant ? "Sold Out" : "Unavailable";
                        quickShopPriceContainer.html('<span class="unavailable">' + message + '</span>');
                    }
                    // swatch
                    var form = jQuery('.quick-shop form.variants');
                    for (var i = 0, length = variant.options.length; i < length; i++) {
                        var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                        if (radioButton.size()) {
                            radioButton.get(0).checked = true;
                        }
                    }


                    // Update currency
                    currenciesCallbackSpecial('#quick-shop-modal span.money');

                }
            });
        </script>


        <script src="<?php echo $serverroot; ?>js/currencies.js" type="text/javascript"></script>
        <script src="<?php echo $serverroot; ?>js/jquery.currencies.min.js" type="text/javascript"></script>

        <script type="text/javascript">

            jQuery('.currencies li').on(clickEv, function () {
                if (!$(this).hasClass('active')) {
                    jQuery('.currencies li').removeClass('active');
                    var cls = jQuery(this).attr('class');
                    jQuery('.' + cls).addClass('active');

                    /*var selectedValue = jQuery(this).find('input[type=hidden]').val();
                     jQuery('.currencies_src option[value='+selectedValue+']').attr('selected', true);
                     jQuery('.currencies_src').change();
                     jQuery('.currency').removeClass('open');*/
                    var selectedValue = jQuery(this).find('input[type=hidden]').val();
                    Currency.convertAll(Currency.currentCurrency, selectedValue);
                    jQuery('.currency_code').html(Currency.currentCurrency);
                    jQuery(this).parents('#currency').removeClass('open');
                }
            });

            var shopCurrency = '',
                    defaultCurrency = '',
                    cookieCurrency = '';
            currenciesCallback();

            function currenciesCallback() {

                Currency.format = 'money_format';


                shopCurrency = 'USD';

                /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
                Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
                Currency.money_format[shopCurrency] = "${{amount}}";

                /* Default currency */
                defaultCurrency = 'USD' || shopCurrency;

                /* Cookie currency */
                cookieCurrency = Currency.cookie.read();

                /* Fix for customer account pages */
                jQuery('span.money span.money').each(function () {
                    jQuery(this).parents('span.money').removeClass('money');
                });

                /* Saving the current price */
                jQuery('span.money').each(function () {
                    jQuery(this).attr('data-currency-USD', jQuery(this).html());
                });

                // If there's no cookie.
                if (cookieCurrency == null) {
                    if (shopCurrency !== defaultCurrency) {
                        Currency.convertAll(shopCurrency, defaultCurrency);
                        jQuery('.currency_code').html(defaultCurrency);
                    }
                    else {
                        Currency.currentCurrency = defaultCurrency;
                    }
                    Currency.cookie.write(defaultCurrency);
                }
                // If the cookie value does not correspond to any value in the currency dropdown.
                else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
                    Currency.currentCurrency = shopCurrency;
                    Currency.cookie.write(shopCurrency);
                }
                else if (cookieCurrency === shopCurrency) {
                    Currency.currentCurrency = shopCurrency;
                }
                else {
                    Currency.convertAll(shopCurrency, cookieCurrency);

                    jQuery('#currencies li').removeClass('active');
                    jQuery('#currencies #currency-' + cookieCurrency).addClass('active');
                    jQuery('.currency_code').html(cookieCurrency);
                }

                jQuery('[name=currencies]').val(Currency.currentCurrency).change(function () {
                    var newCurrency = jQuery(this).val();
                    Currency.convertAll(Currency.currentCurrency, newCurrency);
                    jQuery('.currency_code').html(Currency.currentCurrency);
                    jQuery(this).parents('#currency').removeClass('open');
                });


                $('.currencies li').removeClass('active');
                $('.currencies .currency-' + Currency.cookie.read()).addClass('active');
            }

            function currenciesCallbackSpecial(id) {
                /* Saving the current price */
                jQuery(id).each(function () {
                    jQuery(this).attr('data-currency-USD', jQuery(this).html());
                });

                /* Update currency */
                Currency.convertAll(shopCurrency, Currency.cookie.read(), id, 'money_format');
            }
        </script>

        <script src="<?php echo $serverroot; ?>js/linkOptionSelectors.js" type="text/javascript"></script>  


        

    </head>

    <body class="index-template notouch" cz-shortcut-listen="true" style="background-attachment: scroll;">
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

                                        <li class="toolbar-customer login-account">                    
                                            
                                                <i class="glyphicon glyphicon-log-out"></i>                                        
                                                <a href="logout.php" id="customer_login_link"><b>Sign Out</b></a>
                                            </span>                    
                                            
                                        </li>
                                        <li class="toolbar-customer create-account">

                                            <i class="glyphicon glyphicon-edit"></i>
                                            <a href="<?php echo $serverroot . 'reg.php'; ?>" id="customer_register_link">Register</a>

                                        </li>  
<style>
.dropbtn {
    background-color: #DE6378;
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
     
    <a href="settings.php"><i class="glyphicon glyphicon-user"></i>&nbspHi,<?php echo $_SESSION['login_user'];?></a>
    <a href="checkout.php?product=orders"><i class="glyphicon glyphicon-send"></i>&nbspOrders</a>
    <a href="checkout.php?product=wishlist"><i class="glyphicon glyphicon-bookmark"></i>&nbspWishlist</a>
    <a href="settings.php"><i class="glyphicon glyphicon-cog"></i>&nbspSettings</a>
  </div>
</div>



</li>




                                      <!--  <li class="search-field">
                                            <a href="<?php echo $serverroot . 'search.php'; ?>" class="search dropdown-toggle dropdown-link" data-toggle="dropdown" title="Search Toolbar">
                                                <i class="fa fa-search"></i> -->
                                                <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
                                            </a>
                                            <?php
                                            $sqlcollection = "SELECT `ITEM_COLLECTION_CODE`, `ITEM_COLLECTION_NAME` FROM `thu_item_collections` WHERE `ITEM_COLLECTION_STATUS` = 1 order by `ITEM_COLLECTION_ID` ASC ";
                                            $db->sql($sqlcollection);
                                            $collections = $db->getResult();
											$collections_num = $db->numRows();
                                            ?>
                                            <div id="search-info" class="dropdown-menu" style="display: none;">
                                                <form class="search" action="<?php echo $serverroot . 'search.php'; ?>">
                                                    <div class="collections-selector">
                                                        <select class="single-option-selector" data-option="collection-option" id="collection-option" name="collection">
                                                            <option value="all">All Collections</option>
                                                            <?php
                                                            foreach ($collections as $collection) {
                                                                $collection = (Object) $collection;
															?>
                                                                <option value="<?php echo $collection->ITEM_COLLECTION_CODE ?>"><?php echo $collection->ITEM_COLLECTION_NAME ?></option>
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
                                            <h1><a href="<?php echo $serverroot; ?>"><img src="<?php echo $serverroot; ?>default-images/logo.png" alt="Thuneega Designers Logo"></a></h1>
                                            <h1 style="display:none"><a href="http://cs-everything-clothing.myshopify.com/">Everything Clothing</a></h1>
                                        </div>
                                    </div>
                                    <div class="sticky-logo">
                                        <div class="logo">
                                            <h1><a href="<?php echo $serverroot; ?>"><img src="<?php echo $serverroot; ?>default-images/scrolldown-logo.png" alt="Thuneega Designers Logo"></a></h1>
                                            <h1 style="display:none"><a href="http://cs-everything-clothing.myshopify.com/">Everything Clothing</a></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-area hidden-xs">
                                    <div class="nav-header">
                                        <div class="nav-header-wrapper">
                                            <div class="nav-header-inner" style="font-family: 'Josefin Sans', sans-serif;font-weight: 400; font-size: 24px;">
                                                <div class="navi-group">
                                                    <ul class="navigation-left hidden-xs">
                                                        <li class="nav-item active">
                                                            <a href="<?php echo $serverroot; ?>">
                                                                <span style="text-transform: capitalize;">Home</span>
                                                            </a>
                                                        </li>
                                                        
                                                        <li class="dropdown mega-menu">
                                                            <a href="<?php echo $serverroot.'collections.php'; ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                                <span style="text-transform: capitalize;">Collections</span>
                                                                <i class="fa fa-angle-down"></i>
                                                                <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                                            </a>
                                                            <div class="megamenu-container col-4 megamenu-container-1 dropdown-menu" style="width: 1170px; display: none;">
															
                                                                <ul class="sub-mega-menu">
																
                                                                <?php 
                                                                    foreach ($collections as $collection) {
                                                                           $collection = (Object) $collection; ?>
                                                                    
                                                                    <li class="col-links col-links01">
                                                                        <ul>
                                                                            <li class="list-title" style="text-transform:capitalize; font-family: 'Josefin Sans', sans-serif;"><a href="<?php echo $collection->ITEM_COLLECTION_NAME; ?>.php" style="color: #272424 !important;"><?php echo ucfirst($collection->ITEM_COLLECTION_NAME); ?></a></li>
                                                                            <?php 
                                                                            $sql= "SELECT `COLLECTION_CAT_CODE`, `CATEGORY_NAME` FROM `thu_collection_categories` WHERE `COLLECTION_CODE` = '".$collection->ITEM_COLLECTION_CODE."' ORDER BY `COLLECTION_CATEGORY_ID` ASC" ;
                                                                            $db->sql($sql);
                                                                            $subcollections = $db->getResult();
                                                                            $num = $db->numRows();
                                                                            $cou = 0;
                                                                            foreach($subcollections as $subcol){ 
                                                                                $subcol = (Object)$subcol;
                                                                                $cou++;
                                                                                
                                                                                if($cou <=5){ ?>
                                                                                    <li class="list-unstyled li-sub-mega">
                                                                   <a href="search-item-design.php?cat_name=<?php echo $subcol->COLLECTION_CAT_CODE; ?> "> <?php echo ucfirst($subcol->CATEGORY_NAME) ; ?></a>           
                                                                                    </li>
                                                                                    
                                                                                <?php }                                                                                
                                                                                if($num > 5 && $cou ==6){ ?>
                                                                                    <li class="list-unstyled li-sub-mega">
                                                                                        <a href="<?php echo $serverroot.'collections.php?collectiontype='.$collection->ITEM_COLLECTION_CODE; ?>" style="color: #184dea;">More ... >></a>  
                                                                                    </li>
                                                                               <?php }  
                                                                               }                                                                            
                                                                            ?>
                                                                        </ul>
                                                                    </li>
                                                               <?php     } ?>
															   <?php if($collections_num <= 4){ ?>
                                                                  <li class="col-img" style="width: 22%;"> <img src="https://thuneegadesigners.com/gallery/factory-images/mega-bg-01.png" alt="Mega menu image 1"> </li> 
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
                                                            <a href="<?php echo $serverroot.'sareesoftheday.php' ?>">
                                                                <span style="text-transform: capitalize;">Offers Zone</span>
                                                            </a>
                                                        </li>
														<li class="nav-item">
                                                            <a href="<?php echo $serverroot.'contactus.php' ?>">
                                                                <span style="text-transform: capitalize;">Contact Us </span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item dropdown navigation hidden">
                                                            <a href="<?php echo $serverroot ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                                <span>Kids</span>
                                                                <i class="fa fa-angle-down"></i>
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
                                        <a href="cart.php" >
                                            <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                            <i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
                                            <div class="num-items-in-cart">
                                                <div class="block-cart">

                                        <?php
              require_once('dbconnect.php');
       $cart_items=mysqli_query($con, "SELECT  * from  `cart_items`  WHERE  user_id='$user_check' ");

        $rowcount=mysqli_num_rows($cart_items); ?>

            <span class="icon"><span class="number"><?php echo $rowcount; ?></span></span>   
                                             </div>   
                                            </div>
                                        </a>
                                        <div id="cart-info" class="dropdown-menu" style="display: none;">
                                            <div id="cart-content"><div class="empty text-center"><em><?php echo $rowcount; ?> items are in your cart <a href="cart.php" class="btn btn-2">View Cart</a></em></div></div>
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
                                    <button id="showLeftPush" class="visible-xs"><i class="glyphicon glyphicon-menu-hamburger "></i></button>
                                    <ul class="list-inline">        

                                        <li class="is-mobile-login">
                                            <div class="btn-group">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <ul class="customer dropdown-menu">

                                                    <li class="logout">
                                                        <a href="<?php echo $serverroot.'logout.php'; ?>"><b>Sign out</b></a>
                                                    </li>
                                                    <li class="account">
                                                        <a href="<?php echo $serverroot.'reg.php'; ?>">Create an account</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
<li>
<div class="dropdown">
  <button class="dropbtn" disabled><b>Profile</b></button>
  <div class="dropdown-content">
    <a href="settings.php">Hi,<?php echo  $_SESSION['login_user']; ?></a>
    <a href="checkout.php?product=orders">Orders</a>
    <a href="settings.php">Settings</a>
    <a href="<?php echo $serverroot.'logout.php' ?>"><b>Sign out</b></a>
                                       
  </div>
</div>
</li>




                                        <li class="is-mobile-cart">
                                            <a href="cart.php" title="Shopping Cart">
                                                <div class="num-items-in-cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="icon">
                                                        <span class="number"><?php echo $rowcount; ?></span>
                                                    </span>
                                                    <div class="ajax-subtotal" style="display:none;"><span class="money" data-currency-usd="$0.00" data-currency="USD">$0.00</span></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="is-mobile-nav-menu nav-menu visible-xs" id="is-mobile-nav-menu" style="font-family: 'Josefin Sans', sans-serif;font-weight: 400; font-size: 24px;">
                                    <ul class="nav navbar-nav hoverMenuWrapper">
                                        <li class="nav-item active">
                                            <a href="<?php echo $serverroot ?>">
                                                <span style="text-transform: capitalize;">Home</span>
                                            </a>
                                        </li>
                                        <li class="dropdown mega-menu">
                                            <a href="#" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                <span style="text-transform: capitalize;">Collections</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                            </a>


                                            <div class="megamenu-container col-14 megamenu-container-1 dropdown-menu" style="width: 1170px;">
                                                <ul class="sub-mega-menu">
                                                <?php foreach ($collections as $collection) {
                                                        $collection = (Object) $collection; ?>
                                                    <li class="col-links col-links01">

                                                        <ul>
                                                            <li class="list-title"><a href="<?php echo $serverroot.'collections.php?collectiontype='.$collection->ITEM_COLLECTION_CODE; ?>" style="color: #272424 !important;"><?php echo $collection->ITEM_COLLECTION_NAME; ?></a></li>
                                                            
                                                            <?php 
                                                            $sql= "SELECT `COLLECTION_CAT_CODE`, `CATEGORY_NAME` FROM `thu_collection_categories` WHERE `COLLECTION_CODE` = '".$collection->ITEM_COLLECTION_CODE."' ORDER BY `COLLECTION_CATEGORY_ID` ASC" ;
                                                            $db->sql($sql);
                                                            $subcollections = $db->getResult();
                                                            $num = $db->numRows();
                                                            $cou = 0;
                                                            foreach($subcollections as $subcol){ 
                                                                $subcol = (Object)$subcol;
                                                                $cou++;

                                                                if($cou <=6 ){ ?>
                                                                    <li class="list-unstyled li-sub-mega">
                                                                        <a href="<?php echo $serverroot.'search.php?st='.$subcol->COLLECTION_CAT_CODE; ?>"><?php echo ucfirst($subcol->CATEGORY_NAME) ; ?></a>           
                                                                    </li>

                                                                <?php }                                                                                
                                                                if($num > 6 && $cou ==7){ ?>
                                                                   <li class="list-unstyled li-sub-mega">
                                                                        <a href="<?php echo $serverroot.'collections.php?collectiontype='.$collection->ITEM_COLLECTION_CODE; ?>" style="color: #184dea;">More ... >></a>  
                                                                    </li>
                                                               <?php }  
                                                               }                                                                            
                                                            ?>

                                                        </ul>
                                                    </li>
                                                <?php } ?> 
                                                   
                                                </ul>
                                            </div> 
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo $serverroot.'sareesoftheday.php' ?>">
                                                <span style="text-transform: capitalize;">Offers Zone</span>
                                            </a>
                                        </li>
										<li class="nav-item">
                                            <a href="<?php echo $serverroot.'contactus.php' ?>">
                                                <span style="text-transform: capitalize;">Contact us</span>
                                            </a>
                                        </li>
                                       <li class="nav-item">
                                            <a href="<?php echo $serverroot.'logout.php' ?>">
                                                <span>Sign out</span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown navigation hidden">
                                            <a href="<?php echo $serverroot ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                                                <span>Kids</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
                                                <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="list-title">Kids</li>
                                                <li class="li-sub-mega">
                                                    <a tabindex="-1" href="<?php echo $serverroot.'sareesoftheday.php' ?>">Men's Clothing</a>
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

            <section class="mobile-nav" style="font-family: 'Josefin Sans', sans-serif;font-weight: 400; font-size: 24px;">  
                <div class="row mobile-nav-wrapper">
                    <nav class="mobile clearfix">
                        <div class="flyout" style="display: none;">
                            <ul class="clearfix">
                                <li>
                                    <a href="<?php echo $serverroot ?>" class=" current navlink"><span>Home</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $serverroot.'collections.php' ?>" class=" navlink"><span>Collections</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $serverroot.'sareesoftheday.php' ?>" class=" navlink"><span>Offers Zone</span></a>
                                </li> 
								 <li>
                                    <a href="<?php echo $serverroot.'contactus.php' ?>" class=" navlink"><span>Contact Us</span></a>
                                </li> 
                                <li class="customer-links">Log in</li>
                                <li class="customer-links">Register</li>
                                <li class="search-field">
                                    <form class="search" action="<?php echo $serverroot.'search.php' ?>" id="search">
                                        <input type="image" src="<?php echo $serverroot ?>images/icon-search.png" alt="Go" id="go_mobile" class="go">
                                        <input type="text" name="q" class="search_box" placeholder="Search" value="">
                                    </form>
                                </li>
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
                        }
                        else {
                            if ($('#top').hasClass('affix')) {
                                $('#top').prev().remove();
                                $('#top').removeClass('affix').removeClass('animated');
                            }
                        }
                    }
                    else
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

    </body>
<script>
 setInterval("my_function();",1000);
 function my_function(){
 $("#refresh").load("productdetails.php #refresh");
 }
 </script>