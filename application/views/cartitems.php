<style>
    #cartitems{
        margin-top:5%;
    }
    @media screen and (max-width: 480px) {
        #cartitems {margin-top:16%;}
    }
</style>
<div class="container" id="cartitems" style="">
    <div class="row" >
        <?php
        $serverroot = "https://thuneegadesigners.com/";
        if ($list) {
            $total = 0;
            foreach ($list as $item) {
                ?>
                <style>
                    button.btn-danger, button.btn-success{
                        border-radius: 20px;
                        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
                    }
                    .cart-item{
                        border: 1px solid #fff;
                        margin: 5px;
                        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);    
                    }
                    .bold{font-weight: bold;}
                    .red{color: #FE0101;}.green{color: #409328;}.blue1{color: #159BB6;}.navy{color: #21325F;}
                    .total,button.btn-primary{background-image: linear-gradient(90deg,#45a2b7  50%,#85ce85 100%); color: #ffffff;border-radius: 20px;box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);text-align: center;}
                    @media only screen and (max-width: 600px) {
                        .margin {
                            float: right;
                        }
                    }
                </style>
                <div class="col-md-4 cart-item">
                    <div class="row">
                        <div class="col-sm-4" style="padding: 2px;"> 
                            <a href="<?php echo site_url('product/' . $item->id) ?>" style="text-decoration:none"> 
                                <img  src="<?php echo $serverroot . 'gallery/product-images/sarees/' . $item->productImage1; ?>" alt="Sarees" style="width:100px; height:100px;">
                            </a>
                        </div>                          

                        <div class="col-md-6">
                            <span>Category :</span><span class="bold"><?php echo htmlentities(ucfirst($item->cat_name)); ?></span>
                        </div>
                        <div class="col-md-6">
                            <span>Material :</span><span class="bold"><?php echo htmlentities(ucfirst($item->subCategory)); ?></span>
                        </div> 
                        <div class="col-md-6">
                            <span>Quantity :</span><span class="bold"><?php echo htmlentities($item->quantity); ?></span>
                        </div>
                        <div class="col-md-6">
                            <span>Price(<?php echo $item->quantity; ?>x<?php echo $item->productPrice; ?>) :</span><span class="bold">₹.<?php echo $item->quantity * $item->productPrice; ?></span>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-danger" id="<?php echo $item->id ?>" onclick="delCart(this.id)" title="Delete from cart"><i class="glyphicon glyphicon-trash"></i></button>
                            <?php if (!empty($_SESSION['user'])) { ?>
                                <span style="float: right;">
                                    <i class="fas fa-share"></i>
                                    <button type="submit" class="btn btn-success" id="<?php echo $item->id ?>" title="Move to Wishlist"><i class="glyphicon  glyphicon-heart"></i></button>
                                </span>
                            <?php } ?>
                        </div>


                    </div>
                </div>                
                <?php
                $total = $total + $item->quantity * $item->productPrice;
            }
            ?>
            <div class="col-sm-2" style="margin:  2%;">
                <span class="total bold" style="padding: 5px;">Total Amount : ₹.<?php echo $total; ?></span> 
            </div>
            <div class="col-sm-2 margin" style="margin-top: 2%;margin-left: 3%;">
                <?php if (!empty($_SESSION['user'])) { ?>
               <a href="<?php echo site_url('PUM_Payment') ;?>"> 
                <button type="submit" class="btn btn-primary total bold">Check out</button>
               </a>
                <?php } else{?>
                <a href="<?php echo site_url('guest/reg') ;?>">
                <button type="submit" class="btn btn-primary total bold">Check out as Guest</button>
                </a>
                <?php } ?>
            </div>

        <?php
        } else {
            echo 'No items in cart';
        }
        ?>        
    </div>

</div>

<script>
    function delCart(pid) {
        //alert(pid);

        $(document).ready(function () {
            var dataString = 'pid1=' + pid;
            //alert( dataString);
            if (false)
            {
                alert("Please login");
            } else
            {
// AJAX Code To Submit Form.
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/delCart'); ?>",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        alert(result);
                        location.reload();
                    }
                });
            }
            return false;
        });
    }
</script>