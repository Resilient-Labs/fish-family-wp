<section class="empty-state">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
  </div>
  <a href="<?= esc_url(home_url('/')); ?>">
    <button class="bttn">Return Home</button>
  </a>
</section>
