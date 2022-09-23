<?php 
    $left_text = get_field('footer_left_text', 'options');
    $logo = get_field('footer_logo', 'options');
    $copyright = get_field('copyright', 'options');
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
                <?php 
                    $menu_id = get_nav_menu_locations()[ 'footer-menu-1' ];
                    $menu = wp_get_nav_menu_object( $menu_id );
                    $items = wp_get_nav_menu_items( $menu_id );
                    
                    echo $menu->name; // Displays the menu name.
                    foreach($items as $item){
                        echo '<a href="'. esc_url( $item->url )'">'. esc_html( $item->title ).'</a>'; // Displays a link to the item destination.
                         // Displays the item description.
                    }
                 ?>
                <h3 class="h4">
                    <?php echo $item->description; ?>
                </h3>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1' )) ?>
                </nav>
            </div>
            <div class="col menu">
                <h3 class="h4">Торговля на Форекс</h3>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2' )) ?>
                </nav>
            </div>
            <div class="col menu">
                <h3 class="h4">Платформы</h3>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-3' )) ?>
                </nav>
            </div>
            <div class="col menu">
                <h3 class="h4">Лицензии и сертификаты</h3>
                <nav>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-4' )) ?>
                </nav>
            </div>
        </div>
        <div class="footer_bottom_block">
            <?php if($copyright): ?>
            <div class="copyright text--size--14">
                <?php echo $copyright; ?>
                <p>Jotul Capital © 2022. Все права защищены </p>
            </div>
            <?php endif; ?>
            <nav class="bottom_menu text--size--14">
                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-bottom' )) ?>
            </nav>
        </div>
    </div>
</footer>