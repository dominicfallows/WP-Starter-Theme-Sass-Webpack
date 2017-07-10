<?php
/**
 * This is the default template file posts
 */
get_header();
?>
<main class="single-container grid-container" role="main">
	<div class="grid-x grid-padding-x">

		<div class="post-container medium-9 cell">
			<?php
				if (have_posts()):

					while ( have_posts() ) : the_post();
						get_template_part( 'parts/posts/content', get_post_type() );
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

<?php get_footer();
