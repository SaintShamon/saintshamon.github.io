<?php 
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $left_btn = get_sub_field('left_button');
    $right_btn = get_sub_field('right_button');
    $add_img = get_sub_field('right_bottom_img');
    $front_inner = get_sub_field('front_inner');
    $choose_bg = get_sub_field('choose_background');
    $choose_size = get_sub_field('chose_title_size');
    if($title || $image):
?>
<section
    class="hero <?php if($front_inner == true){echo 'inner_pages';} ?> <?php if($add_img == true){echo 'right_bottom_img';} ?> <?php echo $choose_bg; ?> section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="hero_main_block">
            <div class="hero_text_block">
                <?php if($title): ?>
                <h1 class="<?php echo $choose_size; ?>"><?php echo $title; ?>
                </h1>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block">
                    <?php echo $content; ?>
                </div>
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

        </div>
    </div>
    <div class="hero_img_block">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
    </div>
</section>
<?php endif; ?>