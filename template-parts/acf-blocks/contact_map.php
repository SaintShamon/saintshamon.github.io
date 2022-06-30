<div class="breadcrumbs_block">
    <div class="container">
        <p id="breadcrumbs" class="text--size--14">
            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>
        </p>
    </div>
</div>
<?php 
    $title = get_sub_field('title');
    $phone_numbers = get_sub_field('phone_numbers');
    $address = get_sub_field('address');
    $email = get_sub_field('email');
    $map = get_sub_field('map');
?>
<section class="contact-title section">
    <div class="container">
        <div class="main_block">
            <div class="col contact-title__content">
                <?php if($title): ?>
                    <div class="top_wrap content-block">
                        <h1><?php echo $title; ?></h1>
                    </div>
                <?php endif; ?>
                <div class="bottom_wrap">
                    <?php if($phone_numbers): ?>
                        <div class="tel_block text--size--22">
                            <?php echo $phone_numbers; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($address): ?>
                        <div class="address_block text--size--22">
                            <?php echo $address; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(have_rows('icon_list') || $email): ?>
                        <div class="social_block">
                            <?php if($email): ?>
                                <div class="email_block">
                                    <?php echo $email; ?>
                                </div>
                            <?php endif; ?>
                            <ul>
                                <?php while(have_rows('icons_list')): the_row(); ?>
                                    <?php 
                                        $link = get_sub_field('link');
                                        $icon = get_sub_field('icon');
                                    ?>
                                    <li>
                                        <a href="<?php echo $link['url']; ?>">
                                            <img src="<?php echo $image['url']; ?>" alt="">
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col contact-title__map" id="contact_map">
            </div>
        </div>
    </div>
</section>