<?php get_header(); ?>
	<!-- main -->
	<div id="main">
	<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<div class="single-post">
		<div id="post-<?php the_ID(); ?>">
			<p class="post-info">
				<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
				<span class="category"><?php the_category(' '); ?></span>
			</p>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php get_template_part('sns'); ?>
			<div class="ad clearfix">
				<div class="ad-label">スポンサードリンク</div>
				<div class="ad-right">
					<script type="text/javascript">
					    google_ad_client = "ca-pub-2320907233589177";
					    google_ad_slot = "3691330448";
					    google_ad_width = 300;
					    google_ad_height = 250;
					</script>
					<!-- コンテンツトップ右（中) -->
					<script type="text/javascript"
					src="//pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div>
				<div class="ad-left">
					<script type="text/javascript">
					    google_ad_client = "ca-pub-2320907233589177";
					    google_ad_slot = "5168063641";
					    google_ad_width = 300;
					    google_ad_height = 250;
					</script>
					<!-- コンテンツトップ左（中） -->
					<script type="text/javascript"
					src="//pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div>
			</div>
			<?php the_content(); ?>
			<?php get_template_part('sns'); ?>
			<div class="ad clearfix">
				<div class="ad-label">スポンサードリンク</div>
				<div class="ad-right">
					<script type="text/javascript">
					    google_ad_client = "ca-pub-2320907233589177";
					    google_ad_slot = "6644796843";
					    google_ad_width = 300;
					    google_ad_height = 250;
					</script>
					<!-- コンテンツボトム右（中） -->
					<script type="text/javascript"
					src="//pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div>
				<div class="ad-left">
					<script type="text/javascript">
					    google_ad_client = "ca-pub-2320907233589177";
					    google_ad_slot = "8121530044";
					    google_ad_width = 300;
					    google_ad_height = 250;
					</script>
					<!-- コンテンツボトム左（中） -->
					<script type="text/javascript"
					src="//pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</div>
			</div>
			<p class="footer-post-meta">
				<?php the_tags('Tag : ', ', ') ?>
				<?php if ( is_multi_author() ): ?>
				<span class="post-author">作成者 : <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) )?>"><?php the_author(); ?></a></span>
			  <?php endif; ?>
			</p>
		</div>
	</div>
	<div class="navigation">
	<?php if( get_previous_post() ): ?>
		<div class="alignleft"><?php previous_post_link('%link', '« %title')?></div>
	<?php endif; ?>
	<?php if( get_next_post() ): ?>
		<div class="alignright"><?php next_post_link('%link', '%title »')?></div>
	<?php endif; ?>
	</div>
	<?php endwhile; else : ?>
	<div class="post">
		<h2>記事はありません</h2>
		<p>お探しの記事は見つかりませんでした。</p>
	</div>
	<?php endif; ?>
	</div>
	<!-- /main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>