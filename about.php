<?php
/**
 * Template Name: about-me
 */
get_header(); ?>
 
<div id="main" class="fixed-page">
	  <?php while ( have_posts() ) : the_post(); ?>
	    <h1><?php the_title(); ?></h1>
	  <?php endwhile; ?>
		<?php the_content(); ?>
</div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>