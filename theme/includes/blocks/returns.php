<section class="section returns">
    <div class="inner">
        <div class="modal">
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

                <?php foreach($block["tabs"] as $tab){
                    if($tab["media_type"] == "image"){?>
                        <img src="<?php echo $tab["url"]?>" alt="" class="tab-item">
                    <?php } 
                    else {?>
                        <video controls class="tab-item" src="<?php echo $tab["url"]?>"></video>
                    <?php } ?>
                <?php } ?>
                
            </div>
        </div>
        <div class="wrap">
            <div class="content">
                <div class="heading"><?php echo $block["heading"]?></div>
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
                <div class="description"><?php echo $block["description"]?></div>
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
                    <div class="options">
                        <img src="<?php echo $block["image_options"]?>" alt="">
                    </div>
                    <video data-keepplaying loop muted autoplay playsinline src="https://res.cloudinary.com/dzbpsu654/video/upload/v1690244611/new%20videos/New_Lightning_stxzxq.mp4"></video>
                </div>
            </div>
        </div>
    </div>
</section>
