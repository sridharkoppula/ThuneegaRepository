<?php $serverroot = "https://thuneegadesigners.com/"; ?>
<style>
    #footer{
	width: 100%;
	background-image: linear-gradient(90deg, #5475d2 20%, #6fdeab 100%);
	color: #000;
	padding: 30px;
}
#home-title{
	width:90%;
	margin-left: auto;
	margin-right: auto;
}
#feat , #af{
    background: #ffffff52;
    border: 0px solid white;
    padding: 10px;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    text-align: center;
}
#addr , #pop{
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    background: #2b02282e;    
    min-height: 150px;
}
#mqcod{
    padding-left: 5%;
    color: #ffffff;
}
ul#popular li{
    display: inline;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    background: #2b02282e;
}
ul li{
    list-style: none;
}
ul#payment li{
    display: inline;
}
.fb-like{
    margin-left:5%; 
    margin-top:0%;
}
#copy{
    padding-left: 10%;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    background: #2b02282e;
}
.fa-whatsapp{
    padding-right: 1%;
    color: green;
}
.rfc{
    font-size: 18px;
    color:white;
    font-weight: bold;
    text-shadow: 1px 1px #cccccc;
    font-family: serif;
    padding-left: 10px;
}
.fa-stack:hover .fa-paper-plane ,.fa-stack:hover .fa-truck ,.fa-stack:hover .fa-hand-holding-usd {
    color: #9343c5;
}
.fa-stack:hover .fa-circle {
    color: transparent;
    border-style: dotted;
    animation-duration: 1200ms;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    -webkit-animation:blink 1200ms infinite;
}
@keyframes blink {
    from {
        color:black;
    }
    to {
        color:white;
    }
}
@-webkit-keyframes blink {
    from {
        color:#43c5a1;
    }
    to {
        color:white;
    }
}

i.fa-circle {
    color: #ffffff00;
    border-color: white;
    border: 2px solid white;
    border-radius: 31px;
    min-width: 60px;
    min-height: 60px;

}

</style>
<div class="footer" id="footer">

    <div class="row" >
        <div class="col-md-4" id="feat">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-paper-plane fa-stack-1x fa-inverse"></i>
            </span>
            <span class="rfc" >Return & Exchange</span>

        </div>
        <div class="col-md-4" id="feat">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas    fa-truck fa-stack-1x fa-inverse"></i>
            </span>
            <span class="rfc">Free Shipping</span>
        </div>
        <div class="col-md-4" id="feat">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-hand-holding-usd fa-stack-1x fa-inverse"></i>
            </span>
            <span class="rfc" >Cash on Delivery</span>
        </div>
    </div>
    <div class="row" id="af">
        <div class="col-md-4" id="addr">
            <h6>ADDRESS</h6>
            <ul>
                <li>F# G8, Smrithi Block</li>
                <li>Medha Rejoice</li>
                <li>RK Nagar</li>
                <li>Attapur (P.No.126) Hyderabad-500048</li>
            </ul>
        </div>       
        <div class="col-md-4">
            <marquee>
                <span>Free Shipping In India</span>
                <span id="mqcod" >Cash On Delivery Available in India</span>
            </marquee>
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

            <div class="fb-like" data-href="https://www.facebook.com/thuneegadesigner" data-layout="button_count" data-action="like" data-size="small" 

                 data-show-faces="false" data-share="false"></div>
            <p>
                <span>Support : support@thuneegadesigners.com</span><br>
                <i class="fab fa-whatsapp"></i><span>WhatsApp : +91 91333 34045</span>
            </p>
        </div>
        <div class="col-md-4" id="pop">
            <h6>POPULAR SEARCHES</h6>
            <ul id="popular">
                <li>Kota Cotton</li>
                <li>Organza</li>
                <li>Pure Kora Organza</li>
            </ul>
            <ul id="popular">
                <li>Kopadam Ciko</li>
                <li>Kanchi Kora Pattu</li>
                <li>Chiffon</li>
            </ul>
        </div>
    </div>
    <div class="row" id="copy">
        <div class="col-md-4">
            <span>&copy; <?php echo date('Y'); ?></span>
            <span>Thuneega Designers</span>
        </div>
        <div class="col-md-4">
            <ul id="payment">
                <li><img src="<?php echo $serverroot; ?>gallery/product-images/icons/payumoney-logo.png" alt="PayUmoney"></li>
                <li><img src="<?php echo $serverroot; ?>gallery/product-images/icons/visa_PNG30.png" alt="Visa"></li>
                <li><img src="<?php echo $serverroot; ?>gallery/product-images/icons/MasterCard_logo.png" alt="MasterCard" ></li>
            </ul>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>

</body>
</html>
