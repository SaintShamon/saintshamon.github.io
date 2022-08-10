<?php /*DEAFULT PAGE TEMPLATE*/ ?>

<?php get_header(); ?>
<div id="app-wrapper" role="main">
    <div id="app" class="app-container">
    	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="page-blocks">
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