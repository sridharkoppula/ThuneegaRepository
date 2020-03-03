<style>
    .main_banner{
            margin-top:5%;
        }
        @media screen and (max-width: 480px) {
            .main_banner {margin-top:16%;}
        }
</style>
<?php $serverroot ="https://thuneegadesigners.com/"; ?>
<div class="container main_banner" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="<?php echo $serverroot; ?>gallery/factory-images/slider-images/thuneega_B2.jpeg" alt="Sarees" style="width:100%;max-height: 300px;">
                <div class="carousel-caption">
                    <h3>Step Into Wedding Season</h3>
                    <p>Wedding Saree Collections!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo $serverroot.'gallery/factory-images/slider-images/thuneega_B1.jpeg'?>" alt="Sarees" style="width:100%;max-height: 300px;">
                <div class="carousel-caption">
                    <h3>Step Into Wedding Season</h3>
                    <p>Wedding Saree Collections!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?php echo $serverroot.'gallery/factory-images/slider-images/thuneega_B3.jpeg'?>" alt="Sarees" style="width:100%;max-height: 300px;">
                <div class="carousel-caption">
                    <h3>Step Into Wedding Season</h3>
                    <p>Wedding Saree Collections!</p>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

