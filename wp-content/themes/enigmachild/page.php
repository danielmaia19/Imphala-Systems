<?php get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php
$args = array( 'posts_per_page' => 3 );
$lastposts = get_posts( $args );
foreach ( $lastposts as $post ) :
  setup_postdata( $post ); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
<?php endforeach; 
wp_reset_postdata(); ?>
	<?php get_template_part('post','page'); ?>	
	</div>
	</div>
</div>	
<?php get_footer(); ?>