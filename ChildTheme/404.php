<?php
/**
 * 404 template.
 *
 * @package Neve
 */

 get_header();?>
<div class="error-404 not-found default-max-width">
	<div class="banner"><?
	if ( is_active_sidebar( '404-banner-content' ) ) : 
			$result .= dynamic_sidebar('404-banner-content');
		endif;?>
		
	</div>
	<div>
	<?php echo do_shortcode('[breadcrumb]'); ?>
	</div>
	<div class="error-404-section">
	<div class="container"> 
			<div class="error-404 not-found ">
				<div id="content-area">
					<small>404 Error</small>
					  <div class="center-title">
							<h2 class="main-title">Hey there mate! Your lost treasure is not found here...</h2>
					  </div>
					<p class="grve-subtitle">Sorry! The page you are looking for wasn't found!</p>
					
				</div><br>
				<div class="custom-btn">
					<a class="button btn-wrap" target="_self" href="<?php echo get_home_url(); ?>">
						<span>Home</span>
					</a>
				</div>
			</div><!-- .error-404 -->
	</div><!-- .container -->
	
</div><?php
get_footer();


