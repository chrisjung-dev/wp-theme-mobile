		<?php get_header(); ?>

			<article data-role="content">

			<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
					
						<div>
						<?php the_content(); ?>
						</div>

					<?php endwhile; ?>
			<?php endif; ?>

			</article> 

		<?php get_footer(); ?>

