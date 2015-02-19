<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('Webwijs'); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
		<?php wp_head(); ?>
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css"/>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div onclick="menuHide()" id="overlay">

				</div>
				<ul  id="slide-out" class="side-nav fixed">
   					<aside class="sidebar" role="complementary">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
						</a>
					</div>
						<div class="sidebar-widget">
							<?php wp_list_categories('title_li='); ?>
						</div>

						<div class="sidebar-widget">
							<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
						</div>

					</aside>
				</ul>

			</header>

					
					
			
