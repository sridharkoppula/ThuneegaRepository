<!DOCTYPE html>
<html>

<head>
    <title>Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .custom-fa {
            font-size: 125px !important;
        }
        
        .stock,
        .sales,
        .notifications,
        .upload,
        .orders,
        .expenses {
            min-width: 200px;
            min-height: 200px;
            /* background-image: linear-gradient(45deg, #2f8fe0a6, #b50a88a3); */
            box-shadow: 0 4px 4px 0 #777;
        }
        
        .admin-btn {
            margin-top: 5px;
        }
        
        .custom-btn {
            border-radius: 17px !important;
            box-shadow: 0 4px 4px 0 grey !important;
            outline-color: transparent;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 stock">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-shopping-basket custom-fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-4">
                        <strong>Stock</strong>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 sales">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-shopping-bag custom-fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-4">
                        <strong>Sales</strong>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 notifications">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-commenting custom-fa" aria-hidden="true" title="Send SMS"></i>
                    </div>
                    <div class="col-md-8">
                        <strong>Send SMS to customers</strong>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary custom-btn" data-toggle="modal" data-target="#myModal">To one customer</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary custom-btn" data-toggle="modal" data-target="#myModal">To multiple customers</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary custom-btn admin-btn" data-toggle="modal" data-target="#adminModal">To admin</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-6 upload">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-cloud-upload custom-fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-4">
                        <strong>Upload Products</strong>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-6 orders">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-truck custom-fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-4">
                        <strong>Orders</strong>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-6 expenses">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-inr custom-fa" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-4">
                        <strong>Expenses</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Send SMS</h4>
                    </div>
                    <div class="modal-body">
                        Mobile : <input type="number" name="mobile" id="mobile" maxlength="12" /> Message : <input type="text" name="message" id="message" />
                        <button class="btn btn-info custom-btn" onclick="sendSingleSMS()">Send</button>
                        <span class="text-success"></span>
                        <span class="text-danger"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Admin -->
        <div class="modal fade" id="adminModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Send SMS</h4>
                    </div>
                    <div class="modal-body">
                        Message : <input type="text" name="admMessage" id="admMessage" />
                        <button class="btn btn-info custom-btn" onclick="sendAdminSMS()">Send</button>
                        <span class="text-success"></span>
                        <span class="text-danger"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    function sendSingleSMS() {
        var mobileNumber = $("#mobile").val();
        var messageValue = $("#message").val();
        var smstype = 'single';
        // alert('Mobile :' + mobileNumber + ' Message :' + messageValue);
        var dataString = 'mobile=' + mobileNumber + '&message=' + messageValue + '&type=' + smstype;
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('login/sms'); ?>",
            data: dataString,
            cache: false,
            success: function(result) {
                // alert(result);
                if (result === 'success') {
                    $('.text-success').text('SMS sent successfully');
                    $('.text-danger').text('');
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                } else {
                    //alert("Success");
                    $('.text-danger').text('Please try again');
                    $('.text-success').text('');
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            }
        });
    }
    
    function sendAdminSMS() {
        var mobileNumber = '0'
        var messageValue = $("#admMessage").val();
        var smstype = 'admin';
        // alert('Mobile :' + mobileNumber + ' Message :' + messageValue);
        var dataString = 'mobile=' + mobileNumber + '&message=' + messageValue + '&type=' + smstype;
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('login/sms'); ?>",
            data: dataString,
            cache: false,
            success: function(result) {
                // alert(result);
                if (result === 'success') {
                    $('.text-success').text('SMS sent successfully');
                    $('.text-danger').text('');
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                } else {
                    //alert("Success");
                    $('.text-danger').text('Please try again');
                    $('.text-success').text('');
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            }
        });
    }
</script>

</html>