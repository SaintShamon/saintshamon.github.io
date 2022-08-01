<?php 
	global $wp_query;

    // $show_right_sidebar = get_field('show_right_sidebar');
    $show_right_sidebar = false;
    get_header(); 
?>

	<?php get_template_part('template-parts/global/breadcrumbs'); ?>

    <main class="<?php if ( $show_right_sidebar ) { echo 'has-sidebar'; } ?> no-sidebar text-center" >
        <div class="components">
            <section class="text-content">
                <div class="text-container">
                    <div class="wrapper">
                        <h1>We are very sorry...</h1>
                        The page you were looking for appears to have been moved, deleted or doesn't exist.<br>
                        Try going back to where you were or head straight to our <a href="<?php echo get_site_url(); ?>">home page</a>.
                    </div>
                </div>
            </section>
        </div>
        <!-- left sidebar -->
        <?php if ( $show_right_sidebar ) : ?>
            <div class="sidebar">
                <?php get_template_part('template-parts/sidebar/navigation'); ?>
            </div>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>
