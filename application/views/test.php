<?php $serverroot = "http://www.thuneegadesigners.com/"; ?>
<style>
    #products_con{
        background-image: url(https://thuneegadesigners.com/gallery/product-images/icons/pattern.jpg);
        overflow-x: hidden;
    }
    .thumbnail{
        min-height: 400px;
        background: transparent;
        box-shadow: -3px 7px 13px rgb(180,180,180);
    }
    button.btn{
        border-radius:15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    button.btn.btn-primary{
        background-color: #9075ffd9;
    }
    .bold{
        font-weight: bold;
    }
</style>
<script>
    alert("<?php echo session_id(); ?>");
</script>
<div class="container" id="products_con">         
    <?php //print_r($mblouses)?>
    <?php if ($results) { ?>
        <div class="row">
            <?php foreach ($results as $data) { ?>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <?php if (isset($data)) { ?> 
                            <a href="<?php echo site_url('product/' . $data->id) ?>" style="text-decoration:none;">                              
                                <img  class=scaled src="<?php echo $serverroot; ?>gallery/product-images/thumbnails/<?php echo htmlentities($data->productImage1); ?>" alt="Sarees" style="width:100%; height:300px;">
                            </a>
                            <div class="caption">
                                <div class="middle">
                                    <div class="col-sm-6 bold">
                                        <?php
                                        echo ucfirst($data->subCategory);
                                        ?>                                                    
                                    </div>

                                    <div class="col-sm-6 ">
                                        <?php if ($data->productAvailability != 0 & $data->dealer == 'thuneega') { 
                                        if ($data->cat_name === 'blouse') { ?>
                                        <button type="button" id="<?php echo $data->id; ?>" onclick="return confirm('Please confirm size?') ? addBlouse(this.id) : '';" title="Cart" class="btn btn-primary" style="float:right;"><i class="glyphicon glyphicon-shopping-cart"></i></button>
                                        <?php }else{?>
                                            <button type="button" id="<?php echo $data->id; ?>" onclick="addSaree(this.id)" title="Cart" class="btn btn-primary" style="float:right;"><i class="glyphicon glyphicon-shopping-cart"></i></button>
                                        <?php }
                                        
                                        } else if ($data->dealer == 'thuneega') { ?>
                                            <button type="button" id="<?php echo $data->id; ?>" onclick="addWish(this.id)" title="Wishlist" class="btn btn-danger" style="float:right;"><i class="glyphicon  glyphicon-heart"></i></button>
                                        <?php } else { ?>
                                            <button type="button"  class="btn btn-info" style="float:right;"><i class="glyphicon glyphicon-eye-open" style="float:right;"></i></button>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-6 bold">
                                        ₹.<?php
                                        echo $data->productPrice;
                                        if ($data->productPriceBeforeDiscount != 0) {
                                            ?>
                                            <strike style="color:#ABB2B9; font-size:10px;">
                                                <?php echo '₹.' . $data->productPriceBeforeDiscount; ?>
                                            </strike>

                                        <?php }
                                        ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php
                                        if ($data->cat_name === 'blouse') {
                                            //echo $data->cat_name;
                                            $size1 = explode(',', $data->size);
                                            $bsize2 = 'bsize' . $data->id;
                                            ?>
                                            <select id="<?php echo $bsize2 ?>" >
                                            <?php foreach ($size1 as $sizes1) { ?>
                                                    <option value="<?php echo $sizes1 ?>"><?php echo $sizes1 ?></option>

                                            <?php } ?>
                                            </select>
                                        <?php }
                                        ?>
                                    </div>
                                    <?php
                                    $blouse_status = FALSE;

                                    if (in_array($data->id, $mblouses) && $data->cat_name == 'saree') {
                                        $blouse_status = TRUE;
                                        //echo '</span><span style="color:green;" >It has suggested blouses</span>';
                                    } else {
                                        $blouse_status = FALSE;
                                    }


                                    if ($blouse_status) {
                                        echo '<div class="col-sm-6" style="color:green;font-size:10px;" >It has suggested blouses</div>';
                                    }
                                    ?>
                                </div>
                            </div>                                    
        <?php } ?>                 
                    </div>
                </div>
        <?php } ?>
        </div>
    <?php if (isset($links)) { ?>
            <style>
                .numlink a{
                    color: white;
                    background-color: #8a2eb9;
                    border: 2px solid #8a2eb9;
                    border-radius: 15px;
                    padding: 5px;
                    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
                }
                .curlink {
                    color: white;
                    background-color: #726d75;
                    border: 2px solid #726d75;
                    border-radius: 15px;
                    padding: 5px;
                    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
                }
            </style>
            <?php echo'<div style="padding-left:40%;">' . $links . '</div>' ?>
        <?php } ?>
    <?php } else { ?>
        <div>No Product(s) found.</div>
<?php } ?>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
<script>
                                function addSaree(pid) {
                                    //alert(pid);

                                    $(document).ready(function () {
                                        var dataString = 'pid1=' + pid;
                                        //alert( dataString);
                                        if (false)
                                        {
                                            alert("Please login");
                                        } else
                                        {
// AJAX Code To Submit Form.
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo site_url('cart/addCart'); ?>",
                                                data: dataString,
                                                cache: false,
                                                success: function (result) {
                                                    alert(result);
                                                }
                                            });
                                        }
                                        return false;
                                    });
                                }


                                function addBlouse(pid) {
                                    //alert(pid);
                                    var bid = 'bsize' + pid;
                                    $(document).ready(function () {
                                        var bid = "bsize" + pid;
                                        //alert(cat);
                                        //alert(bid);

                                        var e = document.getElementById(bid);
                                        var ssize = e.options[e.selectedIndex].value;
                                        var dataString = 'pid1=' + pid + '&size1=' + ssize;

                                        //alert( dataString);

                                        if (false)
                                        {
                                            alert("Please login");
                                        } else
                                        {
                                            // AJAX Code To Submit Form.
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo site_url('cart/addCart'); ?>",
                                                data: dataString,
                                                cache: false,
                                                success: function (result) {
                                                    document.getElementById(pid).className = "btn btn-success";
                                                    alert(result);
                                                }
                                            });
                                        }
                                        return false;
                                    });

                                }
</script>
<script>

    function addWish(pid) {

        $(document).ready(function () {
            var dataString = 'pid1=' + pid;
            // alert( pid);                
            if (true)

            {
                // AJAX Code To Submit Form.
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cart/addWish'); ?>",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        if (result === 'Please login') {
                            alert('Please login to add to wishlist');
                            //window.location = "<?php //echo site_url('feedback.php?id=' + pid);   ?>";


                        } else {
                            alert(result);
                        }
                    }
                });
            }
            return false;
        });
    }
</script>
