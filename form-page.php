<?php 
/**
 * Template Name: Form page template
 * Template Post Type: page
 * */

?>

<?php get_header(); ?>
<div id="app-wrapper" role="main">
    <div id="app" class="app-container">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="page-blocks">
                <div class="breadcrumbs_block">
                    <div class="container">
                        <p id="breadcrumbs" class="text--size--14">
                            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>
                        </p>
                    </div>
                </div>
                <?php 
                if ( ! post_password_required() ) :
                    // Your custom code should here
                    get_template_part('template-parts/page/content','page');
                    the_acf_loop();
                else :
                  // we will show password form here
                  echo get_the_password_form();
                endif;
              ?>
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>