<?php 
    $copyright = get_field("copyright", "option");
    $socials = get_field("socials", "option");
?>
  
    <footer class="footer section fp-auto-height">
        <div class="wrap">
            <div class="copyright"><?php echo $copyright?><br><span>All rights reserved.</span></div>
            <div class="socials">
                <?php foreach($socials as $social){?>
                    <a href="<?php echo $social["link"]?>" class="social">
                        <img src="<?php echo $social["logo"]?>" alt="">
                    </a>    
                <?php } ?>
            </div>
        </div>
    </footer>
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
