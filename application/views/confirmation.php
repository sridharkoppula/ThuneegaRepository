<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.png">
        <title>Confirmation-Thuneega Designers</title>
        <style>
        #confirm{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #confirm {margin-top:16%;}
        }
</style>

    </head>
    <body>
        <div class="container" id="confirm">
            <div class="row">
                <div class="col-md-2"></div>  
                <div class="col-md-8">
                    <form action="<?= $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
                        <input type="hidden" name="key" value="<?= $mkey ?>" />
                        <input type="hidden" name="hash" value="<?= $hash ?>"/>
                        <input type="hidden" name="txnid" value="<?= $tid ?>" />
                        <div class="form-group">
                            <label class="control-label">Total Payable Amount(In Rupees)</label>
                            <input class="form-control" name="amount" id="amount" value="<?= $amount ?>"  readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Your Name</label>
                            <input class="form-control" name="firstname" id="firstname" value="<?= $name ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" name="email" id="email" value="<?= $mailid ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input class="form-control" name="phone" value="<?= $phoneno ?>" readonly />
                        </div>
                        <div class="form-group">
                            <label class="control-label"> Booking Info</label>
                            <textarea class="form-control" name="productinfo" readonly><?= $productinfo ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input class="form-control" name="address1" value="<?= $address ?>" readonly/>     
                        </div>
                        <div class="form-group">
                            <input name="surl" value="<?= $sucess ?>"  type="hidden" />
                            <input name="furl" value="<?= $failure ?>"  type="hidden" />                             
                            <input type="hidden" name="service_provider" value="" /> 
                            <input name="curl" value="<?= $cancel ?> " type="hidden" />
                        </div>                        
                        <div class="form-group text-center">
                            <div class="col-sm-2">
                                <input type="submit" value="Pay Now" class="btn btn-success" />
                            </div>
                            <?php
                            if ($cod) {
                                ?>
                                <div class="col-sm-2">
                                    <input type="button" value="COD" onclick="codOrder()" class="btn btn-success" />
                                </div>
                            <?php } ?>
                        </div>
                    </form>                                  
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>    
        <script>
            function codOrder()
            {
                var email = document.getElementById("email").value;
                var amount = document.getElementById("amount").value;
                var dataString = 'amount=' + amount + '&email=' + email;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Status/placeCOD'); ?>",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        //alert(result);
                        if (result === 'success') {
                            window.location = "https://thuneegadesigners.com/index.php/order/success";                          
                        } else {
                            //alert('Please try again later');
                            window.location = "https://thuneegadesigners.com/index.php/order/success";

                        }
                    }
                });
            }

        </script>
    </body>
</html>    