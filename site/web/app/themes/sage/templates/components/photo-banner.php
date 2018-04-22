<?php if (get_sub_field('image') ) : ?>
    <section class="photo-banner">
        <img src="<?php the_sub_field("image"); ?>" alt="" />
    </section>
<?php endif; ?>