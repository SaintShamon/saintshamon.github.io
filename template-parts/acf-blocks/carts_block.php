<?php 
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $columns = get_sub_field('columns');
    $content = get_sub_field('content');
    $add_img = get_sub_field('add_img');
    if($title || $subtitle):
?>
<section class="carts_blocks <?php if($add_img == true){echo 'add_img';} ?> section">
    <div class="container">
        <div class="main_menu">
            <div class="title_block">
                <?php if($subtitle): ?>
                <p class="subtitle"><?php echo $subtitle; ?></p>
                <?php endif; ?>
                <?php if($title): ?>
                <h2 class="title"><?php echo $title; ?>
                </h2>
                <?php endif; ?>
            </div>
            <?php if($content): ?>
            <div class="content-block">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
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