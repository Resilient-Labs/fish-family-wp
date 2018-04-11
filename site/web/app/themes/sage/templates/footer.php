<footer>
  <h3>
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php echo bloginfo($show = 'name'); ?></a>
  </h3>
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