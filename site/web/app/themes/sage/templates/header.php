<header class="header">
  <?php get_template_part('templates/components/logo'); ?>
  <nav class="nav">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    else: 
      $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
      'container_class' => false, 'menu_class' => false, );
      wp_nav_menu($MainMenu);
    endif;
    ?>
    <label for="menu" class="menu-label">
      <input type="checkbox" id="menu"/>
      <span class="menu-icon">MENU</span>
      <div class="menu-ui">
        <span class="menu-icon">MENU</span>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        else: 
          $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
          'container_class' => false, 'menu_class' => false, );
          wp_nav_menu($MainMenu);
        endif;
        ?>
        <section class="contact">
          <label>Email</label>
          <p>
            <?php echo the_author_meta( 'user_email', 1 );?>
          </p> 
          <label>Reach Out</label>
          <p>
            <?php $phone = get_the_author_meta( 'user_url', 1 ); ?>
            <?php echo str_replace('http://', '',  $phone);?>
          </p>
          <label>Find Us</label> 
          <p>
          <?php  echo the_author_meta( 'description', 1 ); // Displays the author description added in Biographical Info ?>
          </p>
        </section>
      </div>
      <span class="menu-ui-overlay"></span>
    </label>
  </nav>
</header>
