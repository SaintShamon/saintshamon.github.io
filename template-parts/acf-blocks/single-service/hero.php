<?php 
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $list_title = get_sub_field('list_title');
    if($content || $image):
?>
<section class="page-title section">
    <div class="container">
        <div class="top_wrapper">
            <div class="main_block">
                <div class="col">
                    <?php if($content): ?>
                    <div class="page-title__block_content content-block">
                        <?php echo $content; ?>
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
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>