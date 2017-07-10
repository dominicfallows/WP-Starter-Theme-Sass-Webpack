  </div>
  
  <footer class="site-footer">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <nav class="large-auto cell footer-nav">
          <ul class="vertical medium-horizontal menu">
            <li><a href="https://wordpress.org" target="_blank" title="Built with WordPress"><i class="fa fa-wordpress" aria-hidden="true"></i> <span class="hide">Built with WordPress</span></a></li>
            <?php 
              wp_nav_menu(array(
                'container' => false,
                'menu_class' => '',
                'theme_location' => 'footer',
                'items_wrap' => '%3$s',
                'fallback_cb' => false
              ));
            ?>
          </ul>
        </nav>
        <div class="large-shrink cell footer-credit">Copyright &copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?></div>
      </div>
    </div>
  </footer>
  
</div>
<?php wp_footer(); ?>
</body>
</html>