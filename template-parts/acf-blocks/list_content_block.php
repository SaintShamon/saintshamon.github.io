<?php 
    $content = get_sub_field('content');
    $list_title = get_sub_field('list_title');
    if($content || have_rows('list')):
?>
<section class="list_content section">
    <div class="container">
        <div class="main_block">
            <div class="col list_content__list">
                <div class="inner_block">
                    <?php if($list_title): ?>
                        <div class="title">
                            <h3><?php echo $list_title; ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if(have_rows('list')): ?>
                        <ul class="inner_list text--size--20">
                            <?php while(have_rows('list')): the_row(); ?>
                                <?php $list_item = get_sub_field('list_item'); ?>
                                <?php if($list_item): ?><li><?php echo $list_item; ?></li><?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($content): ?>
                <div class="col list_content__content">
                    <div class="content-block">
                        <?php echo $content; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>