
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>

<style>
    .margin-top-20{
        margin-top: 20px;
    }
    body{
        background:url('https://thuneegadesigners.com/assets/images/feedback_bg.jpg');
        background-size:100% 100%;
        background-attachment: fixed; 
        background-repeat:no-repeat;
        font-family: 'Open Sans', sans-serif;
        padding-bottom: 40px;
    }
    .auth h1{
        color:#fff!important;
        font-weight:300;
        font-family: 'Open Sans', sans-serif;
    }
    .auth h1 span{
        font-size:21px;
        display:block;
        padding-top: 20px;
    }
    .auth .auth-box legend{
        color:#fff;
        border:none;
        font-weight:300;
        font-size:24px;
    }
    .auth .auth-box{
        background-color:#fff;
        max-width:460px;
        margin:0 auto;
        border:1px solid rgba(255, 255, 255, 0.4);;
        background-color: rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.2);
        margin-top:40px;
        -webkit-box-shadow: 0px 0px 30px 0px rgba(50, 50, 50, 0.32);
        -moz-box-shadow:    0px 0px 30px 0px rgba(50, 50, 50, 0.32);
        box-shadow:         0px 0px 30px 0px rgba(50, 50, 50, 0.32);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: background 1s ease-in-out;
        -moz-transition: background 1s ease-in-out;
        -ms-transition: background 1s ease-in-out;
        -o-transition: background 1s ease-in-out;
        transition: background 1s ease-in-out;
    }
    @media(max-width:460px){
        .auth .auth-box{
            margin:0 10px;
        }
    }

    .auth .auth-box input::-webkit-input-placeholder { /* WebKit browsers */
        color:    #fff;
        font-weight:300;
    }
    .auth .auth-box input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color:    #fff;
        font-weight:300;
    }
    .auth .auth-box input::-moz-placeholder { /* Mozilla Firefox 19+ */
        color:    #fff;
        font-weight:300;
    }
    .auth .auth-box input:-ms-input-placeholder { /* Internet Explorer 10+ */
        color:    #fff;
        font-weight:300;
    }
    .auth span.input-group-addon,
    .input-group-btn button{
        border:none;
        background: #fff!important;
        color:#000!important;
    }
    .auth form{
        font-weight:300!important;
    }
    .auth form input[type="text"],
    .auth form input[type="password"],
    .auth form input[type="email"],
    .auth form input[type="search"]{
        border:none;
        padding:10px 0 10px 0;
        background-color: rgba(255, 255, 255, 0)!important;
        background: rgba(255, 255, 255, 0);
        color:#fff;
        font-size:16px;
        border-bottom:1px dotted #fff;
        border-radius:0;
        box-shadow:none!important;
        height:auto;
    }
    .auth textarea{
        background-color: rgba(255, 255, 255, 0)!important;
        color:#fff!important;
    }
    .auth input[type="file"] {
        color:#fff;
    }
    .auth form label{
        color:#fff;
        font-size:21px;
        font-weight:300;
    }
    /*for radios & checkbox labels*/
    .auth .radio label,
    .auth label.radio-inline,
    .auth .checkbox label,
    .auth label.checkbox-inline{
        font-size: 14px;    
    }

    .auth form .help-block{
        color:#fff;
    }

    .auth form select option{
        color:#000;
    }
    /*multiple select*/


    /*Form buttons*/
    .auth form .btn{
        background:none;
        -webkit-transition: background 0.2s ease-in-out;
        -moz-transition: background 0.2s ease-in-out;
        -ms-transition: background 0.2s ease-in-out;
        -o-transition: background 0.2s ease-in-out;
        transition: background 0.2s ease-in-out;
    }
    .auth form .btn-default{
        color:#fff;
        border-color:#fff;
    }
    .auth form .btn-default:hover{
        background:rgba(225, 225, 225, 0.3);
        color:#fff;
        border-color:#fff;
    }
    .auth form .btn-primary:hover{
        background:rgba(66, 139, 202, 0.3);
    }
    .auth form .btn-success:hover{
        background:rgba(92, 184, 92, 0.3);
    }
    .auth form .btn-info :hover{
        background:rgba(91, 192, 222, 0.3);
    }
    .auth form .btn-warning:hover{
        background:rgba(240, 173, 78, 0.3);
    }
    .auth form .btn-danger:hover{
        background:rgba(217, 83, 79, 0.3);
    }
    .auth form .btn-link{
        border:none;
        color:#fff;
        padding-left:0;
    }
    .auth form .btn-link:hover{
        background:none;
    }


    .auth label.label-floatlabel {
        font-weight: 300;
        font-size: 11px;
        color:#fff;
        left:0!important;
        top: 1px!important;
    }
    #sub{
        margin-left:35%;
        background:#7DCEA0;
        border:none;
        border-radius: 12px;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    .text-success{
        color:#38C40E;
        background:white;
        font-size:18px;
        font-weight:bold;
        margin-left:45%;
    }
</style>
<br><br><br>
<div class="container auth" style="margin-top:3%;">
    <h1 class="text-center">Feedback/Suggestion <span>Help us to improve our services!</span> </h1>
    <span class="text-success"></span>
    <div id="big-form" class="well auth-box">
        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Your valuable suggestion</legend>



                <!-- Text input-->
                <div class="form-group">
                    <label class=" control-label" for="textinput">Email</label>  
                    <div class="">
                        <input id="textinput" name="email" placeholder="Email" class="form-control input-md" type="email" required>
                        <span class="help-block email-danger"></span>  
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class=" control-label" for="textarea">Comment</label>
                    <div class="">                     
                        <textarea class="form-control" id="textarea" name="sug" placeholder="Your comment" required></textarea>
                        <span class="help-block comment-danger"></span>                         
                    </div>
                </div>
                <div class="form-group">  
                    <div class="">
                        <input id="sub" name="comment"  class="form-control1" type="submit" value="Comment">
                        <span class="help-block"></span>  
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="clearfix"></div>
</div>

<script>

    $(document).ready(function () {
        $("#sub").click(function () {
            var email = $("#textinput").val();
            var comment = $("#textarea").val();
            var status=false;
            if (email === '' || email.length < 6) {
                status = false;
                $('.email-danger').text('Field not be empty or not less than 6 characters required');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                status = true;
                $('.email-danger').text('');

            }
            if (comment === '' || comment.length < 10) {
                status = false;
                $('.comment-danger').text('Minimum 10 characters');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            } else {
                status = true;
                $('.comment-danger').text('');
            }
            if(status){
            var dataString = 'email1=' + email+'&comment='+comment;
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Contactus/comment'); ?>",
                data: dataString,
                cache: false,
                success: function (result) {
                    //alert(result);
                    if (result === 'success') {
                        $('.text-success').text('Thank you for your valuable feedback');
                        $("html, body").animate({scrollTop: 0}, "slow");

                    } else {
                        //alert("Success");
                        $('.text-success').text('Please try again later');
                    }
                }
            });
            
            }

            return false;
        });
    });
</script>