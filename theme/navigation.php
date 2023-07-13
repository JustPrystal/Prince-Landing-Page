<?php 
    $logo = get_field("logo", "option");
    $shopify_tag = get_field("shopify_tag", "option");
?>
<header class="header">
    <div class="wrap">
        <div class="logo"><?php echo $logo?></div>
        <div class="shopify-tag"><img src="<?php echo $shopify_tag?>" alt=""></div>
    </div>
</header>