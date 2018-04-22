<?php if (get_sub_field('columns') ) : ?>
    <div class="columns"> 
        <?php if( have_rows('columns') ): ?>
            <?php while ( have_rows('columns') ) : the_row(); ?>

                <?php if (get_sub_field('link')) : ?>
                    <a href="<?php the_sub_field('link'); ?>" class="column-link">
                <?php endif; ?>
                    
                    <img src="<?php the_sub_field('image'); ?>" class="column-image"/>
                
                <?php if (get_sub_field('link')) : ?>
                    </a>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>