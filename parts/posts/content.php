<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<time datetime="<?php the_time('Y-m-d h:i:s'); ?>"><?php the_time('jS F Y H:i'); ?></time>
	</header>

	<div class="entry-content">
		<?php	the_content(); ?>
	</div>
</article>
