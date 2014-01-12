<aside>

	<?php 
		$args = array(
			'type'                     => 'post',
			'child_of'                 => '2',
			'parent'                   => '',
			'orderby'                  => 'name',
			'order'                    => 'ASC',
			'hide_empty'               => 1,
			'hierarchical'             => 1,
			'exclude'                  => '',
			'include'                  => '',
			'number'                   => '',
			'taxonomy'                 => 'category',
			'pad_counts'               => false 

		); 

		$categories = get_categories( $args ); 
	?>

	<div class="cat-links">
		<h3>Categories</h3>
		<?php 
			foreach($categories as $category) { 
		    	echo '<p><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
			}
		?>
	</div>
		
</aside>