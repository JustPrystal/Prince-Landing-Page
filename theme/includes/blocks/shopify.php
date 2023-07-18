<section class="section shopify">
    <div class="blob purple"></div>
    <div class="blob blue"></div>
    <div class="cover"></div>
    <div class="inner">
        <div class="wrap">
            <div class="content">
                <h2 class="heading"><?php echo $block["heading"]?></h2>
                <div class="stat5 stat">
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
                <a href="<?php echo $block["button"]["url"]?>" class="button"><?php echo $block["button"]["title"]?></a>
            </div>
            <div class="features">
                <?php foreach($block["features"] as $ft){?>
                    <div class="feature">
                        <div class="stuff">
                            <div class="title"><?php echo $ft["title"]?></div>
                            <div class="text"><?php echo $ft["text"]?></div>
                        </div>
                        <div class="icon">
                            <img class="static" src="<?php echo $ft["icon"]?>" alt="">
                            <img class="animated" src="<?php echo $ft["animation"]?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="<?php echo $block["button"]["url"]?>" class="button mobile-only"><?php echo $block["button"]["title"]?></a>
        </div>
    </div>
</section>
