<?php
$serverroot = "https://thuneegadesigners.com/";
$site = "https://thuneegadesigners.com/";
?>

<link rel="stylesheet" href="<?php echo $site; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $serverroot; ?>css/style1.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{
        font-family: 'Josefin Sans', sans-serif;
    }
    div.thumbnail {
        width: 100%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    div.thumbnail .caption {
        padding: 19px;
    }
    select{
        color: white;
        border-radius: 15px;
        background-color: #8ddaac;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    button.btn, .btn.btn-primary{
        border-radius:15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    button.btn.btn-primary, .btn.btn-primary {
        background-color: #9075ffd9;
    }
    button.merge{
        background-color: #c270e4;
        color: white;
        border-radius:15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border: 0;
    }
</style>


<style>
    /* CSS used here will be applied after bootstrap.css */

    .carousel {
        margin-top: 20px;
    }

    .item .thumb {
        width: 25%;
        cursor: pointer;
        float: left;
    }
    .item .thumb img {
        width: 100px;
        height:100px;
        margin: 2px;
    }



</style>

<style>
    .mag {
        width:400px;
        margin: 0 auto;
        float: none;
    }

    .mag img1 {
        max-width: 100%;
    }



    .magnify {
        position: relative;
        cursor: none
    }

    .magnify-large {
        position: absolute;
        display: none;
        width: 175px;
        height: 175px;

        -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
        box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 0 0 7px 7px rgba(0, 0, 0, 0.25), inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%
    }
    #png1 {
        position:absolute;
        top:0;
        left:0;
        z-index:0;
    }

    #png2 {
        position:absolute;
        top:0;
        left:3;
        margin-left:2%;
        margin-top:-200%;
        z-index:1;
    }
    #preview{
        margin-top:2%;
        border:0px solid black;
        width:350px;
        height:380px;
        background-repeat: no-repeat;
        margin-left: 35%;
        margin-right: auto;
        position:absolute;
        z-index: 2;
    }
    #img-wrap{
        text-align: center;
    }
    #img-wrap img {	
        margin: 10px;
        display: block;
        border: 2px solid #6A6462;
    }
    #img-wrap img:hover {
        cursor: zoom-in;
        border: 0;
        -moz-box-shadow:2px 2px 7px 2px rgba(130,130,130,1),-1px -1px 7px 2px rgba(130,130,130,1);
        -webkit-box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-1px -1px 7px 2px rgba(130,130,130,1);
        box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-2px -2px 7px 2px rgba(130,130,130,1);
    }
    @media screen and (max-width: 767px){
        #img-wrap img {
            display: inline-block;
        }
    }
    #products_con{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #products_con{margin-top:16%;}
        }
</style>
<div class="container" id="products_con" >    
    <?php
    if (isset($detail)) {
        foreach ($detail as $value) {
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="mag">
                                    <a href="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage1); ?>" >
                                        <img  data-toggle="magnify" class="m-image" src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage1); ?>" alt="Sarees"  ></a></div><span style="margin-left:20%;">Click on image to see full image </span></div>
                            <div class="item">
                                <div class="mag">
                                    <a href="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage2); ?>" >
                                        <img data-toggle="magnify" class="m-image" src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage2); ?>"  ></a>
                                </div><span style="margin-left:20%;">Click on image to see full image </span></div>
                            <div class="item">
                                <div class="mag">
                                    <a href="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage3); ?>" >
                                        <img data-toggle="magnify" class="m-image" src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage3); ?>" ></a>
                                </div><span style="margin-left:20%;">Click on image to see full image </span></div>

                        </div>
                    </div> 

                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="clearfix">
                                <div id="thumbcarousel" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-target="#carousel" data-slide-to="" class="thumb"><span>Product Images</span></div>
                                            <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage1); ?>"></div>
                                            <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage2); ?>"></div>
                                            <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($value->productImage3); ?>"></div>

                                        </div><!-- /item -->
                                    </div><!-- /carousel-inner -->
                                    <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div> <!-- /thumbcarousel -->
                            </div><!-- /clearfix -->
                        </div> <!-- /col-md-10 -->
                        <div class="col-md-10" style="padding-top:1%;">
                            <div class="row">
                                <div class="col-md-10">

                                    <b><?php echo empty($value->intro) ? '' : ucfirst($value->intro); ?></b>
                                </div>
                                <div class="col-sm-6">
                                    <b>Category:</b><?php echo ucfirst($value->cat_name); ?>
                                </div>
                                <div class="col-sm-6">
                                    <b>Sub-Category:</b><?php echo ucfirst($value->subCategory); ?>
                                </div>
                                <div class="col-md-8">

                                    <?php
                                    $discount = FALSE;
                                    preg_match('/^[0]*$/', $value->productPriceBeforeDiscount) ? $discount = FALSE : $discount = TRUE;
                                    ?>

                                    <?php if ($discount) { ?>
                                        <strike><?php echo 'Rs.' . $value->productPriceBeforeDiscount; ?></strike>
                                        <b class="blue1"><?php
                                            if (!empty($value->discPercent)) {
                                                echo '(' . $value->discPercent . ' off)';
                                            }
                                            ?> 
                                        </b>
                                    <?php }
                                    ?>

                                </div>
                                <div class="col-md-6 navy">
                                    <b>Price:</b><?php echo ucfirst('Rs.' . $value->productPrice); ?>                                    
                                </div>

                            </div> 
                        </div>
                        <div class="col-md-10">
        <?php echo ucfirst($value->productDescription); ?>
                            <br><strong>Slight variation in color may be possible due to photographic effects.</strong>
                        </div>
                        <div class="col-md-10">
        <?php if ($value->dealer == 'thuneega') { ?>
                                <p style="margin-left:auto; color:brown; font-size:14px; font-weight:bold;">FREE DELIVER CHARGES TO ANY PLACE IN INDIA</p>

                                <div class="col-sm-6 " style="margin-left:auto;">
                                    <p style="margin-left:auto; color:#117A65; font-size:18px; font-weight:bold;">Check Cash on Delivery</p>
                                    <form role="form" action="" method="post" name="check">  
                                        <table style="border:none;"><tr>                              
                                                <td style="border:none;">    
                                                    <input type="text" name="pincode" id="pincode" placeholder="Enter Pincode" required  class="form-control" onkeyup="checkpin();" autocomplete="off"/> 
                                                </td>
                                                <td style="border:none;">
                                                    <span class="pincode-danger red"></span><span id="cod"></span>
                                                    <span id="name_status" style="font-weight:bold;"></span>
                                                </td></tr>                 

                                        </table>                  
                                    </form>
                                    <span class="text-danger"><?php
                                        if (isset($errormsg)) {
                                            echo $errormsg;
                                        }
                                        ?></span>
                                </div>
                                <p style="margin-left:auto; padding-top:auto; color:#C0392B; font-size:12px; font-weight:italic;">7 days returns & exchange</p>
        <?php } ?>
                        </div>
                    </div><!-- row -->
                </div><!-- col-lg-6 -->    
            </div><!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <p style="font-size:16px;color:#115260;"><b>You may also be interested in</b></p>
                    <?php
                    //echo sizeof($mblouses);
                    if (\sizeof($mblouses) != 1) {
                        ?>
                        <input type="hidden" value="blouse" id="category">  
                        <?php
                        $cnt = 0;
                        foreach ($mblouses as $sugblouse) {
                            $size1 = explode(',', $sugblouse->size);
                            $bsize2 = 'bsize' . $sugblouse->id;
                            ?>
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <a href="<?php echo site_url('product_det/' . $sugblouse->id) ?>" style="text-decoration:none">                              
                                        <img  class=scaled id="<?php echo $sugblouse->id ?>" src="https://thuneegadesigners.com/gallery/product-images/sarees/<?php echo htmlentities($sugblouse->productImage1); ?>" alt="Blouse" style="position:absolute;width:80%; height:200px;"></a>
                                    <div class="caption">
                                        <div class="row" style="margin-top:90%;">
                                            <div class="col-md-6"><?php echo ucfirst($sugblouse->subCategory); ?></div>
                                            <div class="col-md-6">Size:
                                                <select id="<?php echo $bsize2 ?>" >
                <?php foreach ($size1 as $sizes1) { ?>
                                                        <option value="<?php echo $sizes1 ?>"><?php echo $sizes1 ?></option>

                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top:8px;">
                                            <div class="col-md-4">

                                                <button type="button" id="<?php echo $sugblouse->id; ?>" onclick="return confirm('Please confirm size?') ? addBlouse(this.id) : '';" title="Cart" class="btn btn-primary" style="float:left;"><i class="glyphicon glyphicon-shopping-cart"></i></button>
                                            </div>
                                            <div class="col-md-8">
                                                <?php
                                                $bid = "'" . $sugblouse->id . "'";
                                                $cntq = "'" . $cnt . "'";
                                                if ($value->cat_name == 'saree') {
                                                ?>
                                                <button id="<?php echo 'merge' . $sugblouse->id ?>" onclick="changepic(<?php echo $bid . ',' . $cntq ?>)" class="merge" style="margin-top:3%;float: right;">Show on Saree</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button id="<?php echo 'reset' . $sugblouse->id ?>" onclick="resetpic(<?php echo $sugblouse->id ?>)" class="reset" style="margin-top:0%;visibility:hidden;">Reset</button>
                                                <?php } ?>
                                            </div>
                                        </div><!-- row -->
                                    </div>
                                </div>
                            </div>

                            <?php
                            $cnt++;
                        }
                    }
                    ?>
                </div><!--col-lg-6 -->
                <div class="col-lg-6">
                    <?php
                    if ($value->cat_name == 'blouse') {
                        $size = explode(',', $value->size);
                        $bsize3 = 'bsize' . $value->id;
                        ?>
                        <input type="hidden" value="blouse" id="category">
                        <div class="col-sm-6 col-sm-8 col-lg-10" style="padding-top:2%;">
                            Size:
                            <select id="<?php echo $bsize3 ?>" >
            <?php foreach ($size as $sizes) { ?>
                                    <option value="<?php echo $sizes ?>"><?php echo $sizes ?></option>

            <?php } ?>
                            </select>
                            <button class="btn btn-primary show_hide3" >Size Chart</button>
                            <div class="slidingDiv3" style="font-size:14px;">
                                <img src="default-images/sizechart.jpeg" alt="Chart">

                            </div>
                        </div>

        <?php } ?>
                    <div class="col-sm-6 col-sm-8 col-lg-10" style="padding-top:2%;">
                        <button class="btn btn-primary show_hide" >Product Details</button>
                        <div class="slidingDiv" style="font-size:14px;">
        <?php echo nl2br($value->productDetails); ?>
                            <span><strong>Length&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp</strong><?php echo htmlentities($value->size); ?></span><br>
                            <span><strong>Material Care&nbsp&nbsp&nbsp:&nbsp</strong><?php echo htmlentities($value->materialCare); ?></span>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-2" style="padding-top:2%;">
                        <form name="cart" id="cart" action="" method="post" >
                            <input type="hidden" name="redirurl" value="" />
                            <input type="hidden" name="pid" id="pid" value="<?php echo $value->id; ?>">

                            <?php
                            if ($value->dealer == 'thuneega') {
                                if ($value->productAvailability != 0) {
                                    if ($value->cat_name == 'blouse') {
                                        $bsize3 = 'bsize' . $value->id;
                                        ?>     
                                        <input type="button" class="btn btn-primary" id="<?php echo $value->id; ?>" onclick="return confirm('Please confirm size?') ? addBlouse(this.id) : '';" value="Add to Cart" /> 
                <?php } else { ?>
                                        <input type="button" class="btn btn-primary" id="<?php echo $value->id; ?>" onclick="addSaree(this.id)" value="Add to Cart">

                                        <?php
                                    }
                                } else {
                                    ?>


                                    <p > <img id="png2" src="https://thuneegadesigners.com/gallery/product-images/icons/sold-out-png.png" style="height:100px; width:100px;"></p>
                                    <p><input type="button" id="<?php echo $value->id; ?>" onclick="addWish(this.id)" value="Wishlist" class="btn btn-danger"  style="background: #800080;"/>

                                        <?php
                                    }
                                }
                                ?>
                        </form></div>
        <?php if ($value->dealer != 'thuneega') { ?>
                        <div class="row" style="margin-left:3.4%;padding-top:2%;">
                            <button class="btn btn-danger show_hide1" style="background: blue;" >Check Availability</button>
                            <div class="slidingDiv1" style="font-size:14px;">
                                <form role="form" action="" method="post" name="signin">
                                    <fieldset>
                                        <legend>Leave your Email & Mobile number</legend><span style="color:red;font-size:15px;">We will notify you availability of product</span>
                                        <div class="form-group">
                                            <input type="hidden" name="redirurl" value="" />
                                            <label for="name">Email</label>
                                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" />

                                        </div>

                                        <div class="form-group">
                                            <label for="name">Mobile</label>
                                            <input type="text" id="password" name="password" placeholder="mobile" class="form-control"  />
                                            <input type="hidden" name="pid" id="pid" value="<?php echo $value->id; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="submit" name="signin" value="Notify" class="btn btn-primary" />
                                        </div>


                                    </fieldset>
                                </form>
                            </div>
                        </div>
        <?php } ?>

                </div>
            </div>

            <?php
        }
    }
    ?>     



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
    <script>
                        function addSaree(pid) {
                            //alert(pid);

                            $(document).ready(function () {
                                var size = '6.4';
                                var dataString = 'pid1=' + pid+ '&size1='+size;
                                //alert( dataString);
                                
// AJAX Code To Submit Form.
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo site_url('cart/addCart'); ?>",
                                        data: dataString,
                                        cache: false,
                                        success: function (result) {
                                        refCart();
                                            alert(result);
                                        }
                                    });
                                return false;
                            });
                        }
                        function refCart() {
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
                                    }


                        function addBlouse(pid) {
                            //alert(pid);
                            var bid = 'bsize' + pid;
                            $(document).ready(function () {
                                var bid = "bsize" + pid;
                                //alert(cat);
                                //alert(bid);

                                var e = document.getElementById(bid);
                                var ssize = e.options[e.selectedIndex].value;
                                var dataString = 'pid1=' + pid + '&size1=' + ssize;

                                //alert( dataString);

                                if (false)
                                {
                                    alert("Please login");
                                } else
                                {
                                    // AJAX Code To Submit Form.
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo site_url('cart/addCart'); ?>",
                                        data: dataString,
                                        cache: false,
                                        success: function (result) {
                                            document.getElementById(pid).className = "btn btn-success";
                                            refCart();
                                            //cartCount();
                                            alert(result);
                                        }
                                    });
                                    function cartCount(){
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
                                    }
                                }
                                return false;
                            });

                        }
    </script>
    <script>

        function addWish(pid) {

            $(document).ready(function () {
                var dataString = 'pid1=' + pid;
                // alert( pid);                
                if (true)

                {
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('cart/addWish'); ?>",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            if (result === 'Please login') {
                                alert('Please login to add to wishlist');
                                //window.location = "<?php //echo site_url('feedback.php?id=' + pid);  ?>";


                            } else {
                                alert(result);
                            }
                        }
                    });
                }
                return false;
            });
        }
    </script>
    <script type="text/javascript">


        function changepic(bid, cnt)
        {
            var merge = 'merge' + bid;
            var resett = 'reset' + bid;
            var x = window.matchMedia("(max-width: 700px)");
            myFunction(x); // Call listener function at run time
            x.addListener(myFunction);

            function myFunction(x) {
                if (x.matches) { // If media query matches
                    if (cnt < 1) {
                        document.getElementById(bid).style.top = -1090 + "px";
                    } else if (cnt < 2)
                    {
                        document.getElementById(bid).style.top = -1390 + "px";
                    } else if (cnt < 3) {
                        document.getElementById(bid).style.top = -1720 + "px";
                    } else {
                        document.getElementById(bid).style.top = -1890 + "px";
                    }
                } else {

                    if (cnt < 2) {
                        document.getElementById(bid).style.top = -580 + "px";
                    } else {
                        document.getElementById(bid).style.top = -660 + "px";
                    }
                }
            }


            document.getElementById(merge).style.visibility = 'hidden';
            document.getElementById(resett).style.visibility = 'visible';
        }
        function resetpic(bid)
        {
            var merge = 'merge' + bid;
            var resett = 'reset' + bid;
            //alret(bid);
            document.getElementById(bid).style.top = 0 + "px";
            document.getElementById(resett).style.visibility = 'hidden';
            document.getElementById(merge).style.visibility = 'visible';
        }

    </script>


    <script type="text/javascript">
    function checkpin()
    {
        var pin = document.getElementById("pincode").value;
        if (pin)
        {
            var dataString = 'pincode=' + pin;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('check/pincode'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'Available') {
                        $('#cod').html('COD available');
                        $('#cod').css('color', 'green');
                        $('.pincode-danger').text('');
                        

                    } else {
                        //alert("Success");
                        $('#cod').html('*COD not available');
                        $('#cod').css('color', 'blue');
                        $('.pincode-danger').text('');                        
                    }
                }
            });
        } else
        {
            $('.cod').html("");
            return false;
        }
    }
    </script>

    <script type="text/javascript">

        $(document).ready(function () {

            $(".slidingDiv").hide();
            $(".show_hide").show();

            $('.show_hide').click(function () {
                $(".slidingDiv").slideToggle();
            });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function () {

            $(".slidingDiv3").hide();
            $(".show_hide3").show();

            $('.show_hide3').click(function () {
                $(".slidingDiv3").slideToggle();
            });

        });

    </script>
    <script type="text/javascript">

        $(document).ready(function () {

            $(".slidingDiv1").hide();
            $(".show_hide1").show();

            $('.show_hide1').click(function () {
                $(".slidingDiv1").slideToggle();
            });

        });

    </script>
    <script type="text/javascript">
        !function ($) {

            "use strict"; // jshint ;_;


            /* MAGNIFY PUBLIC CLASS DEFINITION
             * =============================== */

            var Magnify = function (element, options) {
                this.init('magnify', element, options)
            }

            Magnify.prototype = {
                constructor: Magnify

                , init: function (type, element, options) {
                    var event = 'mousemove'
                            , eventOut = 'mouseleave';

                    this.type = type
                    this.$element = $(element)
                    this.options = this.getOptions(options)
                    this.nativeWidth = 0
                    this.nativeHeight = 0

                    this.$element.wrap('<div class="magnify" \>');
                    this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                    this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") + "') no-repeat");

                    this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                    this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                }

                , getOptions: function (options) {
                    options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                    if (options.delay && typeof options.delay == 'number') {
                        options.delay = {
                            show: options.delay
                            , hide: options.delay
                        }
                    }

                    return options
                }

                , check: function (e) {
                    var container = $(e.currentTarget);
                    var self = container.children('img');
                    var mag = container.children(".magnify-large");

                    // Get the native dimensions of the image
                    if (!this.nativeWidth && !this.nativeHeight) {
                        var image = new Image();
                        image.src = self.attr("src");

                        this.nativeWidth = image.width;
                        this.nativeHeight = image.height;

                    } else {

                        var magnifyOffset = container.offset();
                        var mx = e.pageX - magnifyOffset.left;
                        var my = e.pageY - magnifyOffset.top;

                        if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                            mag.fadeIn(100);
                        } else {
                            mag.fadeOut(100);
                        }

                        if (mag.is(":visible"))
                        {
                            var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                            var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
                            var bgp = rx + "px " + ry + "px";

                            var px = mx - mag.width() / 2;
                            var py = my - mag.height() / 2;

                            mag.css({left: px, top: py, backgroundPosition: bgp});
                        }
                    }

                }
            }


            /* MAGNIFY PLUGIN DEFINITION
             * ========================= */

            $.fn.magnify = function (option) {
                return this.each(function () {
                    var $this = $(this)
                            , data = $this.data('magnify')
                            , options = typeof option == 'object' && option
                    if (!data)
                        $this.data('tooltip', (data = new Magnify(this, options)))
                    if (typeof option == 'string')
                        data[option]()
                })
            }

            $.fn.magnify.Constructor = Magnify

            $.fn.magnify.defaults = {
                delay: 0
            }


            /* MAGNIFY DATA-API
             * ================ */

            $(window).on('load', function () {
                $('[data-toggle="magnify"]').each(function () {
                    var $mag = $(this);
                    $mag.magnify()
                })
            })

        }(window.jQuery);
    </script>
    <script src="https://thuneegadesigners.com/sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://thuneegadesigners.com/sweetalert-master/dist/sweetalert.css">

    <script type="text/javascript">

        $(document).ready(function () {
            $("#submit1").click(function () {
                var code = $("#code").val();
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'code1=' + code;
                if (code == '')
                {
                    swal({
                        title: "Error!",
                        text: "Please enter Pincode!",
                        type: "error",
                        confirmButtonText: "OK"
                    });
                    //alert("Please enter Email Address");
                } else if (code.length !== 6) {
                    swal({
                        title: "Error!",
                        text: "Please enter correct Pincode!",
                        type: "error",
                        confirmButtonText: "OK"
                    });
                    //alert("Please enter Password");
                } else
                {
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "pincode_ajax.php",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            //alert(result);
                            if (result == 'Not exist') {
                                //alert(result);
                                swal({
                                    title: "Sorry!",
                                    text: "COD not available to this pincode!",
                                    type: "error",
                                    confirmButtonText: "OK"
                                });


                            } else {
                                //alert("Success");
                                swal({
                                    title: "Available!",
                                    text: "COD available to this pincode!",
                                    type: "success",
                                    confirmButtonText: "OK"
                                });
                            }
                        }
                    });
                }
                return false;
            });
        });

    </script>

    <script type="text/javascript">

        $(document).ready(function () {
            $("#submit").click(function () {
                var email = $("#email").val();
                var password = $("#password").val();
                var pid = $("#pid").val();
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'email1=' + email + '&password1=' + password + '&pid1=' + pid;
                if (email === '')
                {
                    swal({
                        title: "Error!",
                        text: "Please enter Email Address!",
                        type: "error",
                        confirmButtonText: "OK"
                    });
                    //alert("Please enter Email Address");
                } else if (password === '') {
                    swal({
                        title: "Error!",
                        text: "Please enter Mobile!",
                        type: "error",
                        confirmButtonText: "OK"
                    });
                    //alert("Please enter Password");
                } else
                {
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url: "checking.php",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            if (result === 'Invalid Email or Password') {
                                //alert(result);

                                swal({
                                    title: "Error!",
                                    text: "Invalid Email!",
                                    type: "error",
                                    confirmButtonText: "OK"
                                });


                            } else {
                                swal({
                                    title: "Success!",
                                    text: "We will notify soonly!",
                                    type: "success",
                                    confirmButtonText: "OK"
                                });
                            }
                        }
                    });
                }
                return false;
            });
        });

    </script>
    
</div><!--container-->




