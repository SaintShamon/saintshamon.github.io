<section class="page-title section">
    <div class="container">
        <div class="top_wrapper">
            <?php 
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $image = get_sub_field('image');
                $list_title = get_sub_field('list_title');
            ?>
            <div class="main_block">
                <div class="col">
                    <?php if($title || $text): ?>
                        <div class="page-title__block_content">
                            <?php if($title): ?><h1><?php echo $title; ?></h1><?php endif; ?>
                            <?php if($text): ?>
                                <?php echo $text; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(have_rows('list')): ?>
                        <div class="conditions">
                            <?php if($list_title): ?>
                                <h3><?php echo $list_title; ?></h3>
                            <?php endif; ?>
                            <ul class="conditions_list">
                                <?php while(have_rows('list')): the_row(); ?>
                                    <?php $item = get_sub_field('list_item'); ?>
                                    <?php if($item): ?><li><?php echo $item; ?></li><?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if($image): ?>
                    <div class="col page-title__image">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>