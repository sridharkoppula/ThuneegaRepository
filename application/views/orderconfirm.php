<?php
$serverroot = "https://thuneegadesigners.com/";
$site = "https://thuneegadesigners.com/";
?>
<style>
    #order-confirm{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #order-confirm {margin-top:16%;}
        }
</style>
<link rel="stylesheet" href="<?php echo $site; ?>assets/css/style.css">
<div class="container" id="order-confirm">
    <div class="row">       
        <div class="col-xs-12">
            <h4 class="bold blue1">Thank you for your order!</h4>
        </div>
        <?php
        $user_details = json_decode($user_add);
        if ($invoice_det) {
            ?>
            <div class="col-sm-4">
                <span >Invoice Number :</span><span class="bold navy"><?php echo $invoice_det['invoice_id']; ?></span>
            </div>
            <div class="col-sm-4">
                <span >Invoice Amount :</span><span class="bold navy"><?php echo 'Rs.' . $invoice_det['invoice_amount']; ?></span>
            </div>
            <div class="col-sm-4">
                <span >Transaction ID :</span><span class="bold navy"><?php echo $invoice_det['txnid']; ?></span>
            </div>
            <div class="col-sm-4">
                <span >Order Status :</span><span class="bold navy"><?php echo $invoice_det['status']; ?></span>
            </div>
            <div class="col-sm-4">
                <span >Order Date :</span><span class="bold navy"><?php echo date("d-m-Y", strtotime($invoice_det['order_date'])); ?></span>
            </div>
            <div class="col-sm-4">
                <span >Delivery Address :</span><span class="bold navy"><?php echo ucfirst($user_details[0]->address); ?></span>
            </div>

        </div>
        <div class="row">      
            <div class="col-xs-12">
                <h4 class="bold red">Order Items</h4>
            </div>
            <?php
        }
        if ($order_list) {
            $total = 0;
            foreach ($order_list as $item) {
                ?>
                <div class="col-sm-4">
                    <figure>
                        <a href="<?php echo site_url('product/' . $item->id) ?>" style="text-decoration:none"> 
                            <img  src="<?php echo $serverroot . 'gallery/product-images/sarees/' . $item->productImage1; ?>" alt="Sarees" style="width:100px; height:100px;">
                        </a>
                        <figcaption>
                            <?php echo htmlentities(ucfirst($item->subCategory)) . ' ' . htmlentities(ucfirst($item->cat_name)); ?>
                        </figcaption>
                    </figure>           
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>