<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">

		<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,700,900" rel="stylesheet">

		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			<!--<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5> -->
			<div class="test">
				<nav class="site-nav">
					
					<?php
					
					$args = array(
						'theme_location' => 'primary'
					);
					
					?>
					
					<?php wp_nav_menu(  $args ); ?>

				</nav>
			</div>
			<div class="slide-container">
				<h1>yolo</h1>
			</div>


			
		</header><!-- /site-header -->