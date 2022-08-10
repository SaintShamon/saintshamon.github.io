<?php get_header(); ?>
<div class="breadcrumbs_block">
    <div class="container">
        <p id="breadcrumbs" class="text--size--14">
            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>
        </p>
    </div>
</div>
<?php
if( have_rows('service_page_blocks') ):
    while ( have_rows('service_page_blocks') ) : the_row();
        get_template_part('template-parts/acf-blocks/single-service/'.get_row_layout());
    endwhile;

else :

endif;
get_template_part('template-parts/acf-blocks/single-service/cta_book');
get_template_part('template-parts/acf-blocks/front-page/contact_block');
get_footer(); ?>