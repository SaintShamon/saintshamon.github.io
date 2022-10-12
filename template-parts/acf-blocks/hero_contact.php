<?php 
    $title = get_sub_field('title');
    $choose_bg = get_sub_field('choose_background');
    $choose_size = get_sub_field('chose_title_size');
    $columns = get_sub_field('columns');
    if($title || $choose_bg):
?>
<section class="hero_contact   <?php echo $choose_bg; ?> section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="hero_contact_main_block">
            <div class="hero_contact_text_block">
                <?php if($title): ?>
                <h1 class="<?php echo $choose_size; ?>"><?php echo $title; ?>
                </h1>
                <?php endif; ?>
            </div>

            <?php if(have_rows('carts_list')): ?>
            <div class="carts_blocks_wrap <?php echo $columns; ?>">
                <?php while(have_rows('carts_list')): the_row();
                    $icon = get_sub_field('icon');
                    $cart_content = get_sub_field('cart_content');
                    if($icon || $cart_content):
                    ?>
                <div class="cart_inner">
                    <div class="icon">
                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['title']; ?>">
                    </div>
                    <div class="text">
                        <?php echo $cart_content; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>