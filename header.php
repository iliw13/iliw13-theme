<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">	
		<title>Immaterial Labour Isn't Working</title>
		<meta name="description" content="Immaterial Labour Isn't Working is an event considering work in the age of the internet, starting April 2013">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"
		<meta name="author" content="Auto Italia South East">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/styles.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-narrow">

			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<?php 
					global $post;
					$slug = get_post( $post )->post_name;
					?>
					<li <?php if ( $slug === 'front' ) : ?>class="active"<?php endif; ?>>
						<a href="/" <?php if ( strcmp( $slug, 'front' ) == 0 )  : ?>class="active"<?php endif; ?>>Home</a>
					</li>
					<li <?php if ( $slug === 'about' ) : ?>class="active"<?php endif; ?>>
						<a href="/about" >About</a>
					</li>
					<li <?php if ( $slug === 'contact' ) : ?>class="active"<?php endif; ?>>
						<a href="/contact" >Contact</a>
					</li>
				</ul>
				<h3 class="muted"><a href="http://iliw13.autoitaliasoutheast.org">Auto Italia South East</a></h3>
			</div>

			<hr>