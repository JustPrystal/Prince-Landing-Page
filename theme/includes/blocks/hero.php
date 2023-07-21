<section class="section hero" style="background-image: url(<?php echo $block["background_image"]?>);">
    <div class="inner">
        <div class="wrap">
            <div class="model">
                <video data-keepplaying loop muted autoplay playsinline src="<?php echo $block["jacket_video"]?>"></video>
            </div>
            <div class="content">
                <h1 class="heading"><?php echo $block["heading"]?></h1>
                <div class="stat1 stat">
                    <div class="progress">
                        <div class="percentage"><?php echo $block["stat"]["percentage"]?>%</div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="transform: rotate(-90deg);" width="50px" height="50px">
                            <defs>
                                <linearGradient id="ass" x1="2.97619" y1="25" x2="59.3888" y2="30.6635" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4841D2"/>
                                    <stop offset="1" stop-color="#0E74F9"/>
                                </linearGradient>
                            </defs>
                            <circle cx="25" cy="25" r="23" 
                            stroke-linecap="round" 
                            fill="none" stroke="url(#ass)" stroke-width="4px" 
                            />
                        </svg>
                    </div>
                    <div class="text"><?php echo $block["stat"]["text"]?></div>
                </div>
                <h2 class="sub-heading">
                    <?php echo $block["sub_heading"]?>
                </h2>
                <a href="<?php echo $block["button"]["url"]?>" class="button"><?php echo $block["button"]["title"]?></a>
            </div>
        </div>
    </div>
</section>