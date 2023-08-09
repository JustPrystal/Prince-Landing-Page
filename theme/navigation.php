<?php 
    $logo = get_field("logo", "option");
    $shopify_tag = get_field("shopify_tag", "option");
    $tabs = get_field("tabs", "option");
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
                <linearGradient id="ass9" x1="2.97619" y1="25" x2="59.3888" y2="30.6635" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4841D2"/>
                    <stop offset="1" stop-color="#0E74F9"/>
                </linearGradient>
            </defs>
            <circle class="run" cx="25" cy="25" r="23" 
            stroke-linecap="round" 
            fill="none" stroke="url(#ass9)" stroke-width="4px"                             stroke-dasharray:450;
            stroke-dasharray="450" stroke-dashoffset="450"
            />
        </svg>
    </div>
</div>
<div class="modal">
    <div class="main">
        <svg class="close-modal" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="18" fill="black" fill-opacity="0.7"/>
            <path d="M12 12L24 24" stroke="white" stroke-width="3" stroke-linecap="round"/>
            <path d="M24 12L12 24" stroke="white" stroke-width="3" stroke-linecap="round"/>
        </svg>
        <svg class="arrow prev" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="18" fill="black" fill-opacity="0.7"/>
            <path d="M18 12L12 18" stroke="white" stroke-width="3" stroke-linecap="round"/>
            <path d="M12 18L18 24" stroke="white" stroke-width="3" stroke-linecap="round"/>
        </svg>
        <svg class="arrow next" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="18" fill="black" fill-opacity="0.7"/>
            <path d="M15 12L21 18" stroke="white" stroke-width="3" stroke-linecap="round"/>
            <path d="M21 18L15 24" stroke="white" stroke-width="3" stroke-linecap="round"/>
        </svg>
        <div class="tabs">

            <?php foreach($tabs as $tab){
                if($tab["media_type"] == "image"){?>
                    <img src="<?php echo $tab["url"]?>" alt="" class="tab-item">
                <?php } 
                else {?>
                <div class="tab-item">
                    <video class="media" controls="controls" preload="metadata">
                        <source src="<?php echo $tab["url"]?>#t=0.1" type="video/mp4">
                    </video>
                    <div class="overlay"><?php echo $tab["title"]?></div>
                </div>
                <?php } ?>
            <?php } ?>
            
        </div>
    </div>
</div>