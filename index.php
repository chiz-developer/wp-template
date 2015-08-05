<?php get_header(); ?>
<!-- index.php -->
		<div class="container">
			<div class="row">
				<div class="span7">
					
					Тест контент
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>

					<?php endwhile; else: ?>
						<p><?php _e('Sorry, this page does not exist.'); ?></p>
					<?php endif; ?>	
				</div>

				<div class="span3">
					<aside>Тест сайдбар</aside>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
