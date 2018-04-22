<section class="cta-banner">
    <div>
        <?php if (get_sub_field('cta') ) : ?>
            <h3><?php the_sub_field("cta"); ?></h3>
        <?php endif; ?>
    </div>
    <div>
        <?php if (get_sub_field('content') ) : ?>
            <?php the_sub_field("content"); ?>
        <?php endif; ?>
    </div>
</section>