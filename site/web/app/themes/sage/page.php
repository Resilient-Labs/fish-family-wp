<?php while (have_posts()) : the_post(); ?>
  <div class="container py-4">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  </div>
<?php endwhile; ?>
