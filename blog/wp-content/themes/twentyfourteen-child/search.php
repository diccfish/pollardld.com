<?php get_header(); ?>

<section>
			
			<?php if ( have_posts() ) : ?>

				<h1 class="cat-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>

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

					else :
						if ( is_search() ) :
							_e( 'Sorry, but no bones here. Keep digging with some different keywords.', 'twentyfourteen' );
							get_search_form();

						else :
							_e( 'This is extinct. Perhaps searching can help.', 'twentyfourteen' );
						
							get_search_form();

						endif;

				endif; 
			?>	
		
		</section>
			

<?php
	get_footer();