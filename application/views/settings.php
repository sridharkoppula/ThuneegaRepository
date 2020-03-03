<?php
//$email=$_SESSION['login_user'];
//$query = mysqli_query($con,"select * from user where email = '$email' ");
//echo $email;
//$rowcount=mysqli_num_rows($query);
//if($rowcount==0){
if ($_SESSION['user'] == '' || empty($_SESSION['user']) ) {

    echo "
            <script type=\"text/javascript\">
            alert('Please Login with registered ID');
            </script> ";
} else {
    ?>
       
            <title>Settings</title>

            <!-- Custom styles for this template -->
            <link href="dashboard.css" rel="stylesheet">
            <style>
                .container-fluid{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            .container-fluid {margin-top:16%;}
        }
            </style>
        <body>
            <?php
            if (isset($results) && $results != '') {
                $result = json_decode($results, TRUE);
                ?>
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-sm-3 col-md-2 sidebar">
                            <ul class="nav nav-sidebar">
                                <li class="active"><a href="#">Profile <span class="sr-only">(current)</span></a></li>
                                <li><a href="#" class="" data-toggle="modal" data-target="#passmodalForm">Change Password</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#addmodalForm">Update Address</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#mobmodalForm">Change Mobile</a></li>
                            </ul>
                        </div>
                        <?php
                        //$user_det=mysqli_query($con,"select * from user where email = '$email' ");
                        //$rws =mysqli_fetch_assoc($user_det);
                        //echo 'success'; 
                        ?>
                        <div class="col-sm-8 blog-main">


                            <div class="row placeholders">
                                <div class="col-xs-6 col-sm-3 placeholder"><P><strong>Name:&nbsp&nbsp&nbsp&nbsp</strong><?php echo $result[0]['fname'] . ' ' . $result[0]['lname']; ?></p>
                                    <P><strong>Email:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><?php echo $result[0]['email']; ?></p>
                                    <P><strong>Mobile:&nbsp&nbsp&nbsp</strong><?php echo $result[0]['mobile']; ?></p>
                                    <P><strong>Address:&nbsp&nbsp&nbsp<br></strong><?php echo $result[0]['address']; ?></p>
                                    <P><strong>Pincode:&nbsp&nbsp&nbsp</strong><?php echo $result[0]['pincode']; ?></p>
                                </div>


                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <!-- Modal -->
                                    <div class="modal fade" id="passmodalForm" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Change</h4>
                                                </div>

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <p class="statusMsg"></p>
                                                    <form role="form">                    
                                                        <div class="form-group">
                                                            <label for="inputName">Current Password</label>
                                                            <input type="password" class="form-control" id="cpass" placeholder="Current Password" pattern=".{6,}" title="Six or more characters" required/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail">New Password</label>
                                                            <input type="password" class="form-control" id="npass" placeholder="New Password" title="Six or more characters" required/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputMessage">Confirm Password</label>
                                                            <input type="password" class="form-control" id="cnpass" placeholder="Confirm Password" title="Six or more characters" required>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="relFun()">Close</button>
                                                    <button type="button" class="btn btn-primary submitBtn" onclick="submitPassForm()">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <div class="modal fade" id="addmodalForm" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Changes</h4>
                                                </div>

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <p class="statusMsg"></p>
                                                    <form role="form">                    
                                                        <div class="form-group">
                                                            <label for="inputName">Address</label>
                                                            <textarea class="form-control" id="address" placeholder="Enter Address Details" minlength="10"></textarea>
                                                        </div>          
                                                        <div class="form-group">
                                                            <label for="inputMessage">Pincode</label>
                                                            <input type="number" class="form-control" id="pincode" placeholder="Pincode" title="Six or more characters" required>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="relFun()">Close</button>
                                                    <button type="button" class="btn btn-primary submitBtn" onclick="submitAddressForm()">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <div class="modal fade" id="mobmodalForm" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Changes</h4>
                                                </div>

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <p class="statusMsg"></p>
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="inputMessage">Mobile</label>
                                                            <input type="number" class="form-control" id="mobile" placeholder="Mobile" title="Valid mobile number" required>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="relFun()">Close</button>
                                                    <button type="button" class="btn btn-primary submitBtn" onclick="submitMobileForm()">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <?php
                                //print_r($result);
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="../../dist/js/bootstrap.min.js"></script>

            <script src="../../assets/js/vendor/holder.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
    </html>

<?php } ?>


<script>
                                                        function relFun() {
                                                            location.reload();
                                                        }
                                                        function submitPassForm() {
                                                            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                                                            var cpass = $('#cpass').val();
                                                            var npass = $('#npass').val();
                                                            var cnpass = $('#cnpass').val();
                                                            var opass = $('#opass').val();
                                                            //var strMD5 = CryptoJS.MD5(opass).toString();
                                                            if (cpass.trim() === '' || cpass.length < 6) {
                                                                alert('Password must be 6 characters.');
                                                                $('#cpass').focus();
                                                                return false;
                                                            } else if (npass.trim() === '' || npass.length < 6) {
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
                                                                    url: "<?php echo site_url('Login/changePassword') ?>",
                                                                    data: 'contactFrmSubmit=1&cpass=' + cpass + '&npass=' + npass + '&cnpass=' + cnpass,
                                                                    beforeSend: function () {
                                                                        $('.submitBtn').attr("disabled", "disabled");
                                                                        $('.modal-body').css('opacity', '.5');
                                                                    },
                                                                    success: function (msg) {
                                                                        //alert(msg);
                                                                        if (msg === 'success') {
                                                                            $('#cpass').val('');
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

                                                        function submitAddressForm() {
                                                            //var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;                      
                                                            var addrs = $('#address').val();
                                                            var pin = $('#pincode').val();

                                                            if (addrs.trim() == '') {
                                                                alert('Please enter address details.');
                                                                $('#address').focus();
                                                                return false;
                                                            } else if(pin.trim() == '' || pin.length < 6){
                                                                alert('Please enter valid pincode.');
                                                                $('#pincode').focus();
                                                                return false;
                                                            } else {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "<?php echo site_url('Login/changeAddress') ?>",
                                                                    data: 'contactFrmSubmit=1&address=' + addrs+ '&pincode=' + pin,
                                                                    beforeSend: function () {
                                                                        $('.submitBtn').attr("disabled", "disabled");
                                                                        $('.modal-body').css('opacity', '.5');
                                                                    },
                                                                    success: function (msg) {
                                                                        //alert(msg);
                                                                        if (msg === 'success') {
                                                                            $('#address').val('');
                                                                            $('.statusMsg').html('<span style="color:green;">Address changed.</p>');
                                                                            location.reload();
                                                                        } else {
                                                                            $('.statusMsg').html('<span style="color:red;">Please try again.</span>');
                                                                        }
                                                                        $('.submitBtn').removeAttr("disabled");
                                                                        $('.modal-body').css('opacity', '');
                                                                    }
                                                                });
                                                            }
                                                        }
                                                        
                                                        function submitMobileForm() {
                                                            //var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;                      
                                                            var mob = $('#mobile').val();

                                                            if (mob.trim() == '') {
                                                                alert('Please enter address details.');
                                                                $('#mobile').focus();
                                                                return false;
                                                            } else {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "<?php echo site_url('Login/changeMobile') ?>",
                                                                    data: 'contactFrmSubmit=1&mobile=' + mob,
                                                                    beforeSend: function () {
                                                                        $('.submitBtn').attr("disabled", "disabled");
                                                                        $('.modal-body').css('opacity', '.5');
                                                                    },
                                                                    success: function (msg) {
                                                                        //alert(msg);
                                                                        if (msg === 'success') {
                                                                            $('#address').val('');
                                                                            $('.statusMsg').html('<span style="color:green;">Mobile number changed.</p>');
                                                                            location.reload();
                                                                        } else {
                                                                            $('.statusMsg').html('<span style="color:red;">Please try again.</span>');
                                                                        }
                                                                        $('.submitBtn').removeAttr("disabled");
                                                                        $('.modal-body').css('opacity', '');
                                                                    }
                                                                });
                                                            }
                                                        }
</script>