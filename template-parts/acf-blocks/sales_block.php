<?php 
    $title = get_sub_field('title');
    $left_btn = get_sub_field('left_button');
    $right_btn = get_sub_field('right_button');
    if($title):
?>
<section class="sales_block section">
    <div class="container">
        <div class="main_block">
            <div class="content-block">
                <?php if($title): ?>
                <h2><?php echo $title; ?>
                </h2>
                <?php endif; ?>
                <?php if($left_btn || $right_btn): 
                        $link_target = $left_btn['target'] ? $left_btn['target'] : '_self';
                        $link_target_right = $right_btn['target'] ? $right_btn['target'] : '_self'; ?>
                <div class="btn_block">
                    <a href="<?php echo $left_btn['url']; ?>" target="<?php echo esc_attr( $link_target ); ?>"
                        class="button"><?php echo $left_btn['title']; ?></a>
                    <a href="<?php echo $right_btn['url']; ?>" target="<?php echo esc_attr( $link_target_right ); ?>"
                        class="button button--black"><?php echo $right_btn['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
            <div class="img_block">
                <img src="<?= get_template_directory_uri() ?>/assets/images/coins_img.svg" alt="">
            </div>
            <div class="img_mobile first">
                <img src="<?= get_template_directory_uri() ?>/assets/images/coin_1.svg" alt="">
            </div>
            <div class="img_mobile second">
                <img src="<?= get_template_directory_uri() ?>/assets/images/coin_2.svg" alt="">
            </div>
            <div class="img_mobile third">
                <img src="<?= get_template_directory_uri() ?>/assets/images/coin_3.svg" alt="">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>