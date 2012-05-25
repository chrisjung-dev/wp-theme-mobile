<?php get_header(); ?>

			<div data-role="content">
			
				<?php if (have_posts()) : ?>

					<ul data-role="listview" data-inset="true">

					<?php while (have_posts()) : the_post(); ?>
						<li>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(); ?></p>

						</li>
					

					<?php endwhile; ?>

					</ul>

				<?php else: ?>

				<?php endif; ?>
			
				<div class="ui-body ui-body-b " data-theme="a">
					<h2>Meta</h2>
					<div data-role="collapsible" data-collapsed="true">
						<h2>Kategorien</h2>
						<ul data-role="listview" data-inset="true">
							<?php wp_list_categories( "title_li=" ); ?> 
						</ul>
					</div>
				</div>

			</div> 

<?php get_footer(); ?>
