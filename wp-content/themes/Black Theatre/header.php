<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="top-header">
		<nav id="main-navigation">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</nav>
	</div>