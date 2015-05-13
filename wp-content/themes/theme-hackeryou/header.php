<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,400italic|Raleway:200,400,700' rel='stylesheet' type='text/css'>


  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<!-- 🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰  type iceicebaby on the homepage for a surprise 🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰🐰 -->

<body <?php body_class(); ?>>
<nav class="clearfix">
  <a class="home" href="<?php echo home_url(); ?> ">
    <i class="fa fa-home"></i>
    <span class="homeText">Home</span>

  </a>

  <a class="navLink" href="<?php echo get_site_url(); ?>/#followMe">Follow Me</a>
  <a class="navLink" href="<?php echo get_site_url(); ?>/#portfolio">Portfolio</a>
  <a class="navLink" href="<?php echo get_site_url(); ?>/#aboutMe">About Me</a>
</nav>
<?php if(is_front_page()) : ?>
<header id="topOfPage" >
  <video autoplay  poster="<?php echo get_template_directory_uri(); ?>/images/ir-poster.png" id="bgvid" loop>
      <source src="<?php echo get_template_directory_uri(); ?>/videos/IRLandscapes2.mp4" type="video/mp4">
      </video>
      <h1>Ian McIlwain</h1>
      <h3>Front end Web Developer from Toronto, Canada</h3>
</header><!--/.header-->
<?php endif; ?>
