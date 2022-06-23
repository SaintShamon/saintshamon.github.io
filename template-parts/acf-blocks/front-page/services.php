<?php 
$title = get_sub_field('title');
$center_image = get_sub_field('center_image');
$button = get_sub_field('button');
$args = array(
    'post_type' => 'services',
    'posts_per_page' => 8,
);
$the_query = new WP_Query($args);
?>
<?php if($the_query->have_posts()): ?>
<section class="our_services_section section">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <div class="title_wrapper">
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <div class="btn_block">
                        <a href="<?php echo $button['url']; ?>" class="button button--icon"><?php echo $button['title']; ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                    fill="#0C6F97" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="content_wrapper">
                <div class="col">
                    <ul class="our_services_list">
                        <?php $i = 1; ?>
                        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                            <?php if($i <= 4): ?>
                                <li class="service_inner">
                                    <a href="<?php the_permalink(); ?>">
                                        <p class="text--uppercase"><?php the_title(); ?></p>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                                fill="#0C6F97" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endwhile; wp_reset_postdata(  ); ?>
                    </ul>
                </div>
                <?php if($center_image): ?>
                    <div class="col services_img">
                        <img src="<?php echo $center_image; ?>" alt="">
                    </div>
                <?php endif; ?>
                <div class="col">
                    <ul class="our_services_list">
                        <?php $i = 1; ?>
                        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                            <?php if($i > 4): ?>
                                <li class="service_inner">
                                    <a href="<?php the_permalink(); ?>">
                                        <p class="text--uppercase"><?php the_title(); ?></p>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                                fill="#0C6F97" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endwhile; wp_reset_postdata(  ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>