<?php
/**
 * Template Name: Main Template
 */
?>

<?php if ( have_posts() ) :?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="template main-layout container-fluid">
            <?php
            // check if the flexible content field has rows of data
            if( have_rows('main_layout') ):
                // loop through the rows of data
                while ( have_rows('main_layout') ) : the_row();
                    if ( get_row_layout() == 'banner' ):
                        get_template_part('templates/components/banner');
                    elseif (get_row_layout() == 'content'):
                        get_template_part('templates/components/content');
                    elseif (get_row_layout() == 'cta_banner'):
                        get_template_part('templates/components/content');
                    endif;
                endwhile; // endwhile
            else : ?>
                 <p>no layouts found</p>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>