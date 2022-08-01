<?php 
    get_header(); 
?>
    <?php get_template_part('template-parts/global/breadcrumbs'); ?>

    <main class="has-sidebar" >
        <!--main components area-->
        <div class="components">
            <?php if (have_rows('components')) : ?>
                <?php while (have_rows('components')) : the_row();
                    get_template_part("template-parts/components/" . get_row_layout());
                endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- left sidebar -->
        <div class="sidebar">
            <?php get_template_part('template-parts/sidebar/navigation'); ?>
        </div>
    </main>
<?php get_footer(); ?>