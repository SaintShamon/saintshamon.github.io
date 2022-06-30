<?php 
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $list_title = get_sub_field('list_title');
    if(have_rows('list') || $image || $content):
?>
<section class="image-list-content section">
    <div class="container">
        <div class="main_block">
            <div class="col col__image">
                <?php if($image): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
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
            <?php if($content): ?>
            <div class="col col__content content-block">
                <?php if($content): ?>
                <?php echo $content; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>