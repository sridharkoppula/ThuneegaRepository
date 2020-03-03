<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$serverroot = "https://thuneegadesigners.com/";
$site = "https://thuneegadesigners.com/";
?>
<html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.png">
        <title>Payment _ Thuneega Designers</title>   
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $site; ?>assets/css/style.css">
        <style>
            .details{
                margin: 2%;
            }
            .products{
                display: inline;
                box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
                background: #2b02282e;    
                text-align: center;
            }    
            .pad-two{margin: 1%;}
            .tprice{color: #ffffff; background: #b76fff;}
            table {border: none;}
            .borderless td, .borderless th {
                border-collapse: collapse;
                border: none;
                border-top: 0px solid #ddd;
            }
            #payment{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #payment {margin-top:16%;}
        }
        </style>
    </head>
    <?php
    if ($list) {
        $product_info = '';
        $total = 1;
        foreach ($list as $item) {
            $product_info.=$item->subCategory . ' ' . $item->cat_name . '<br>';
            //$total = $total + $item->quantity * $item->productPrice;
        }
    }
    //print_r($user_det);
    $user_details = json_decode($user_det);
    //print_r($user_details);
    ?>
    <body>
        <div class="container" id="payment">
            <div class="row">
                <div class="col-md-2"></div>  
                <div class="col-xs-12 col-lg-10 col-md-8 details">
                    <div class="row">
                        <div class="col-sm-2 bold">
                            Cart Items
                        </div>
                    <?php 
                    foreach ($list as $item) {
                    ?>
                        <div class="col-sm-2">
                            <figure>
                            <a href="<?php echo site_url('product/' . $item->id) ?>" style="text-decoration:none"> 
                                <img  src="<?php echo $serverroot . 'gallery/product-images/sarees/' . $item->productImage1; ?>" alt="Sarees" style="width:50px; height:50px;">
                            </a>
                                <figcaption>
                                    <?php echo $item->subCategory . ' ' . $item->cat_name ;?>
                                </figcaption>
                            </figure>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-10 col-md-8 details">
                    <div class="row">

                        <table class="table borderless" cellspacing="0" cellpadding="0">                            
                            <tr>
                                <td width="15%" style="border-top: 0px;"><span class="bold">Name </span></td><td width="" style="border-top: 0px;"><span class="products"><?php echo ucfirst($user_details[0]->fname); ?></span></td>
                            </tr>
                            <tr>
                                <td width="15%" style="border-top: 0px;"><span class="bold">Email </span></td><td width="" style="border-top: 0px;"><span class="products"><?php echo ucfirst($user_details[0]->email); ?></span></td>
                            </tr>
                            <tr>
                                <td width="15%" style="border-top: 0px;"><span class="bold">Address </span></td><td width="" style="border-top: 0px;"><span class="products"><?php echo ucfirst($user_details[0]->address); ?></span></td>
                            </tr>
                            <tr>
                                <td width="15%" style="border-top: 0px;"><span class="bold">Mobile </span></td><td width="" style="border-top: 0px;"><span class="products"><?php echo ucfirst($user_details[0]->mobile); ?></span></td>
                            </tr>
                            <tr>
                                <td width="15%" style="border-top: 0px;"><span class="bold">Total Price </span></td><td width="" style="border-top: 0px;"><span class="products tprice bold"><?php echo 'Rs.' . $total; ?></span></td>
                            </tr>

                        </table>                        
                    </div>

                </div>
                <div class="col-md-8">
                    <span class="text-center">* Please check all the details</span>
                    <form method="post" id="booking_car_detailes" enctype="multipart/form-data" action="<?= site_url() ?>/PUM_Payment/check">                                                                  
                        <div class="form-group">                      
                            <input type="hidden"  name="payble_amount" id="payble_amount" class="form-control" value="<?php echo $total; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="product_info" id="product_info" class="form-control"  value="<?php echo $product_info; ?>"  />
                        </div>
                        <div class="form-group">                      
                            <input type="hidden"  name="customer_name" id="customer_name" class="form-control" value="<?php echo $user_details[0]->fname; ?>" />
                        </div>
                        <div class="form-group">                                   
                            <input type="hidden"  name="mobile_number" id="mobile_number" class="form-control" value="<?php echo $user_details[0]->mobile; ?>" />
                        </div>
                        <div class="form-group">                                   
                            <input type="hidden"  name="customer_email" id="customer_email" class="form-control" value="<?php echo $user_details[0]->email; ?>"  />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="customer_address" id="customer_address"  placeholder="Address" style="display:none;"><?php echo $user_details[0]->address; ?></textarea>
                        </div>
                        <div class="form-group">                                   
                            <input type="hidden"  name="customer_pincode" id="customer_pincode" class="form-control" value="<?php echo $user_details[0]->pincode; ?>"  />
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Check Out</button>
                            <button class="btn btn-default"  data-dismiss="modal" >Cancel</button>
                        </div>
                    </form>                 
                </div>
                <div class="col-md-2"></div>                
            </div>
        </div>    
    </body>
</html>    