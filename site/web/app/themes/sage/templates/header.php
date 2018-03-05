<header class="header">
  <div class="container">
    <?php get_template_part('templates/components/logo'); ?>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      else: 
        $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
        'container_class' => false, 'menu_class' => false, );
        wp_nav_menu($MainMenu);
      endif;
      ?>
    </nav>
  </div>
</header>
