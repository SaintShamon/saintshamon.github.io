<?php 
    get_header(); 
?>
    <main>
        <!--main components area-->
        <div class="components">
            <?php if (have_rows('components')) : ?>
                <?php while (have_rows('components')) : the_row();
                    get_template_part("template-parts/components/" . get_row_layout());
                endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>