<?php get_header(); ?>
<main class="has-sidebar" >
    <div class="container">
        <div class="components">
            <?php if (have_rows('components')) : ?>
                <?php while (have_rows('components')) : the_row();
                    get_template_part("template-parts/components/" . get_row_layout());
                endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="sidebar">
            <?php get_template_part('template-parts/sidebar/navigation'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>