<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<time datetime="<?php the_time('Y-m-d h:i:s'); ?>"><?php the_time('jS F Y H:i'); ?></time>
	</header>

	<div class="entry-excerpt">
		<?php	the_excerpt(); ?>
	</div>
</article>
