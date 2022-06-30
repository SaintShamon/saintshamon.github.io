<?php get_header(); ?>
<div class="breadcrumbs_block">
    <div class="container">
        <p id="breadcrumbs" class="text--size--14">
            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>
        </p>
    </div>
</div>

<?php $hero = get_field('testimonials_page_hero', 'option'); ?>
<?php if($hero): ?>
<section class="page-title section testimonials">
    <div class="background_image"></div>
    <div class="container">
        <div class="top_wrapper">
            <?php 
                $content = $hero['content'];
                $image = $hero['image'];
                $button = $hero['button'];
            ?>
            <div class="main_block">
                <div class="col">
                    <?php if($content): ?>
                    <div class="page-title__block_content content-block">
                        <?php if($content): ?>
                        <?php echo $content; ?>
                        <?php endif; ?>
                        <?php if($button): ?>
                        <div class="page-title__button">
                            <a href="<?php echo $button['url'] ?>" class="button"><?php echo $button['title']; ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($image): ?>
                <div class="col page-title__image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
?>
<section class="testimonialsList_section">
    <div class="background_image_1"></div>
    <div class="background_image_2"></div>
    <div class="container">
        <div class="testimonialsList">
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="testimonialsItemWrapper">
                <div class="testimonialsItem">
                    <h3 class="testimonialsItem__name"><?php the_title(); ?></h3>
                    <div class="testimonialsItem__content"><?php the_content(); ?></div>
                    <div class="testimonialsItem__button show">Show more</div>
                    <div class="testimonialsItem__button hide">Hide</div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_template_part('template-parts/acf-blocks/front-page/contact_block') ?>
<?php get_footer(); ?>