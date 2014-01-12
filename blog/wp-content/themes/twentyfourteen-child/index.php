<?php get_header(); ?>

	<div class="pteranodon">
        <?php include('http://pollardld.com/img/pteranodon.svg'); ?>
    </div>

	<div class="triceratops">
        <?php include('http://pollardld.com/img/triceratops.svg'); ?>
    </div>
			
	<?php 
		if ( have_posts() ) : 

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
			  'posts_per_page' => 5,
			  'paged' => $paged
			);

			query_posts($args); 

			while ( have_posts() ) : the_post(); ?>

			<section>
			
				<article class="content-icon">
					
					<h2><a href="<?php the_permalink(); ?>"><i class="<?php the_field('icon'); ?>"></i></a></h2>
				
				</article>

				<div class="content">
				
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">... Full Post</a></p>
					
				</div>

			</section>
		
	<?php endwhile; ?>

	<section>
		<div class="next"><?php next_posts_link('Ness');?></div>
		<div class="previous"><?php previous_posts_link('Prev'); ?></div>
	</section>

	<?php
		wp_reset_query();

		endif; ?>	
					
<?php
	get_footer();