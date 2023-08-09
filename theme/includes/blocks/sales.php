<section class="section sales">
<!-- <iframe class="video" src="https://player.vimeo.com/video/849226891?badge=0&amp;autopause=0&amp;autoplay=1&amp;loop=1&amp;player_id=0&amp;app_id=58479&amp;muted=1&amp;controls=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;" title="B"></iframe> -->
    <!-- <script src="https://player.vimeo.com/api/player.js%22%3E"></script> -->
    <!-- <iframe class="video" src="https://player.vimeo.com/video/849227247?h=51133dc079" width="640" height="1133" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> -->
<!-- <div class="video" style="padding:56.37% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/849226891?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="B"></iframe></div><script src="https://player.vimeo.com/api/player.js%22%3E"></script> -->
    <video class="video" data-keepplaying loop muted autoplay playsinline src="https://res.cloudinary.com/dzbpsu654/video/upload/v1690404413/Optimized%20Videos/B_jupvwf.mp4"></video>
    <div class="inner">
        <div class="content">
            <h2 class="heading"><?php echo $block["heading"]?></h2>
            <div class="subtitle"><?php echo $block["subtitle"]?></div>
            <div class="stat4 stat">
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
    </div>
    <a href="<?php echo $block["button"]["url"]?>" class="button mobile-only"><?php echo $block["button"]["title"]?></a>
</section>