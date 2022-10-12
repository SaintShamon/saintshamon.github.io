<?php 
    $logo = get_field('header_logo', 'option');
    $button = get_field('header_button', 'option');
?>
<header class="header">
    <div class="header_wrap">
        <div class="container">
            <div class="header_main_block">
                <?php if($logo): ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url(  ) ?>">
                        <img src="<?php echo $logo; ?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
                <div class="header_inner_block">
                    <div class="header__menu">
                        <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'menu_class' => 'header__menu_list', 'container' => 'nav',)) ?>
                    </div>
                    <?php if($button): 
                        $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                    <div class="header__button">
                        <a href="<?php echo $button['url']; ?>" target="<?php echo esc_attr( $link_target ); ?>"
                            class="button"><?php echo $button['title']; ?></a>
                    </div>
                    <?php endif; ?>
                    <button id="toggle"><span></span></button>
                </div>
            </div>
            <div id="side-panel" class="side-panel custom-scrollbar">
                <div class="side-inner">
                    <div class="white_bg">
                        <div class="side_container">
                            <div class="header__menu side_menu_block">
                                <nav class="header__nav">
                                    <div class="menu-main-menu-container menu_top">
                                        <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )) ?>
                                    </div>
                                </nav>
                                <nav class="header__nav">
                                    <div class="menu-main-menu-container">
                                        <?php wp_nav_menu(array( 'theme_location' => 'lang-menu', 'menu_class' => 'lang-menu', 'container' => false,)) ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>