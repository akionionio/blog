<?php get_header(); ?>
			
			<!-- main -->
			<div id="main">
				
				<!-- post -->
				<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
					<div class="cb-mask">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					</div>
					<div class="post-meta">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt() ?>
						<!-- <a class="more-link" href="<?php the_permaLink(); ?>">続きを読む &raquo;</a> -->
					</div>
				</div>

				<?php endwhile;
				else : ?>
				<div class="post">
					<h2>記事はありません</h2>
					<p>お探しの記事は見つかりませんでした。</p>
				</div>
				<!-- /post -->
			  <?php endif; ?>
				<!-- pager -->
				<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('« PREV'); ?></div>
					<div class="alignright"><?php previous_posts_link('NEXT »'); ?></div>
				</div>
			  <?php endif; ?>
				<!-- /pager	 -->
				
			</div>
			<!-- /main -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>