<?php 
$title = get_sub_field('title');
$button = get_sub_field('button');
$args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
?>
<section class="testimonials_section section">
    <div class="container">
        <div class="main_block">
            <?php if($title): ?>
                <div class="title_wrapper">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <div class="testimonials_slider">
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="testimonials_block">
                            <div class="title">
                                <h3 class="text--uppercase"><?php the_title(); ?></h3>
                            </div>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                            <a href="" class="link--icon">View more
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                        fill="#0C6F97" />
                                </svg>
                            </a>
                        </div>
                    <?php endwhile; wp_reset_postdata(  ); ?>
                </div>
                <div class="bottom_row">
                    <div class="arrow_block">
                        <button class="prev arrow_btn">
                            <svg width="40" height="16" viewBox="0 0 40 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40 8L35 5.11325L35 10.8867L40 8ZM4.37114e-08 8.5L35.5 8.5L35.5 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                    fill="#0C6F97" />
                            </svg>
                        </button>
                        <button class="next arrow_btn">
                            <svg width="40" height="16" viewBox="0 0 40 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40 8L35 5.11325L35 10.8867L40 8ZM4.37114e-08 8.5L35.5 8.5L35.5 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                    fill="#0C6F97" />
                            </svg>
                        </button>
                    </div>
                    <?php if($button): ?>
                        <a href="<?php echo $button['url']; ?>" class="button button--icon"><?php echo $button['title']; ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                    fill="#0C6F97" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>