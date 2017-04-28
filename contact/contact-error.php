<?php
/**
 * Template Name: contact-error
 */
require_once('init.php');
  
get_header(); ?>
 

<div id="main" class="fixed-page">
	  <?php while ( have_posts() ) : the_post(); ?>
	    <h1><?php the_title(); ?></h1>
	  <?php endwhile; ?>
		<div class="page-content">
      <p class="mb30 text-danger">
    		予期せぬエラーが発生しましたため、お問い合わせが完了しませんでした。
    	</p>
		</div>
</div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>