<section class="section returns">
    <div class="inner">
        <div class="wrap">
            <div class="content">
                <div class="heading"><?php echo $block["heading"]?></div>
                <div class="description"><?php echo $block["description"]?></div>
                <div class="stat2 stat">
                    <div class="progress">
                        <div class="percentage"><?php echo $block["stat"]["percentage"]?>%</div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="transform: rotate(-90deg);" width="50px" height="50px">
                            <defs>
                                <linearGradient id="ass2" x1="2.97619" y1="25" x2="59.3888" y2="30.6635" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4841D2"/>
                                    <stop offset="1" stop-color="#0E74F9"/>
                                </linearGradient>
                            </defs>
                            <circle class="run" cx="25" cy="25" r="23" 
                            stroke-linecap="round" 
                            fill="none" stroke="url(#ass2)" stroke-width="4px" 
                            />
                        </svg>
                    </div>
                    <div class="text"><?php echo $block["stat"]["text"]?></div>
                </div>
                <div class="tab-titles">
                    <?php 
                    $i = 0;
                    foreach($block["tabs"] as $tab){?>
                        <div class="tab-title" data-index=<?php echo $i ?> >
                            <div class="text">
                            <?php echo $tab["title"]?>
                            </div>
                            <div class="background">
                            </div>
                        </div>
                    <?php 
                    $i++;
                } ?>
                </div>
                <div class="sub-heading"><?php echo $block["sub_heading"]?></div>
                <a href="<?php echo $block["button"]["url"]?>" class="button"><?php echo $block["button"]["title"]?></a>
            </div>
            <div class="model">
                <div class="heading mobile-only"><?php echo $block["heading"]?></div>
                <div class="stat2 stat mobile-only">
                    <div class="progress">
                        <div class="percentage"><?php echo $block["stat"]["percentage"]?>%</div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="transform: rotate(-90deg);" width="50px" height="50px">
                            <defs>
                                <linearGradient id="ass2res" x1="2.97619" y1="25" x2="59.3888" y2="30.6635" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4841D2"/>
                                    <stop offset="1" stop-color="#0E74F9"/>
                                </linearGradient>
                            </defs>
                            <circle class="run" cx="25" cy="25" r="23" 
                            stroke-linecap="round" 
                            fill="none" stroke="url(#ass2res)" stroke-width="4px" 
                            />
                        </svg>
                    </div>
                    <div class="text"><?php echo $block["stat"]["text"]?></div>
                </div>
                <div class="wrapin">
                    <!-- <div class="options">
                        <img src="<?php echo $block["image_options"]?>" alt="">
                    </div> -->
                    <video data-keepplaying loop muted autoplay playsinline src="https://res.cloudinary.com/dzbpsu654/video/upload/v1690244611/new%20videos/New_Lightning_stxzxq.mp4"></video>
                </div>
            </div>
        </div>
    </div>
</section>
