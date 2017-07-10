<?php
  function mytheme_sidebars() {

  	register_sidebar([
  		'name' => __( 'Primary Sidebar', 'mytheme' ),
  		'id' => 'primary-sidebar',
  		'description' => __( '', 'mytheme' ),
  		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  		'after_widget' => '</aside>',
  		'before_title' => '<h3 class="widget-title">',
  		'after_title' => '</h3>',
  	]);

  }
  add_action( 'widgets_init', 'mytheme_sidebars' );
