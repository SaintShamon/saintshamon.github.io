<?php get_header(); ?>
<div class="breadcrumbs_block">
    <div class="container">
        <p id="breadcrumbs" class="text--size--14">
            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>
        </p>
    </div>
</div>
<?php 
    $banner = get_field('services_page_banner', 'options');
    if($banner):
?>
<section class="page-title section">
    <div class="container">
        <div class="main_block">
            <?php 
                $content = $banner['content'];
                $image = $banner['image'];
            ?>
            <?php if($content): ?>
            <div class="col">
                <div class="page-title__block_content content-block">
                    <?php if($content): ?>
                    <?php echo $content; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if($image): ?>
            <div class="col page-title__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
    $args = array(
        'post_type' => 'services',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
?>
<?php if($the_query->have_posts()): ?>
<section class="services-archive__list section">
    <div class="container">
        <div class="main_block">
            <ul class="services-archive__list_grid">
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <li class="services-archive__item">
                    <a href="<?php the_permalink(  ); ?>">
                        <?php if(!empty(get_the_post_thumbnail_url(  ))): ?>
                        <div class="services-archive__item_img">
                            <img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
                        </div>
                        <?php endif; ?>
                        <div class="services-archive__item_title">
                            <?php if(!empty(get_the_title())): ?>
                            <div class="text_block">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <?php endif; ?>
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                        fill="#0C6F97" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>
<?php 
get_template_part('template-parts/acf-blocks/front-page/contact_block');
?>
<?php get_footer(); ?>