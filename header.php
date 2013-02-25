<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ).' | '; } echo get_bloginfo( 'name' ).' | '. get_bloginfo( 'description' );  ?></title>
			
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta name="description" content="<?= get_bloginfo( 'description' ) ?>"/>  
	
	<!-- icons & favicons -->
	<link rel="image_src" href="<?= get_template_directory_uri() ?>/library/img/image_src.png" />
	<!-- For iPhone 4 -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= get_template_directory_uri() ?>/library/img/apple-touch-icon-114.png">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= get_template_directory_uri() ?>/library/img/apple-touch-icon-72.png">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="<?= get_template_directory_uri() ?>/library/img/apple-touch-icon-precomposed.png">
	<!-- For Nokia -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/library/img/apple-touch-icon.png">
	<!-- For everything else -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/favicon.ico">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
			
	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  
  <!-- wordpress head functions -->
  <?php wp_head(); ?>

  <!--[if IE 7]>
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/font-awesome-ie7.min.css">
  <![endif]-->
			
</head>

<body <?php body_class(); ?>>
  
  <!-- navbar -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" title="<?= get_bloginfo('description') ?>" href="<?= home_url() ?>"><?= get_bloginfo('name') ?></a>
        <div class="nav-collapse collapse">
          <?php wp_nav_menu( 
            array( 
              'menu' => 'main_nav', /* menu name */
              'menu_class' => 'nav',
              'theme_location' => 'main_nav', /* where in the theme it's assigned */
              'container' => false,
              'depth' => '2',
              'fallback_cb' => 'foo_main_nav_fallback'
            )
          ); ?>
        </div>
        <form class="navbar-search pull-right" role="search" method="get" action="<?= home_url( '/' ) ?>">
          <div class="input-append">
            <input name="s" id="s" type="text" placeholder="Search">
            <button class="btn" type="submit"><i class="icon-search"></i></button>
          </div>
        </form>
      </div> <!-- /container -->
    </div> <!-- /navbar-inner -->
  </div> <!-- /navbar -->
	
	<div class="container">
