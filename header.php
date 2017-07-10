<?php 
  $page = get_queried_object();
?><!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<?php wp_head(); ?>

<?php
	// Connect to the Browsersync server
	$dev_hostname = "dev.wordpress";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>
</head>
<body <?php body_class(); ?>>
<div class="site-container">

	<header class="site-header">
		<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
			<div class="title-bar-title">
				<a class="site-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
			</div>
		</div>

		<div class="top-bar" id="responsive-menu">
			<div class="top-bar-container">
				<nav class="top-bar-left">
					<ul class="menu vertical medium-horizontal menu" data-dropdown-menu>
						<li class="hide-for-small-only">
							<a class="site-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</li>
						<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'items_wrap' => '%3$s', // removes the <ul> from the menu as we're using our own markup
							'fallback_cb' => mytheme_menu_fallback
						)); ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="site-content">