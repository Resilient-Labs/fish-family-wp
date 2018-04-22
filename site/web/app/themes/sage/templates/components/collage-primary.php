<div class="primary-initiative">
    <?php if ( get_the_permalink() ) : ?>
        <a href="<?php the_permalink(); ?>">
    <?php endif; ?>

    <?php if ( get_the_title() ) : ?>
        <span class="info">
            <div class="line-break"></div>
            <h3 class="initiative-title">
                <?php the_title(); ?>
            </h3>
        </span>
    <?php endif; ?>

    <?php if (get_field('primary_collage')) : ?>
        <img src="<?php the_field('primary_collage'); ?>" />
    <?php endif; ?>

    <?php if ( get_the_permalink() ) : ?>
        </a>
    <?php endif; ?>
</div>