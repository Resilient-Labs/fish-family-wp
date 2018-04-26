<footer>
  <section>
    <div>
    <a class="brand logotype" href="<?= esc_url(home_url('/')); ?>">
      <?php echo bloginfo($show = 'name'); ?>
    </a>
    </div>
    <div>
      <a class="color-light-gray" href="mailto:<?php echo the_author_meta( 'user_email', 1 );?>"> 
        <?php echo the_author_meta( 'user_email', 1 );?>
      </a>
      <p class="color-light-gray">
      <?php $phone = get_the_author_meta( 'user_url', 1 ); ?>
      </p>
      <p class="color-light-gray">
      <?php echo str_replace('http://', '',  $phone);?>
      </p>
      <p class="color-light-gray">
       <?php echo the_author_meta( 'description', 1 );?>
      </p>
    </div>
  </section>
  <nav>
    <?php
      $args = array('menu_class' => 'menu', 'container' => false);
      wp_nav_menu($args);
    ?>
  </nav>
</footer>
<p class="footnote">
  Designed and Developed by 
    <a href="https://www.resilientcoders.org" class="resilient-coders" target="_blank">Resilient Coders</a>
    &copy; <?php echo date("Y"); ?> <?php echo bloginfo($show = 'name'); ?>
</p>