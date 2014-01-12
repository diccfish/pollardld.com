<?php
/*
Template Name: Categories
*/
	get_header(); ?>

	<section>

		<?php

            $categories = get_categories();
            
            foreach($categories as $category) { ?>

            	<article class="content-icon mycategories">

	                <?php echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h2>'; ?>

    			</article>

        <?php } ?>

    </section>

<?php
	get_footer();