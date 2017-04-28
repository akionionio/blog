<?php
/**
 * Template Name: contact-done
 */
require_once('init.php');
get_header(); ?>
 <div id="main" class="fixed-page">
	  <?php while ( have_posts() ) : the_post(); ?>
	    <h1><?php the_title(); ?></h1>
	  <?php endwhile; ?>
		<div class="page-content">
      <p class="mb30 text-danger">
				お問い合わせを送信しました。<br>
				改めてご連絡を差し上げます。今しばらくお待ちくださいませ。
    	</p>
		</div>
</div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>