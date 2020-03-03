<?php $serverroot ="https://thuneegadesigners.com/"; ?>

<style>    #slider-text{
        padding-top: 40px;
        display: block;
    }
    #slider-text .col-md-6{
        overflow: hidden;
    }

    #slider-text h3 {

        font-weight: 400;
        font-size: 30px;
        letter-spacing: 3px;
        margin: 30px auto;
        padding-left: 40px;
    }
    #slider-text h2::after{
        border-top: 2px solid #c7c7c7;
        content: "";
        position: absolute;
        bottom: 35px;
        width: 100%;
    }

    #itemslider h4{
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 400;
        font-size: 12px;
        margin: 10px auto 3px;
    }
    #itemslider h5{
        font-family: 'Josefin Sans', sans-serif;
        font-weight: bold;
        font-size: 12px;
        margin: 3px auto 2px;
    }
    #itemslider h6{
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 300;;
        font-size: 10px;
        margin: 2px auto 5px;
    }
    .badge {
        background: #b20c0c;
        position: absolute;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        line-height: 31px;
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 300;
        font-size: 14px;
        border: 2px solid #FFF;
        box-shadow: 0 0 0 1px #b20c0c;
        top: 5px;
        right: 25%;
    }
    #container{
        background-image:url(https://thuneegadesigners.com/gallery/product-images/icons/pattern.jpg);
        overflow-x:hidden;
    }
    container-fluid{
        background-image:url(https://thuneegadesigners.com/gallery/product-images/icons/pattern.jpg);
    }
    #slider-control img{
        padding-top: 60%;
        margin: 0 auto;
    }
    @media screen and (max-width: 992px){
        #slider-control img {
            padding-top: 70px;
            margin: 0 auto;
        }
    }

    .carousel-showmanymoveone .carousel-control {
        width: 4%;
        background-image: none;
    }
    .carousel-showmanymoveone .carousel-control.left {
        margin-left: 5px;
    }
    .carousel-showmanymoveone .carousel-control.right {
        margin-right: 5px;
    }
    .carousel-showmanymoveone .cloneditem-1,
    .carousel-showmanymoveone .cloneditem-2,
    .carousel-showmanymoveone .cloneditem-3,
    .carousel-showmanymoveone .cloneditem-4,
    .carousel-showmanymoveone .cloneditem-5 {
        display: none;
    }
    @media all and (min-width: 768px) {
        .carousel-showmanymoveone .carousel-inner > .active.left,
        .carousel-showmanymoveone .carousel-inner > .prev {
            left: -50%;
        }
        .carousel-showmanymoveone .carousel-inner > .active.right,
        .carousel-showmanymoveone .carousel-inner > .next {
            left: 50%;
        }
        .carousel-showmanymoveone .carousel-inner > .left,
        .carousel-showmanymoveone .carousel-inner > .prev.right,
        .carousel-showmanymoveone .carousel-inner > .active {
            left: 0;
        }
        .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
            display: block;
        }
    }
    @media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
        .carousel-showmanymoveone .carousel-inner > .item.active.right,
        .carousel-showmanymoveone .carousel-inner > .item.next {
            -webkit-transform: translate3d(50%, 0, 0);
            transform: translate3d(50%, 0, 0);
            left: 0;
        }
        .carousel-showmanymoveone .carousel-inner > .item.active.left,
        .carousel-showmanymoveone .carousel-inner > .item.prev {
            -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0);
            left: 0;
        }
        .carousel-showmanymoveone .carousel-inner > .item.left,
        .carousel-showmanymoveone .carousel-inner > .item.prev.right,
        .carousel-showmanymoveone .carousel-inner > .item.active {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            left: 0;
        }
    }
    @media all and (min-width: 992px) {
        .carousel-showmanymoveone .carousel-inner > .active.left,
        .carousel-showmanymoveone .carousel-inner > .prev {
            left: -16.666%;
        }
        .carousel-showmanymoveone .carousel-inner > .active.right,
        .carousel-showmanymoveone .carousel-inner > .next {
            left: 16.666%;
        }
        .carousel-showmanymoveone .carousel-inner > .left,
        .carousel-showmanymoveone .carousel-inner > .prev.right,
        .carousel-showmanymoveone .carousel-inner > .active {
            left: 0;
        }
        .carousel-showmanymoveone .carousel-inner .cloneditem-2,
        .carousel-showmanymoveone .carousel-inner .cloneditem-3,
        .carousel-showmanymoveone .carousel-inner .cloneditem-4,
        .carousel-showmanymoveone .carousel-inner .cloneditem-5,
        .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
            display: block;
        }
    }
    @media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
        .carousel-showmanymoveone .carousel-inner > .item.active.right,
        .carousel-showmanymoveone .carousel-inner > .item.next {
            -webkit-transform: translate3d(16.666%, 0, 0);
            transform: translate3d(16.666%, 0, 0);
            left: 0;
        }
        .carousel-showmanymoveone .carousel-inner > .item.active.left,
        .carousel-showmanymoveone .carousel-inner > .item.prev {
            -webkit-transform: translate3d(-16.666%, 0, 0);
            transform: translate3d(-16.666%, 0, 0);
            left: 0;
        }
        .carousel-showmanymoveone .carousel-inner > .item.left,
        .carousel-showmanymoveone .carousel-inner > .item.prev.right,
        .carousel-showmanymoveone .carousel-inner > .item.active {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            left: 0;
        }
    }

</style>
<script>
    $(document).ready(function () {

        $('#itemslider').carousel({interval: 3000});

        $('.carousel-showmanymoveone .item').each(function () {
            var itemToClone = $(this);

            for (var i = 1; i < 6; i++) {
                itemToClone = itemToClone.next();

                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                itemToClone.children(':first-child').clone()
                        .addClass("cloneditem-" + (i))
                        .appendTo($(this));
            }
        });
    });

</script>


<style>
    .container-fluid{
    background-image:url(https://thuneegadesigners.com/gallery/product-images/icons/pattern.jpg);
        overflow-x:hidden;
        }
</style>
<!--Item slider text-->
<div class="container" id="container" style="margin-top:3%;">
    <div class="row" id="slider-text">
        <h3 style="font-family: 'Josefin Sans', sans-serif;"><b>This week Special</b></h3>
        <div class="col-md-6" >
            <!--  <h3 style="font-family: 'Josefin Sans', sans-serif; font-size:22px;"><b>Raksha Bandhan & Varalakshmi Festival Special<b></h3> -->
        </div>
    </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                <div class="carousel-inner">
                    <?php
                    $count = 0;
                    foreach ($weeklyItem as $item) {
                        ?>
                        <div class="item <?php
                        if ($count == 0) {
                            echo 'active';
                        }
                        ?>">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo site_url('product_det/index/'.$item->id); ?>" style="text-decoration:none"> <img src="<?php echo $serverroot; ?>gallery/product-images/thumbnails/<?php echo htmlentities($item->productImage1); ?>" style="width:200px; height:200px;"></a>
                                <?php if ($item->discPercent != "") { ?>
                                    <span class="badge" style="background: #b20c0c;line-height: 31px;"><?php echo $item->discPercent; ?></span>
                                <?php } ?>
                                <h4 class="text-center"><?php echo $item->subCategory ?></h4>
                                <h5 class="text-center">₹.<?php echo $item->productPrice ?> </h5>
                                <?php if ($item->productPriceBeforeDiscount != 0) { ?>
                                    <h6 class="text-center"><strike>₹.<?php echo $item->productPriceBeforeDiscount ?> </strike></h6>
    <?php } ?>
                            </div>
                        </div>

                        <?php
                        $count = $count + 1;
                    }
                    ?>            

                </div>

                <div id="slider-control">
                    <a class="left carousel-control" href="#itemslider" data-slide="prev" style="margin-top: 5%;position:absolute;"><i class="fas fa-angle-left fa-2x"></i></a>
                    <a class="right carousel-control" href="#itemslider" data-slide="next" style="margin-top: 5%;position:absolute;"><i class="fas fa-angle-right fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Item slider end-->
