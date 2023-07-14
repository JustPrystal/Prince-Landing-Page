<section class="section conversions">
    <div class="blob linear purple"></div>
    <div class="blob blue"></div>
    <div class="cover"></div>
    <div class="inner">
        <div class="wrap">
            <div class="model">
                <video data-keepplaying loop muted autoplay src="<?php echo $block["model_video"]?>"></video>
                <h2 class="heading"><?php echo $block["heading"]?></h2>
            </div>
            <div class="content">
                <div class="content-wrap">
                    <div class="sub-heading"><?php echo $block["sub_heading"]?></div>
                    <div class="stat3 stat">
                        <div class="progress">
                            <div class="percentage"><?php echo $block["stat"]["percentage"]?>%</div>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="transform: rotate(-90deg);" width="50px" height="50px">
                                <defs>
                                    <linearGradient id="ass3" x1="2.97619" y1="25" x2="59.3888" y2="30.6635" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#4841D2"/>
                                        <stop offset="1" stop-color="#0E74F9"/>
                                    </linearGradient>
                                </defs>
                                <circle class="run" cx="25" cy="25" r="23" 
                                stroke-linecap="round" 
                                fill="none" stroke="url(#ass3)" stroke-width="4px" 
                                />
                            </svg>
                        </div>
                        <div class="text"><?php echo $block["stat"]["text"]?></div>
                    </div>
                    <div class="description"><?php echo $block["description"]?></div>
                </div>
                <a href="<?php echo $block["button"]["url"]?>" class="button"><?php echo $block["button"]["title"]?></a>
            </div>
        </div>
    </div>
</section>