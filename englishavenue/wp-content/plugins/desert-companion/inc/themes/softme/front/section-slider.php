<?php  
	$softme_slider_style		= get_theme_mod('softme_slider_style','1');
	$softme_slider_option 		= get_theme_mod('softme_slider_option',softme_slider_options_default());
?>	
<section id="dt_slider" class="dt_slider dt_slider--one dt_slider--thumbnav dt_slider--kenburn">
	<div class="dt_owl_carousel owl-theme owl-carousel slider" 
	data-owl-options='{
		"loop": true, 
		"items": 1, 
		"navText": ["<i class=\"fas fa-angle-left\"><span class=\"imgholder\"></span></i>","<i class=\"fas fa-angle-right\"><span class=\"imgholder\"></span></i>"], 
		"margin": 0, 
		"dots": true, 
		"nav": true, 
		"animateOut": "slideOutDown", 
		"animateIn": "fadeIn", 
		"active": true, 
		"smartSpeed": 1000, 
		"autoplay": true, 
		"autoplayTimeout":30000, 
		"autoplayHoverPause": false, 
		"responsive": {
			"0": {
				"nav": false,
				"items": 1
			},
			"600": {
				"nav": false,
				"items": 1
			},
			"992": {
				"items": 1
			}
		}
	}'>
		<?php
			if ( ! empty( $softme_slider_option ) ) {
				$allowed_html = array(
						'br'     => array(),
						'em'     => array(),
						'strong' => array(),
						'span' => array(),
						'b'      => array(),
						'i'      => array(),
						);
			$softme_slider_option = json_decode( $softme_slider_option );
			foreach ( $softme_slider_option as $item ) {
				$title = ! empty( $item->title ) ? apply_filters( 'softme_translate_single_string', $item->title, 'slider section' ) : '';
				$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'softme_translate_single_string', $item->subtitle, 'slider section' ) : '';
				$subtitle2 = ! empty( $item->subtitle2 ) ? apply_filters( 'softme_translate_single_string', $item->subtitle2, 'slider section' ) : '';
				$subtitle3 = ! empty( $item->subtitle3 ) ? apply_filters( 'softme_translate_single_string', $item->subtitle3, 'slider section' ) : '';
				$text = ! empty( $item->text ) ? apply_filters( 'softme_translate_single_string', $item->text, 'slider section' ) : '';
				$button = ! empty( $item->text2) ? apply_filters( 'softme_translate_single_string', $item->text2,'slider section' ) : '';
				$link = ! empty( $item->link ) ? apply_filters( 'softme_translate_single_string', $item->link, 'slider section' ) : '';
				$image = ! empty( $item->image_url ) ? apply_filters( 'softme_translate_single_string', $item->image_url, 'slider section' ) : '';
				$align = ! empty( $item->slide_align ) ? apply_filters( 'softme_translate_single_string', $item->slide_align, 'slider section' ) : '';
				$bg_type = ! empty( $item->bg_type ) ? apply_filters( 'softme_translate_single_string', $item->bg_type, 'slider section' ) : '';
				$video_url = ! empty( $item->video_url ) ? apply_filters( 'softme_translate_single_string', $item->video_url, 'slider section' ) : '';
				$subtitle2 = ! empty( $item->subtitle2 ) ? apply_filters( 'softme_translate_single_string', $item->subtitle2, 'slider section' ) : '';
				$shortcode = ! empty( $item->shortcode ) ? apply_filters( 'softme_translate_single_string', $item->shortcode, 'slider section' ) : '';
		?>
			<div class="dt_slider-item">				
				<?php if ( $bg_type=='video'  && ! empty( $video_url )) : ?>
					<video playsinline="" autoplay="" muted="" loop="" id="video_slider">
						<source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
					 </video>
				 <?php endif; ?>
				 
				 <?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url($image); ?>">
				 <?php endif; ?>	
				 
				<div class="dt_slider-wrapper">
					<div class="dt_slider-inner">
						<div class="dt_slider-innercell">
							<div class="dt-container">
								<div class="dt-row dt-text-<?php echo esc_attr($align); ?>">
									<div class="<?php if ( ! empty( $subtitle2 ) || ! empty( $shortcode )) : echo 'dt-col-lg-7'; else:  echo 'dt-col-lg-12'; endif; ?> dt-col-md-12 first dt-my-auto">
										<div class="dt_slider-content">
											<?php if ( ! empty( $title )) : ?>
												<h5 class="subtitle"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></h5>
											<?php endif; ?>	
											
											<?php if ( ! empty( $subtitle )) : ?>
												<h2 class="title"><?php echo wp_kses( html_entity_decode( $subtitle ), $allowed_html ); ?></h2>
											<?php endif; ?>	
											
											<?php if ( ! empty( $text )) : ?>
												<p class="text"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
											<?php endif; ?>	
											
											<div class="dt_btn-group">
												<?php if ( ! empty( $button )) : ?>
													<a href="<?php echo esc_url($link); ?>" class="dt-btn dt-btn-primary"><span class="dt-btn-text" data-text="<?php echo wp_kses( html_entity_decode( $button ), $allowed_html ); ?>"><?php echo wp_kses( html_entity_decode( $button ), $allowed_html ); ?></span></a>
												<?php endif; ?>	
											</div>
										</div>
									</div>
									
									<?php if ( ! empty( $subtitle2 ) || ! empty( $shortcode )) : ?>
										<div class="dt-col-lg-5 dt-col-md-12 last dt-my-auto">
                                            <aside id="block-9" class="widget widget_block">
                                                <div class="wp-block-group is-layout-flow">
                                                    <div class="wp-block-group__inner-container">
                                                        <h3 class="wp-block-heading"><?php echo wp_kses( html_entity_decode( $subtitle2 ), $allowed_html ); ?></h3>
														
														<?php if ( ! empty( $shortcode )) :  echo do_shortcode( html_entity_decode( $shortcode ), $allowed_html ); else: ?>
															<div class="wpcf7 js" id="wpcf7-f190-o1" lang="en-US" dir="ltr">
																<div class="screen-reader-response">
																	<p role="status" aria-live="polite" aria-atomic="true"></p>
																</div>
																<form action="/" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
																	<div style="display: none;">
																		<input type="hidden" name="_wpcf7" value="190">
																		<input type="hidden" name="_wpcf7_version" value="5.7.4">
																		<input type="hidden" name="_wpcf7_locale" value="en_US">
																		<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f190-o1">
																		<input type="hidden" name="_wpcf7_container_post" value="0">
																		<input type="hidden" name="_wpcf7_posted_data_hash" value="">
																	</div>
																	<p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name" value="" type="text" name="your-name"></span>
																	</p>
																	<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email" value="" type="email" name="your-email"></span>
																	</p>                                                                
																	<p><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your message (optional)" name="your-message"></textarea></span>
																	</p>
																	<p><button class="dt-btn dt-btn-primary"><span class="dt-btn-text" data-text="Send Now">Send Now</span></button>
																	</p>
																	<div class="wpcf7-response-output" aria-hidden="true"></div>
																</form>
															</div>
														<?php endif; ?>		
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } } ?>
	</div>
</section>