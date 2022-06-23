<?php 
    $contact = get_field('contact_us_block_content', 'options');
?>
<section class="contact_section section">
    <div class="container">
        <div class="section-bg"></div>
        <?php 
            $title = $contact['title'];
            $phone_numbers = $contact['phone_numbers'];
            $address = $contact['address'];
            $image = $contact['image'];
            $icons = $contact['icons_list'];
        ?>
        <div class="main_block">
            <div class="col">
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <div class="content">
                    <?php if($phone_numbers): ?>
                        <div class="tel_block text--size--22">
                            <?php echo $phone_numbers; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($address): ?>
                        <div class="address_block text--size--22">
                            <?php echo $address ?>
                        </div>
                    <?php endif; ?>
                    <div class="social_block">
                        <ul>
                            <?php foreach($icons as $icon): ?>
                                <?php 
                                    $iconUrl = $icon['icon'];
                                    $link = $icon['link'];
                                ?>
                                <?php if($iconUrl): ?>
                                    <li>
                                        <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $iconUrl; ?>" alt="">
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col_form">
                <?php if($image): ?>
                    <div class="img_block">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                <?php endif; ?>
                <div class="form_block">
                    <?php echo do_shortcode('[contact-form-7 id="116" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>