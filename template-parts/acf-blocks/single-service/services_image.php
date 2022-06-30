<?php 
$title = get_sub_field('title');
$image = get_sub_field('image');
$left_col_services = get_sub_field('left_column_services');
$right_col_services = get_sub_field('right_column_services');
if($left_col_services || $right_col_services):
?>
<section class="our_services_section section">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <div class="content_wrapper">
                <?php if($left_col_services || $title): ?>
                <div class="col">
                    <?php if($title): ?>
                        <div class="title_wrapper">
                            <div class="title">
                                <h2><?php echo $title; ?></h2>
                            </div>
                        </div>
                    <?php endif; ?>
                    <ul class="our_services_list">
                        <?php foreach($left_col_services as $service): setup_postdata( $service ); ?>
                            <li class="service_inner">
                                <a href="<?php echo get_the_permalink( $service->ID ); ?>">
                                    <p class="text--uppercase"><?php echo get_the_title($service->ID); ?></p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                            fill="#0C6F97" />
                                    </svg>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if($image): ?>
                    <div class="col services_img">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    </div>
                <?php endif; ?>
                <?php if($right_col_services): ?>
                <div class="col">
                    <ul class="our_services_list">
                        <?php foreach($right_col_services as $service): setup_postdata( $service ); ?>
                            <li class="service_inner">
                                <a href="<?php echo get_the_permalink( $service->ID ); ?>">
                                    <p class="text--uppercase"><?php echo get_the_title($service->ID); ?></p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                            fill="#0C6F97" />
                                    </svg>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>