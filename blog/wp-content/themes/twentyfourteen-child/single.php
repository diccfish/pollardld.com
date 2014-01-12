<?php get_header(); ?>

	<section class="alt-layout">
			
		<?php while ( have_posts() ) : the_post(); ?>
				
			<div class="single-post-div">
			
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php the_content(); ?>
				
				<div class="tags"><?php the_tags(); ?></div>

			</div>

			<div class="comments">

				<?php	
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
				
			</div>

	</section>
				
	<section class="alt-layout">
		<div class="next"><?php next_post_link('%link'); ?></div>
		<div class="previous"><?php previous_post_link('%link'); ?></div>
	</section>
		
			<?php endwhile; ?>	
<?php
	get_footer();