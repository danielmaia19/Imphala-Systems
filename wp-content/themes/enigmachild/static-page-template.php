<?php 
//Template Name:Static Page
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

<?php get_footer(); ?>