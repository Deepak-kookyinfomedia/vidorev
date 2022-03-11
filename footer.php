		<?php if(!beeteam368_return_embed()){?>
                    <footer id="site-footer" class="site-footer">
                        
                        <?php do_action('vidorev_popular_videos_footer');?>
                        
                        <?php do_action('vidorev_above_footer_content_ads');?>
                        
                        <?php do_action('vidorev_instagram_feed', 'footer');?>
                        
                        <?php
                        if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
                            get_template_part( 'template-parts/vidorev-footer' );
                        }?>
                    </footer>
                
                </div>
            </div>
            
            <?php 
            $scroll_to_top_button = vidorev_get_redux_option('scroll_to_top_button', 'off', 'switch');
            if($scroll_to_top_button == 'on'){
            ?>
                <div class="scroll-to-top-button scroll-to-top-button-control">
                    <a class="basic-button basic-button-default" href="#"><?php echo esc_html__('Top', 'vidorev')?><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
                </div>
            <?php	
            }
            ?>
            
            <?php do_action('vidorev_display_mobile_menu');?>
         <?php }?> 
            
         <?php wp_footer();?>       	 
	</body>
</html>