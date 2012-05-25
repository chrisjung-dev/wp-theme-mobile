<!DOCTYPE html>
<html>
	<head>
 		<title><?php bloginfo( 'name' ); ?> <?php wp_title( '|' ); ?></title>
 		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script>
		$(document).bind("mobileinit", function(){
		//	$.mobile.ajaxEnabled  = false;
		});

		</script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<div data-role="page" data-theme="b">
			<header data-role="header">
				<h1><?php bloginfo('name'); ?></h1>
				<?php if( is_single() ) { ?>
				<a href="<?php echo get_home_url(); ?>" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home">Home</a>
				<?php }; ?>
			</header>
