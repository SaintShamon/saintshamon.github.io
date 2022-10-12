<?php 
    $left_text = get_field('footer_left_text', 'options');
    $logo = get_field('footer_logo', 'options');
    $copyright = get_field('copyright', 'options');
    $menu_name_1 = get_field('footer_menu_name_1', 'options');
    $menu_name_2 = get_field('footer_menu_name_2', 'options');
    $menu_name_3 = get_field('footer_menu_name_3', 'options');
    $menu_name_4 = get_field('footer_menu_name_4', 'options');
?>

<footer class="footer">
    <div class="container">
        <div class="footer_top_block">
            <div class="col logo_block">
                <?php if($logo): ?>
                <a href="<?php echo get_home_url(  ) ?>">
                    <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>">
                </a>
                <?php endif; ?>
                <?php if($left_text): ?>
                <p class="text--size--16"><?php echo $left_text; ?>
                </p>
                <?php endif; ?>
            </div>
            <div class="col menu">
                <?php if($menu_name_1): ?>
                <h3 class="h4">
                    <?php echo esc_html($menu_name_1); ?>
                </h3>
                <?php endif; ?>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1' )) ?>
                </nav>
            </div>
            <div class="col menu">
                <?php if($menu_name_2): ?>
                <h3 class="h4">
                    <?php echo esc_html($menu_name_2); ?>
                </h3>
                <?php endif; ?>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2' )) ?>
                </nav>
            </div>
            <div class="col menu">
                <?php if($menu_name_3): ?>
                <h3 class="h4">
                    <?php echo esc_html($menu_name_3); ?>
                </h3>
                <?php endif; ?>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3' )) ?>
                </nav>
            </div>
            <div class="col menu">
                <?php if($menu_name_4): ?>
                <h3 class="h4">
                    <?php echo esc_html($menu_name_4); ?>
                </h3>
                <?php endif; ?>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4' )) ?>
                </nav>
            </div>
        </div>
        <div class="footer_bottom_block">
            <?php if($copyright): ?>
            <div class="copyright text--size--14">
                <?php echo $copyright; ?>
            </div>
            <?php endif; ?>
            <nav class="bottom_menu text--size--14">
                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-bottom' )) ?>
            </nav>
        </div>
    </div>
</footer>