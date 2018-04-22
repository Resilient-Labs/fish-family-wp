<?php if (get_sub_field('banner') ) : ?>
    <section class="container-row">
        <div class="banner">
            <?php the_sub_field("banner"); ?>
        </div>
    </section>
<?php endif; ?>