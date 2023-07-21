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
<div class="preview">
    <div class="preloader">
        <div class="percentage"><span class="change">0</span>%</div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="transform: rotate(-90deg);" width="50px" height="50px">
            <defs>
                <linearGradient id="ass3" x1="2.97619" y1="25" x2="59.3888" y2="30.6635" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4841D2"/>
                    <stop offset="1" stop-color="#0E74F9"/>
                </linearGradient>
            </defs>
            <circle class="run" cx="25" cy="25" r="23" 
            stroke-linecap="round" 
            fill="none" stroke="url(#ass3)" stroke-width="4px"                             stroke-dasharray:450;
            stroke-dasharray="450" stroke-dashoffset="450"
            />
        </svg>
    </div>
</div>