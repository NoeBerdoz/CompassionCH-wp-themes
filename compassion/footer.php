<?php
wp_reset_postdata();
wp_reset_query();

global $post;
?>
<footer class="section background-blue section_full_width">

<!--<footer class="section background-blue section_abgerissen_oben section_full_width">-->

    <div class="row" data-equalizer data-equalize-on="medium">

        <div class="large-3 medium-3 column" data-equalizer-watch>
            <?php dynamic_sidebar('Footer Spalte 1'); ?>
        </div>

        <div class="large-3 medium-3 column" data-equalizer-watch>
            <?php dynamic_sidebar('Footer Spalte 2'); ?>
        </div>

        <div class="large-3 medium-3 column" data-equalizer-watch>
            <?php dynamic_sidebar('Footer Spalte 3'); ?>
            <h6 class="text-uppercase"><?php _e('Besuche uns', 'compassion'); ?></h6>
            <ul class="social-links">
                <li><a target="_blank" href="<?php echo get_theme_mod("facebook"); ?>" class="facebook"></a></li>
                <li><a target="_blank" href="<?php echo get_theme_mod("youtube"); ?>" class="youtube"></a></li>
                <li><a target="_blank" href="<?php echo get_theme_mod("vimeo"); ?>" class="vimeo"></a></li>
            </ul>
        </div>

        <div class="large-3 medium-3 column footer-column-4" data-equalizer-watch>
            <div class="footer-contact">


                <h5 class="text-uppercase"><?php _e('Kontakt', 'compassion'); ?></h5>
                <p>
                    <b><?php echo get_theme_mod("kontakt-name"); ?></b><br />
                    <?php echo get_theme_mod("kontakt-strasse"); ?><br />
                    <?php echo get_theme_mod("kontakt-plz"); ?> <?php echo get_theme_mod("kontakt-ort"); ?><br />
                    <?php _e('Tel.', 'compassion') ?>: <?php echo get_theme_mod("kontakt-tel"); ?><br />
                    <?php _e('Email', 'compassion'); ?>: <a href="mailto:<?php echo get_theme_mod("kontakt-email"); ?>"><?php echo get_theme_mod("kontakt-email"); ?></a><br />
                    <?php _e('IBAN', 'compassion'); ?> <?php echo get_theme_mod("bankverbindung-iban"); ?><br />

                </p>
            </div>
            <!--						<div class="footer-bank">
							<h5 class="text-uppercase"><?php _e('Bankverbindung', 'compassion'); ?></h5>
							<p>
								<?php echo get_theme_mod("bankverbindung-bank"); ?><br />

								<?php _e('Kto', 'compassion'); ?> <?php echo get_theme_mod("bankverbindung-kto"); ?><br />
								<?php _e('BLZ', 'compassion'); ?> <?php echo get_theme_mod("bankverbindung-blz"); ?><br />

								<?php _e('IBAN', 'compassion'); ?> <?php echo get_theme_mod("bankverbindung-iban"); ?><br />
								<?php _e('BIC', 'compassion'); ?> <?php echo get_theme_mod("bankverbindung-bic"); ?>
 							</p>
						</div>
-->

            <div class="hope_part">
                <?php
                if(ICL_LANGUAGE_CODE=='fr') { ?>

                    <?php $imagepng = get_template_directory_uri().'/assets/img/unis-' .ICL_LANGUAGE_CODE.".png"?>
                    <a href="https://pour-les-enfants.ch" target="_blank"> <img src="<?php echo $imagepng?>"> </a>

                <?php }elseif(ICL_LANGUAGE_CODE=='de'){ ?>

                    <?php $imagepng = get_template_directory_uri().'/assets/img/unis-' .ICL_LANGUAGE_CODE.".png"?>
                    <a href="#"> <img src="<?php echo $imagepng?>"> </a>

                <?php }elseif(ICL_LANGUAGE_CODE=='it'){ ?>

                    <?php $imagepng = get_template_directory_uri().'/assets/img/unis-' .ICL_LANGUAGE_CODE.".png"?>
                    <a href="#"> <img src="<?php echo $imagepng?>"> </a>


                <?php } ?>

            </div>
        </div>

    </div>

    <div class="sub-footer row">
        <div class="medium-12 column border">
            <div class="medium-4 column">
                © <?php echo date('Y', strtotime('now')); ?> <?php _e('Compassion Schweiz', 'compassion'); ?>
            </div>
            <div class="medium-8 column">
                <?php wp_nav_menu(array('menu' => 'Sub-Footer Menu')); ?>
            </div>
        </div>
    </div>

</footer>

<a href="#" class="scroll-to-top"></a>
<!-- 			<a href="#" class="scroll-down"></a> -->

</div> <!-- .off-canvas-content -->
</div> <!-- .off-canvas-wrapper-inner -->

</div> <!-- .off-canvas-wrapper -->

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '555270392517284');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=555270392517284&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

<?php wp_footer(); ?>

</body>
</html>
