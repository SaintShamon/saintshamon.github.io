<?php 
    $list_title = get_sub_field('list_title'); 
    $text = get_sub_field('text');
    $list_side = get_sub_field('list_side');
    if(have_rows('list')):
?>
<section class="page-title section list-<?php echo $list_side; ?>">
    <div class="container">
        <div class="bottom_wrapper service-hero">
            <div class="main_block">
                <div class="col">
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
                </div>
                <?php if($text): ?>
                <div class="col">
                    <div class="page-title__block_content content-block">
                        <?php echo $text; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>