<!DOCTYPE html>
<?php if (is_single()) { ?>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php } else { ?>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php } ?>
<html lang="ja">
  <head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-2320907233589177",
        enable_page_level_ads: true
      });
    </script>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>
    <meta property='og:locale' content='ja_JP'>
    <meta property='fb:app_id' content='196868120804235'>
    <meta property='og:site_name' content='<?php bloginfo('name'); ?>'>
    <?php
    if (is_single()){
    if(have_posts()): while(have_posts()): the_post();
    echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";
    echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 100).'">';echo "\n";
    echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";
    echo '<meta property="og:type" content="article">';echo "\n";
    echo '<meta property="article:publisher" content="https://www.facebook.com/%E3%81%AB%E3%81%A3%E3%81%9F%E3%81%AE%E3%83%96%E3%83%AD%E3%82%B0-399204513780984/">';echo "\n";
    endwhile; endif;
    } else {
    echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";
    echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";
    echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";
    echo '<meta property="og:type" content="website">';echo "\n";
    }
    $str = $post->post_content;
    $searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
    if (is_single()){
    if (has_post_thumbnail()){
    $image_id = get_post_thumbnail_id();
    $image = wp_get_attachment_image_src( $image_id, 'full');
    echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
    } else if ( preg_match( $searchPattern, $str, $imgurl )){
    echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
    } else {
    echo '<meta property="og:image" content="http://akionionio.com/wp-content/themes/nitta_blog/images/nitta.jpg">';echo "\n";
    }
    } else {
    echo '<meta property="og:image" content="http://akionionio.com/wp-content/themes/nitta_blog/images/nitta.jpg">';echo "\n";
    }
    ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@akionionio">
  </head>
<script src="https://use.fontawesome.com/7c3bc29804.js"></script>
  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-93484250-1', 'auto');
      ga('send', 'pageview');

    </script>

    <div id="container">
    
      <!-- header -->
      <div id="header" class="clearfix">
        <div class="header-logo clearfix">
          <div class="alignleft">
            <h1 id="logo">
              <a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
            </h1>
            <p id="description"><?php bloginfo('description'); ?></p>
          </div>
        </div>

        <!-- Navigation -->
          <?php wp_nav_menu( array ('theme_location' => 'header-navi') ); ?>
        <!-- /Navigation -->
        <div class="menu-btn" id="js__btn">
            <span data-txt-menu="MENU" data-txt-close="CLOSE"></span>
        </div>
      </div>

      <?php wp_nav_menu( array ('theme_location' => 'header-navi', 'container_class'  => 'modal_menu', 'container_id' => 'js__nav') ); ?>


      <!-- /header -->