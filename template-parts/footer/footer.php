<?php 
    $left_text = get_field('footer_left_text', 'options', false);
    $logo = get_field('footer_logo', 'options');
    $right_text = get_field('footer_right_text', 'options');
    $center_text = get_field('footer_center_text', 'options');
?>
<footer class="footer">
    <div class="section-bg"></div>
    <div class="container">
        <div class="top_wrap">
            <?php if($left_text): ?>
            <div class="phone_block">
                <?php echo $left_text; ?>
            </div>
            <?php endif; ?>
            <div class="menu_block">
                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu' )) ?>
            </div>
            <div class="form_block">
                <?php echo do_shortcode( '[contact-form-7 id="389" title="Footer Form"]' ) ?>
            </div>
        </div>
        <div class="bottom_wrap">
            <?php if($logo): ?>
            <div class="logo_block">
                <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>">
            </div>
            <?php endif; ?>
            <?php if($center_text): ?>
            <div class="copyright_block">
                <?php echo $center_text; ?>
            </div>
            <?php endif; ?>
            <?php if(have_rows('icons_list', 'options') || $right_text): ?>
            <div class="socials_block">
                <ul>
                    <?php while(have_rows('icons_list', 'options')): the_row(); ?>
                    <?php 
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon');
                                if($icon):
                            ?>
                    <li>
                        <a href="<?php echo $link['url']; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
                <?php if($right_text): ?>
                <?php echo $right_text; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</footer>