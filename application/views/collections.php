<style>
    .cat{
        background-image: linear-gradient(90deg, #7fcde4 20%, #77af8b 100%);
        max-width: 120px;
        min-height: 30px;
        text-align: center;
        padding-top: 3px;
        border-radius: 25px;
        font-weight: bold;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);        
    }
    .sub{
        display: inline;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
        background: #2b02282e;
        min-width: 150px;
        text-align: center;
    }
    #collection {
        margin-top:5%;
    }
    @media screen and (max-width: 480px) {
        #collection {margin-top:16%;}
    }
</style>
<div id="collection" style="">
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
foreach ($result as $menu) {
    ?>
    <a href="<?php echo site_url('category/' . $menu->ITEM_COLLECTION_NAME) ?>" style="color: #272424 !important;">
        <div class="cat"><?php echo $menu->ITEM_COLLECTION_DESCRIPTION; ?> </div> 
    </a>
    <br>
    <ul class="list-inline">
    <?php
    foreach ($subcat as $subcol) {
        if ($menu->ITEM_COLLECTION_CODE == $subcol->COLLECTION_CODE) {
            ?>
            <li class="sub list-group-item">
                <a href="<?php echo site_url('category/' . $subcol->COLLECTION_CAT_CODE); ?> "> <?php echo ucfirst($subcol->CATEGORY_NAME); ?></a>
            </li>
            <?php
        }
    }?>
    </ul>
        
<?php } ?>
</div>
