<?php $site = "https://thuneegadesigners.com/"; ?>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<link rel="stylesheet" href="<?php echo $site; ?>assets/css/style.css">
<style>
    body{
        font-family: 'Josefin Sans', sans-serif;
        background-image:url(https://thuneegadesigners.com/gallery/product-images/icons/pattern.jpg);
    }
    #hiddenblock{
        display: none;
    }
    #guest{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #guest {margin-top:16%;}
        }

</style>
<body onload="getaddress()">
<div class="container" id="guest">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <span class="text-success"></span>
            <span class="text-danger"></span>
            <form role="form" action="" method="post" name="signupform">
                <input type="hidden" name="location" id="location" value="" />
                <fieldset>
                    <legend>User Details</legend>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required value="" class="form-control" />
                        <span class="email-danger red"></span>
                        <span id="next" style="display:block"><buttton onclick="checkguest();" class="btn btn-primary">Next</button></span>                      
                    </div>
                    <div id="hiddenblock">
                        <div class="form-group" id="otpblock">
                            <label for="name" class="red">OTP(Your details already exist.Check Email/Mobile)</label>
                            <input type="text" name="otp" id="otp" placeholder="Enter OTP" required class="form-control" onkeyup="checkotp();" autocomplete="off"/>                        
                            <span id="otp_status"></span>                        
                        </div>
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="Enter First Name" required value="" class="form-control" />
                            <span class="fname-danger red"></span>
                        </div>

                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required  class="form-control" />

                        </div>
                        <div class="form-group">
                            <label for="name">Mobile</label>
                            <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile Number" required class="form-control" />
                            <span class="mobile-danger red"></span>
                        </div>
                        <div class="form-group">
                            <label for="name">City</label>
                            <input type="text" id="city" name="city" placeholder="Enter City" required  class="form-control" />
                            <span class="city-danger red"></span>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea id="address" name="address" rows="5" cols="40" class="form-control"></textarea>
                            <span class="address-danger red"></span>
                        </div>
                        <div class="form-group">
                            <label for="name">Pincode</label>
                            <input type="text" id="pincode" name="pincode" placeholder="Enter Pincode" required  class="form-control" onkeyup="checkpin();" autocomplete="off"/>
                            <span class="pincode-danger red"></span><span id="cod"></span>
                        </div>

                        <div class="form-group">                            
                                <input type="submit" id="add" name="add" value="Add & GO" class="btn btn-primary" />                        
                                <input type="submit" id="update" name="update" value="Update & GO" class="btn btn-primary" />
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div> <!-- details -->

<script type="text/javascript">
//guest
                                function checkguest()
                                {
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
                                                    $("#update").show();
                                                }
                                            }
                                        });
                                    }


                                }
//Guest OTP
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
                        $('#cod').html('*COD not available for this pincode');
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
                        $('#update').show();
                        var details = JSON.parse(result);
                        //alert(details[0].id);
                        $("#email").val(details[0].email);
                        $("#fname").val(details[0].fname);
                        $("#lname").val(details[0].lname);
                        $("#mobile").val(details[0].mobile);
                        $("#city").val(details[0].city);
                        $("#address").val(details[0].address);
                        $("#pincode").val(details[0].pincode);
                        $('#otp_status').html('otp is correct');
                        $('#otp_status').css('color', 'green');

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
<script>
    function getaddress() {
        $(document).ready(function () {
            if (navigator.geolocation) {               
                navigator.geolocation.getCurrentPosition(showLocation);
            } else {
                $('#location').html('Geolocation is not supported by this browser.');
            }
        });

        function showLocation(position) {            
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            //var datastring = 'latitude=' + latitude + '&longitude=' + longitude;
            var datastring = 'latitude=17.385044&longitude=78.486671';
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('Login/getLocation') ?>",
                data: datastring,
                success: function (msg) {
                    //alert(msg);
                    if (msg) {
                        $("#location").attr("value", msg);
                    } else {
                        $("#location").html('Not Available');
                    }
                }


            });
        }
    }
</script>
<script>
//Add guest user
    $(document).ready(function () {
        $("#add").click(function () {
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var city = $("#city").val();
            var address = $("#address").val();
            var pincode = $("#pincode").val();
            var map_loc = $("#location").val();
            var status = true;
            if (fname === '' || fname.length < 3) {
                status = false;
                $('.fname-danger').text('Field not be empty or not less than 2 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                $('.fname-danger').text('');
            }
            if (email === '' || email.length < 6) {
                status = false;
                $('.email-danger').text('Field not be empty or not less than 6 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                status = true;
                $('.email-danger').text('');

            }
            if (mobile === '' || mobile.length < 10) {
                status = false;
                $('.mobile-danger').text('Field not be empty or not less than 10 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                status = true;
                $('.mobile-danger').text('');
            }
            if (city === '') {
                status = false;
                $('.city-danger').text('Field not be empty');
                return false;
            } else {
                status = true;
                $('.city-danger').text('');
            }
            if (address === '') {
                status = false;
                $('.address-danger').text('Please enter proper address');
                return false;
            } else {
                status = true;
                $('.address-danger').text('');
            }
            if (pincode === '' || pincode.length < 5) {
                status = false;
                $('.pincode-danger').text('Please enter proper pincode');
                return false;
            } else {
                status = true;
                $('.pincode-danger').text('');
            }
            var dataString = 'email1=' + email;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('login/email'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'existed') {
                        status = false;
                        $('.email-danger').text('Email existed already');
                        $("html, body").animate({scrollTop: 0}, "slow");

                    } else {
                        //alert("Success");
                        $('.email-danger').text('');
                        status = true;
                    }
                }
            });

// Returns successful data submission message when the entered information is stored in database.
            if (status)
             {
                var dataString = 'email1=' + email + '&fname=' + fname + '&lname=' + lname + '&mobile=' + mobile + '&city=' + city + '&address=' + address + '&pincode=' + pincode+'&map_loc='+map_loc;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('login/guest'); ?>",
                    data: dataString,
                    cache: false,                    
                    success: function (result) {
                        //alert(result);
                        if (result === 'success') {
                            $('.text-success').text('Registered Successfully');
                            $('.text-danger').text('');
                            $("html, body").animate({scrollTop: 0}, "slow");
                            $("#add").hide();
                            window.location='https://thuneegadesigners.com/index.php/secure_pay';
                        } else {
//alert("Success");
                            $('.text-danger').text('Please try again');
                            $('.text-success').text('');
                            $("html, body").animate({scrollTop: 0}, "slow");
                        }
                    }
                });
            }
            return false;
        });
    });
    
    //update Guest user
    $(document).ready(function () {
        $("#update").click(function () {
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var city = $("#city").val();
            var address = $("#address").val();
            var pincode = $("#pincode").val();
            var map_loc = $("#location").val();
            var status = true;
            if (fname === '' || fname.length < 3) {
                status = false;
                $('.fname-danger').text('Field not be empty or not less than 2 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                $('.fname-danger').text('');
            }
            if (email === '' || email.length < 6) {
                status = false;
                $('.email-danger').text('Field not be empty or not less than 6 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                status = true;
                $('.email-danger').text('');

            }
            if (mobile === '' || mobile.length < 10) {
                status = false;
                $('.mobile-danger').text('Field not be empty or not less than 10 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                status = true;
                $('.mobile-danger').text('');
            }
            if (city === '') {
                status = false;
                $('.city-danger').text('Field not be empty');
                return false;
            } else {
                status = true;
                $('.city-danger').text('');
            }
            if (address === '') {
                status = false;
                $('.address-danger').text('Please enter proper address');
                return false;
            } else {
                status = true;
                $('.address-danger').text('');
            }
            if (pincode === '' || pincode.length < 5) {
                status = false;
                $('.pincode-danger').text('Please enter proper pincode');
                return false;
            } else {
                status = true;
                $('.pincode-danger').text('');
            }
            var dataString = 'email1=' + email;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('login/email'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'existed') {
                        status = false;
                        $('.email-danger').text('User already exist.Please Login');
                        $("html, body").animate({scrollTop: 0}, "slow");

                    } else {
                        //alert("Success");
                        $('.email-danger').text('');
                        status = true;
                    }
                }
            });

// Returns successful data submission message when the entered information is stored in database.
            if (status)
             {
                var dataString = 'email1=' + email + '&fname=' + fname + '&lname=' + lname + '&mobile=' + mobile + '&city=' + city + '&address=' + address + '&pincode=' + pincode+'&map_loc='+map_loc;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('update/guest'); ?>",
                    data: dataString,
                    cache: false,                    
                    success: function (result) {
                        //alert(result);
                        if (result === 'success') {
                            $('.text-success').text('Registered Successfully');
                            $('.text-danger').text('');
                            $("html, body").animate({scrollTop: 0}, "slow");
                            $("#add").hide();
                            window.location='https://thuneegadesigners.com/index.php/secure_pay';
                        } else {
//alert("Success");
                            $('.text-danger').text('Please try again');
                            $('.text-success').text('');
                            $("html, body").animate({scrollTop: 0}, "slow");
                        }
                    }
                });
            }
            return false;
        });
    });
</script>
</body>