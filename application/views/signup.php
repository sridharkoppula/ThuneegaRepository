<?php
$serverroot = "https://thuneegadesigners.com/";
$site = "https://thuneegadesigners.com/";
?>

<link rel="stylesheet" href="<?php echo $site; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $serverroot; ?>css/style1.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    #signup{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #signup {margin-top:16%;}
        }
</style>

<div class="container" id="signup">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">

            <form role="form" action="" method="post" name="signupform">
                <fieldset>
                    <span class="text-success"></span>
                    <span class="text-danger red"></span>
                    <legend>Sign Up</legend>

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
                        <label for="name">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required  class="form-control" />
                        <span class="email-danger red"></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" onkeyup="checklength();" required class="form-control" />
                        <span class="pass-danger red"></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" onkeyup="checkmatch();" required class="form-control" />
                        <span class="cpassword-danger red"></span>
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
                        <input type="text" id="pincode" name="pincode" placeholder="Enter Pincode" required  class="form-control" />
                        <span class="pincode-danger red"></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="signup" name="signup" value="Sign Up" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
            Already Registered? <a href="<?php echo site_url('login/') ?>">Login Here</a>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
                            function checklength() {
                                var password = $("#password").val();
                                if (password === '' || password.length < 6) {
                                    //alert(password);
                                    $('.pass-danger').text('Field not be empty or not less than 6 characters');
                                } else {
                                    $('.pass-danger').text('');
                                }

                            }

                            function checkmatch() {
                                var password = $("#password").val();
                                var cpassword = $("#cpassword").val();
                                //alert(password+cpassword);
                                if (cpassword === '' || password !== cpassword) {
                                    //alert('hello');
                                    $('.cpassword-danger').css('color', 'red');
                                    $('.cpassword-danger').text('Password not match');
                                } else {
                                    $('.cpassword-danger').css('color', 'green');
                                    $('.cpassword-danger').text('Password matched');
                                }
                            }


                            $(document).ready(function () {
                                $("#signup").click(function () {
                                    var fname = $("#fname").val();
                                    var lname = $("#lname").val();
                                    var email = $("#email").val();
                                    var password = $("#password").val();
                                    var cpassword = $("#cpassword").val();
                                    var mobile = $("#mobile").val();
                                    var city = $("#city").val();
                                    var address = $("#address").val();
                                    var pincode = $("#pincode").val();
                                    var status = true;
                                    if (fname === '' || fname.length < 3) {
                                        status = false;
                                        $('.fname-danger').text('Field not be empty or not less than 2 characters');
                                        $("html, body").animate({scrollTop: 0}, "slow");
                                        return false;
                                    } else {
                                        $('.fname-danger').text('');
                                    }
                                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                    var emailvalid = regex.test(email);
                                    if (email === '' || email.length < 6 || !emailvalid) {
                                        status = false;
                                        $('.email-danger').text('Please enter valid email ID');
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
                                    if (pincode === '' || pincode.length<5) {
                                        status = false;
                                        $('.pincode-danger').text('Please enter proper pincode');
                                        return false;
                                    } else {
                                        status = true;
                                        $('.pincode-danger').text('');
                                    }
                                    if (password !== cpassword || password === '') {
                                        $('.pass-danger').text('Please enter password/Confirm Password properly');
                                        $("html, body").animate({scrollTop: 0}, "slow");
                                        status = false;
                                        return false;
                                    } else {
                                        $('.pass-danger').text('');
                                        status = true;
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
                                        var dataString = 'email1=' + email + '&fname=' + fname + '&lname=' + lname + '&password=' + password + '&mobile=' + mobile + '&city=' + city + '&address=' + address + '&pincode=' + pincode;
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo site_url('login/new'); ?>",
                                            data: dataString,
                                            cache: false,
                                            success: function (result) {
                                                //alert(result);
                                                if (result === 'success') {
                                                    $('.text-success').text('Registered Successfully');
                                                    $('.text-danger').text('');
                                                    $("html, body").animate({scrollTop: 0}, "slow");

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