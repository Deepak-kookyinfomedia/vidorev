<div class="footer-wrapper dark-background">
	<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
        <div class="footer-sidebar">
            <div class="site__container fullwidth-vidorev-ctrl">                        	
                <div class="site__row">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            </div>
        </div>
    <?php
    endif;
    ?>
    
    <?php 
    $footer_copyright = trim(vidorev_get_redux_option('footer_copyright', ''));
    ?>
    <div class="footer-copyright">							
        <div class="site__container fullwidth-vidorev-ctrl">                        	
            <div class="site__row">
                <div class="site__col font-size-12">
                    <?php 
                    if($footer_copyright!=''){
                        echo wp_kses_post($footer_copyright);
                    }else{
                    ?>
                        <div class="default-copyright">	
                            <?php echo esc_html__('Copyright &copy; 2018. Created by BeeTeam368. Powered by WordPress', 'vidorev');?>
                        </div>
                    <?php	
                    }
                    ?>
                </div>
            </div>								
        </div>
    </div>
</div>