<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <section class="container py-3">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </section>
  </article>
<?php endwhile; ?>
