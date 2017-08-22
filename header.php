<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">

		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,700,900" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			<!--<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5> -->
			<nav class="site-nav">
					
				<?php
					$args = array('theme_location' => 'primary');	
				?>
				<?php wp_nav_menu(  $args ); ?>

			</nav>
			<div class="slidekontrast">
				<?php masterslider(1); ?>	
			</div>

			
		</header><!-- /site-header -->