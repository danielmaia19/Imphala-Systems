<!-- service section -->
<?php //Template Name:Category Page 

get_header(); 
get_template_part('breadcrums'); 

?>

<div class="container">
	<div class="row enigma_blog_wrapper">
	<div class="col-md-12 nav-title">
	<?php get_template_part('post','page'); ?>	
	</div>			
	</div>
</div>

<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_service services_page">

<div class="container">
		<div class="row isotope" id="isotope-service-container">		
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['service_'.$i.'_icons'] !='') { ?><div class="enigma_service_iocn pull-left"><i class="<?php echo esc_attr($wl_theme_options['service_'.$i.'_icons']); ?>"></i></div><?php } ?> 
					<div class="enigma_service_detail media-body">
						<?php if($wl_theme_options['service_'.$i.'_title'] !='') { ?><h3><a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></a></h3><?php } ?>
						<?php if($wl_theme_options['service_'.$i.'_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_'.$i.'_text'], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>	
		</div>
	</div>
</div>	 



<?php get_footer(); ?>