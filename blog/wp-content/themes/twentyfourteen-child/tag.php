<?php get_header(); ?>

<section>
			
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
				
					<section>
			
						<article class="content-icon">
							
							<h2><a href="<?php the_permalink(); ?>"><i class="<?php the_field('icon'); ?>"></i></a></h2>
						
						</article>

						<div class="content">
						
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">... Full Post</a></p>
							
						</div>

					</section>

				
				<?php 
					endwhile; 

				endif; 
			?>	
		
		</section>
			

<?php
	get_footer();