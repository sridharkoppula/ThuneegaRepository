
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body{
        font-family: 'Josefin Sans', sans-serif;
        background-image:url(https://thuneegadesigners.com/gallery/product-images/icons/pattern.jpg);
    }
    #main-content{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            #main-content{margin-top:16%;}
        }
</style>
<!-- Main Content -->
<div id="main-content" class="wrapper clearfix" >           
    <section class="blcontactog-heading">
        <div class="contact-heading-wrapper">
            <div class="container">
                <div class="row">
                    <div class="contact-heading-inner">
                        <h1 class="page-title"><span>Contact us</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-content">
        <div class="contact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="contact-inner">
                        <div id="page">

                            <div class="google-maps-wrapper">
                                <div class="google-maps-inner">
                                    <div id="contact_map" class="map" >

                                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHOwSa7pIsNXf6a0Te2gzzr-d1Q8dPPPs'></script><div style='overflow:hidden;height:470px;width:1120px;'><div id='gmap_canvas' style='height:470px;width:1120px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.add-map.net/'>google map widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=8ab7962d4258a0148529b36ee942a6d7a327e4c5'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:16, center:new google.maps.LatLng(17.36887, 78.42668600000002), mapTypeId: google.maps.MapTypeId.ROADMAP}; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(17.36887, 78.42668600000002)}); infowindow = new google.maps.InfoWindow({content:'<strong style="color:#ed008c">Thuneega</strong>&nbsp;<strong style="color:#0077c1">Designers</strong><br><b style="color:hsla(0, 0%, 0%, 0.86)">#Flat G.8, Smrithi Block, Medha Rejoice Apt, Attapur<br>500048 Hyderabad</b><br>'}); google.maps.event.addListener(marker, 'click', function(){infowindow.open(map, marker); }); infowindow.open(map, marker); }google.maps.event.addDomListener(window, 'load', init_map);</script>




                                    </div>
                                </div>
                            </div>

                            <div class="page-with-contact-form">
                                <div class="contact-page-content col-sm-12">
                                    <div class="page-form col-sm-6">
                                        <h4 class="contact-title">Live a Message</h4>
                                        <form method="post" action="" id="contact_form" class="contact-form" accept-charset="UTF-8" onsubmit="return validateForm();">

                                            <div id="contactFormWrapper">
                                                <p>
                                                    <label>Your Name:</label><br>
                                                    <input type="text" id="contactFormName" name="name" placeholder="Enter Name">
                                                </p>
                                                <p>
                                                    <label>Your Email:</label><br>
                                                    <input type="email" id="contactFormEmail" name="email" placeholder="Enter Email">
                                                </p>
                                                <p>
                                                    <label>Phone Number:</label><br>
                                                    <input type="telephone" id="contactFormTelephone" name="phone" placeholder="Enter Phone No">
                                                </p> 
                                                <p>
                                                    <label>Message:</label><br>
                                                    <textarea rows="15" cols="75" id="contactFormMessage" name="message" placeholder="Your message"></textarea>
                                                </p>
                                                <p>
                                                    <input type="submit" id="contactFormSubmit" value="Submit" class="btn">
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="page-input col-sm-6">
                                        <h4 class="contact-title">Contact Info</h4>
                                        <ul class="contact-action" >
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Flat G.8, Smrithi Block, Medha Rejoice, Radha Krishna Nagar, Attapur, Hyd-500048</li>
                                            <li>
                                                <i class="fab fa-whatsapp"></i>+91 91333 34045</li>
                                            <li>
                                                <i class="fas fa-envelope"></i> support@thuneegadesigners.com</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>          
</div>  
<script>
    function validateForm()
    {
    var questionrplytext = $("#contactFormMessage").val();
    var elem = document.getElementById(id)
            if (questionrplytext.length < 20){
    $("#contactFormMessage").setAttribute("style", "border-color: #E71919;");
    return false;
    } else{
    $("#contactFormMessage").removeClass('error');
    }
    }
</script> 