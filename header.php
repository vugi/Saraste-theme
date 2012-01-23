<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    	<link rel='stylesheet' href='<?php bloginfo( 'template_directory' ); ?>/css/slides.css' type='text/css' media='all' />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
			
		/* require jQuery this way to support all the plugins */
		wp_enqueue_script("jquery");

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/images/logo_facebook_like.gif"/>
		
		<script type='text/javascript' src='<?php bloginfo( 'template_directory' ); ?>/js/kwicks.js'></script>
		<script type='text/javascript' src='<?php bloginfo( 'template_directory' ); ?>/js/saraste.js'></script>
    
	</head>
	<body id="top" <?php 
	$arr = array("green", "blue", "yellow", "purple");
	body_class("bg-".$arr[array_rand($arr)]);
	?>>
		<nav id="access" role="navigation">
            <a href="http://www.papa.partio.fi"><img src="<?php bloginfo( 'template_directory' ); ?>/images/PAPA_logo_rgb_web_transparent_100px.png" alt="Pääkaupunkiseudun Partiolaiset ry " style="float:right; padding: 5px 10px"/></a>
        </nav><!-- #access -->

        <div id="header-wrap">
            <header role="banner">
                <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p><?php bloginfo( 'description' ); ?></p>
                <p id="counter" style="display:none">Leiriin aikaa <b id="count"></b> päivää</p>
            </header>

            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </div>

		<section id="content" role="main">
		<?php echo saraste_polku(); ?>
