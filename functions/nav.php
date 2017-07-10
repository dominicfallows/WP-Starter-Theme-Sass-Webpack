<?php
// Register Menus
register_nav_menus(array(  
  'primary' => __( 'Primary Navigation', 'mytheme' ),  
  'footer' => __('Footer Navigation', 'mytheme')
));

// Menu fallback
function mytheme_menu_fallback() {
  $page_menu_html = wp_page_menu(array(
    'depth' => 1,
    'container' => 'nav',
    'menu_class' => 'temp',
    'echo' => false,
    'show_home' => false,
    'items_wrap' => '%3$s',
    'before' => '',
    'after' => ''
  ));
  $page_menu_html = str_replace('<nav class="temp">', '', $page_menu_html);
  $page_menu_html = str_replace('</nav>', '', $page_menu_html);
  echo $page_menu_html;
}