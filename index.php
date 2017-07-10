<?php
/**
 * This is the default template file for indexes (list of blog/news posts)
 */

$index_page_title = get_the_title( get_option('page_for_posts', true) );
get_header();
?>
<main class="index-container grid-container" role="main">
	<header class="page-header grid-x grid-padding-x">
		<div class="cell">
			<h1 class="page-title"><?php _e( $index_page_title, 'hsl' ); ?></h1>
		</div>
	</header>
	
	<div class="grid-x grid-padding-x">
		<div class="posts-container medium-9 cell">
			<?php
				if (have_posts()):
					
					while ( have_posts() ) : the_post();
						get_template_part( 'parts/posts/content', 'index' );
					endwhile;
					
					echo "<div class=\"posts-navigation below\">";
						the_posts_pagination(array(
							'prev_text' => __( 'Previous page', 'hsl' ),
							'next_text' => __( 'Next page', 'hsl' ),
							'before_page_number' => __( 'Page', 'hsl' ),
						));
					echo "</div>";
					
				else:
					get_template_part( 'parts/posts', 'none' ); 	
				endif;
			?>
		</div>
		<div class="posts-sidebar medium-3 cell">
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>