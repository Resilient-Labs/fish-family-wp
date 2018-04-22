<?php 
$collages = get_sub_field('collage');
if( $collages ): ?>
    <section class="initiatives-collage-container">
        <?php foreach( $collages as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <?php get_template_part('templates/components/collage-primary'); ?>
            <?php get_template_part('templates/components/collage-secondary'); ?>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    </section>
<?php endif; ?>