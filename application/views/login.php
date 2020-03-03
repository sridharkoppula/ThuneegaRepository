<?php
$serverroot = "https://thuneegadesigners.com/";
$site = "https://thuneegadesigners.com/";
?>
<style>
.hiddenblock, .submitBtn{
        display: none;
    }
    #login{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #login {margin-top:16%;}
        }
</style>
<link rel="stylesheet" href="<?php echo $site; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $serverroot; ?>css/style1.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<link rel="stylesheet" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid" id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form role="form" action="" method="post" name="signin">
                    <fieldset>
                        <legend>Sign In</legend>
                        <div class="form-group">
                            <input type="hidden" name="redirurl" value="" />
                            <label for="name">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" class="form-control" />

                        </div>

                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control"  />

                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" name="signin" value="Sign In" class="btn btn-primary" />
                        </div>
                        <a href="#" data-toggle="modal" data-target="#passmodalForm">Forgot Password? </a>

                    </fieldset>
                </form>
                <span class="text-danger"><?php if (isset($errormsg)) {
    echo $errormsg;
} ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">    
                Not yet Registered? <a href="<?php echo site_url('login/reg') ?>">Register Here</a>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 well">
            <div class="modal fade" id="passmodalForm" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Forget Password</h4>
                                                </div>

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <p class="statusMsg"></p>
                                                    <form role="form">                    
                                                        <div class="form-group">
                                                            <label for="inputName">Email</label>
                                                            <input type="email" class="form-control" id="fgemail" placeholder="Email" title="Registered email" required/>
                                                            <span class="email-danger red"></span>
                                                            <span id="next" style="display:block"><buttton onclick="validateEmail();" class="btn btn-primary">Next</button></span> 
                                                        </div>
                                                        <div class="form-group hiddenblock" id="otpblock">
                            					<label for="name" class="red">OTP(Check Email/Mobile)</label>
                            					<input type="text" name="otp" id="otp" placeholder="Enter OTP" required class="form-control" onkeyup="checkotp();" autocomplete="off"/>                        
                            					<span id="otp_status"></span>                        
                        				</div>
                                                        <div class="form-group hiddenblock">
                                                            <label for="inputEmail">New Password</label>
                                                            <input type="password" class="form-control" id="npass" placeholder="New Password" title="Six or more characters" required/>
                                                        </div>
                                                        <div class="form-group hiddenblock">
                                                            <label for="inputMessage">Confirm Password</label>
                                                            <input type="password" class="form-control" id="cnpass" placeholder="Confirm Password" title="Six or more characters" required>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Footer -->
                                                <div class="modal-footer ">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="relFun()">Close</button>
                                                    <button type="button" class="btn btn-primary submitBtn " onclick="submitPassForm()">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
        </div>
    </div>
</div>
<script src="https://thuneegadesigners.com/sweetalert-master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://thuneegadesigners.com/sweetalert-master/dist/sweetalert.css">
<script>

    $(document).ready(function () {
        $("#submit").click(function () {
            var email = $("#email").val();
            var password = $("#password").val();
// Returns successful data submission message when the entered information is stored in database.
            var dataString = 'email1=' + email + '&password1=' + password;
            if (email == '')
            {
                swal({
                    title: "Error!",
                    text: "Please enter Email Address!",
                    type: "error",
                    confirmButtonText: "OK"
                });
//alert("Please enter Email Address");
            } else if (password == '') {
                swal({
                    title: "Error!",
                    text: "Please enter Password!",
                    type: "error",
                    confirmButtonText: "OK"
                });
//alert("Please enter Password");
            } else
            {
// AJAX Code To Submit Form.
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('login/credentials'); ?>",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        //alert(result);
                        if (result == 'invalid') {

                            swal({
                                title: "Error!",
                                text: "Invalid Email or Password!",
                                type: "error",
                                confirmButtonText: "OK"
                            });


                        } else {
//alert("Success");
                            if (email == 'admin@') {
                                window.location = 'https://thuneegadesigners.com/Admin';
                            }
                            //window.location.reload(history.go(-1));
                            window.history.go(-1);
                        }
                    }
                });
            }
            return false;
        });
    });

</script>
<script type="text/javascript">
//guest
                                function validateEmail()
                                {
                                    var email = $("#fgemail").val();
                                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                    var emailvalid = regex.test(email);
                                    if (email === '' || !emailvalid) {
                                        alert('Please enter valid email');
                                        return false;
                                    } else {
                                        var dataString = 'email=' + email;
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo site_url('login/forgetPass'); ?>",
                                            data: dataString,
                                            cache: false,
                                            success: function (result) {
                                                //alert(result);
                                                if (result === 'new') {                                                    
                                                    $('#next').hide();
                                                    $('#otpblock').hide();
                                                    $('.hiddenblock').hide();
                                                    $(".red").text("Email not exist");
                                                } else {                                             
                                                    $("#fgemail").prop('disabled', true);
                                                    $('#otpblock').show();
                                                    $('#next').hide();
                                                    $('.hiddenblock').show();
                                                }
                                            }
                                        });
                                    }


                                }
//Guest OTP
</script>
<script type="text/javascript">
    function checkotp()
    {
        var email = document.getElementById("fgemail").value;
        var otp = document.getElementById("otp").value;
        if (otp)
        {
            var dataString = 'otp=' + otp + '&email=' + email;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Cart_controller/checkotpUser'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'invalid') {
                        $('#otp_status').html('Invalid otp');
                        $('#otp_status').css('color', 'red');
                        $('#update').hide();
                        $('.submitBtn').hide();
                    } else {
                        //alert(result);
                        $('#otp_status').html('');
                        $('.submitBtn').show();
                    }
                }
            });
        } 
    }
    
                                                            function submitPassForm() {
                                                            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                                                            var email= $('#fgemail').val();
                                                            var npass = $('#npass').val();
                                                            var cnpass = $('#cnpass').val();
                                                            //var strMD5 = CryptoJS.MD5(opass).toString();
                                                            if (npass.trim() === '' || npass.length < 6) {
                                                                alert('Password must be 6 characters.');
                                                                $('#npass').focus();
                                                                return false;
                                                            } else if (cnpass.trim() === '' || cnpass.length < 6) {
                                                                alert('Password must be 6 characters.');
                                                                $('#cnpass').focus();
                                                                return false;
                                                            } else if (npass != cnpass) {
                                                                alert('New and Confirm password must be same.');
                                                                $('#cnpass').focus();
                                                                return false;
                                                            } else {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "<?php echo site_url('Login/updatePassword') ?>",
                                                                    data: 'contactFrmSubmit=1&email=' + eamil+ '&npass=' + npass + '&cnpass=' + cnpass,
                                                                    beforeSend: function () {
                                                                        $('.submitBtn').attr("disabled", "disabled");
                                                                        $('.modal-body').css('opacity', '.5');
                                                                    },
                                                                    success: function (msg) {
                                                                        //alert(msg);
                                                                        if (msg === 'success') {
                                                                            $('#email').val('');
                                                                            $('#npass').val('');
                                                                            $('#cnpass').val('');
                                                                            $('.statusMsg').html('<span style="color:green;">Password changed.</p>');
                                                                        } else {
                                                                            $('.statusMsg').html('<span style="color:red;">Please enter valid current password.</span>');
                                                                        }
                                                                        $('.submitBtn').removeAttr("disabled");
                                                                        $('.modal-body').css('opacity', '');
                                                                    }
                                                                });
                                                            }
                                                        }
</script>