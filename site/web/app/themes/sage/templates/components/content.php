<?php if (get_sub_field('content') ) : ?>
    <section class="container-row">
        <div class="content">
            <hr>
            <?php the_sub_field("content"); ?>
        </div>
    </section>
<?php endif; ?>