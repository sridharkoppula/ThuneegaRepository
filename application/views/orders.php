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
    .order{
        border: 2px solid navy;
        border-radius: 20px;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    }
    #hiddenblock{
        display: none;
    }
    #order-get{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #order-get {margin-top:16%;}
        }
</style>

<?php
if(!empty($_SESSION['user'])){ ?>
	
    <div class="container" id="order-get">
        <div class="row">
            <?php
            $serverroot = "https://thuneegadesigners.com/";
            if ($list && $invoice) {
                $total = 0;
                foreach ($invoice as $easchinvoice) {
                    ?>

                    <div class="col-lg-12 ">
                        <hr class="order" />
                        <span>
                            Invoice Number:<?php echo $easchinvoice->invoice_id; ?>
                        </span>
                        <span style="padding-left: 4%;">
                            Date:<?php echo date('d-F-Y', strtotime($easchinvoice->order_date)); ?>
                        </span>

                    </div>
                    <?php
                    foreach ($list as $item) {
                        if ($easchinvoice->invoice_id == $item->invoice_num) {
                            ?>                       

                            <div class="col-md-4 cart-item">
                                <div class="row">
                                    <div class="col-sm-4" style="padding: 2px;"> 
                                        <a href="<?php echo site_url('product/' . $item->id) ?>" style="text-decoration:none"> 
                                            <img  src="<?php echo $serverroot . 'gallery/product-images/sarees/' . $item->productImage1; ?>" alt="Sarees" style="width:100px; height:100px;">
                                        </a>
                                    </div>    
                                    <div class="col-md-6">
                                        <span>Invoice Number :</span><span class="bold"><?php echo htmlentities(ucfirst($item->invoice_num)); ?></span>
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

                                    </div>


                                </div>
                            </div>                
                            <?php
                            $total = $total + $item->quantity * $item->productPrice;
                        }
                    }
                }
                ?>

                <?php
            } else {
                echo 'No orders available';
            }
            ?>        
        </div>

    </div>
<?php }
else if (empty($_SESSION['guest_user']) ) {
    ?>
    <div class="container" style="padding: 100px;">
        <div class="row">
            <p style="color:orange">
                Please enter email that you provided at order placing
            </p>
            <form>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required value="" class="form-control" />
                    <span class="email-danger red"></span>
                    <span id="next" style="display:block"><buttton onclick="checkguest();" class="btn btn-primary">Next</button></span>                      
                </div>
                <div id="hiddenblock">
                    <div class="form-group" id="otpblock">
                        <label for="name" class="red">OTP(OTP sent to your registered guest Email/Mobile)</label>
                        <input type="text" name="otp" id="otp" placeholder="Enter OTP" required class="form-control" onkeyup="checkotp();" autocomplete="off"/>                        
                        <span id="otp_status"></span>                        
                    </div>
                </div>
            </form>  
            <div class="form-group btn-danger" style="width:fit-content;"><a href="<?php echo site_url('login')?>" style="color: wheat;font-weight: bold;">Register Users Click Here</a></div>      
        </div>

    </div>
<?php } else { ?>



    <div class="container">
        <div class="row" style="margin-top:5%;margin-bottom: 5%; ">
            <?php
            $serverroot = "https://thuneegadesigners.com/";
            if ($list && $invoice) {
                $total = 0;
                foreach ($invoice as $easchinvoice) {
                    ?>

                    <div class="col-lg-12 ">
                        <hr class="order" />
                        <span>
                            Invoice Number:<?php echo $easchinvoice->invoice_id; ?>
                        </span>
                        <span style="padding-left: 4%;">
                            Date:<?php echo date('d-F-Y', strtotime($easchinvoice->order_date)); ?>
                        </span>

                    </div>
                    <?php
                    foreach ($list as $item) {
                        if ($easchinvoice->invoice_id == $item->invoice_num) {
                            ?>                       

                            <div class="col-md-4 cart-item">
                                <div class="row">
                                    <div class="col-sm-4" style="padding: 2px;"> 
                                        <a href="<?php echo site_url('product/' . $item->id) ?>" style="text-decoration:none"> 
                                            <img  src="<?php echo $serverroot . 'gallery/product-images/sarees/' . $item->productImage1; ?>" alt="Sarees" style="width:100px; height:100px;">
                                        </a>
                                    </div>    
                                    <div class="col-md-6">
                                        <span>Invoice Number :</span><span class="bold"><?php echo htmlentities(ucfirst($item->invoice_num)); ?></span>
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

                                    </div>


                                </div>
                            </div>                
                            <?php
                            $total = $total + $item->quantity * $item->productPrice;
                        }
                    }
                }
                ?>

                <?php
            } else {
                echo 'No orders available';
            }
            ?>        
        </div>

    </div>
<?php } ?>

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
                    url: "<?php echo site_url('cart/delWish'); ?>",
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

    // guest validation
    function checkguest() {
        var email = document.getElementById("email").value;
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var emailvalid = regex.test(email);
        if (email === '' || !emailvalid) {
            alert('Please enter valid email');
            return false;
        } else {
            var dataString = 'guest=' + email;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('login/guestcheck'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'new') {
                        $('#next').hide();
                        $('#otpblock').hide();
                        $('#hiddenblock').show();
                        $("#update").hide();
                        $("#add").show();
                    } else {
                        $("#email").prop('disabled', true);
                        $('#next').hide();
                        $('#hiddenblock').show();
                        $("#add").hide();
                        $("#update").show()();
                    }
                }
            });
        }
    }
    
    
    function checkotp()
    {
        var email = document.getElementById("email").value;
        var otp = document.getElementById("otp").value;
        if (otp)
        {
            var dataString = 'otp=' + otp + '&email=' + email;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Cart_controller/checkotp'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'invalid') {
                        $('#otp_status').html('Invalid otp');
                        $('#otp_status').css('color', 'red');
                        $('#update').hide();
                    } else {
                        //alert(result);
                        $('#otp_status').html('otp is correct');
                        $('#otp_status').css('color', 'green');
                        location.reload();
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