<?php 
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $list_title = get_sub_field('list_title');
?>
<section class="two_col_left_img section">
    <div class="container">
        <div class="main_block">
            <?php if(have_rows('list') || $image || $list_title): ?>
                <div class="col col__image">
                    <?php if($image): ?>
                        <img src="<?php echo $image; ?>" alt="">
                    <?php endif; ?>
                    <div class="conditions">
                        <?php if($list_title): ?><h3><?php echo $list_title; ?></h3><?php endif; ?>
                        <ul class="conditions_list">
                            <?php while(have_rows('list')): the_row('list'); ?>
                                <?php $item = get_sub_field('list_item'); ?>
                                <?php if($item): ?><li><?php echo $item; ?></li><?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($title || $text): ?>
                <div class="col col__content">
                    <?php if($title): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <?php echo $text; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>