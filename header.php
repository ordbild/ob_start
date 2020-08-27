  <!doctype html>
	<html class="no-js" lang="sv">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  
		<link rel="apple-touch-icon" href="<?php a(); ?>icon.png">
		
		<meta name="theme-color" content="#fafafa">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
	
	<?php get_template_part('templates/nav/static', 'menu'); ?>