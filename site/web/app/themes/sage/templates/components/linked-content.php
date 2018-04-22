
<?php 

$lcontent = get_sub_field('linked_content');

if( $lcontent ): ?>
    <?php foreach( $lcontent as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <?php if( have_rows('main_layout') ): ?>
            <?php while ( have_rows('main_layout') ) : the_row(); ?>
                <?php if ( get_row_layout() == 'content' ): ?>
                    <?php get_template_part('templates/components/content'); ?>
                <?php elseif ( get_row_layout() == 'photo_banner' ): ?>
                    <?php get_template_part('templates/components/photo-banner'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
