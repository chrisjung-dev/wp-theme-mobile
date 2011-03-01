<!DOCTYPE html>
<html>
	<head>
		<title>campino2k.de - Mobile Version</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
		<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<div data-role="page" data-theme="b">
			<div data-role="header">
				<h1><?php bloginfo('name'); ?></h1>
				<?php if( is_single() ) { ?>
				<a href="<?php echo get_home_url(); ?>" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home">Home</a>
				<?php }; ?>
			</div> 
			<div data-role="content">
			
				<?php if (have_posts()) : ?>

					<?php if ( !is_single() ) : ?>
					<ul data-role="listview" data-inset="true">
					<?php endif; ?>

					<?php while (have_posts()) : the_post(); ?>
					
					
						<?php if ( !is_single() ) : ?>
						<li>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(); ?></p>

						</li>
					
						<?php else : ?>

						<h2><?php the_title(); ?></h2>
					
						<div>
						<?php the_content(); ?>
						</div>

						<?php endif; ?>

					<?php endwhile; ?>

					<?php if ( !is_single() ) : ?>
					</ul>
					<?php endif; ?>
				<?php else: ?>

				<?php endif; ?>
			
				<div data-role="collapsible" data-collapsed="true">
					<h2>Kategorien</h2>

					<?php wp_list_categories( "title_li=" ); ?> 
				</div>


			</div> 
			<div data-role="footer">...</div> 

		</div>
		<?php wp_footer(); ?>
	</body>
</html>

