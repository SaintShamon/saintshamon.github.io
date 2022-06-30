<?php 
    $content = get_sub_field('content');
    $button = get_sub_field('button');
    $image = get_sub_field('image');
    if($content):
?>
<section class="billpay_section section">
    <div class="container">
        <div class="main_block">
            <div class="col">
                <?php if($content): ?>
                    <div class="billpay__content_block content-block">
                        <?php echo $content; ?>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="button button--blue"><?php echo $button['title']; ?></a>
                <?php endif; ?>
            </div>
            <?php if($image): ?>
                <div class="col billpay__img">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>