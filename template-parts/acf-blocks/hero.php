<div class="breadcrumbs_block">
    <div class="container">
        <p id="breadcrumbs" class="text--size--14">
            <?php echo do_shortcode('[wpseo_breadcrumb]'); ?>
        </p>
    </div>
</div>
<?php 
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    if($content || $image):
?>
<section class="page-title section">
    <div class="container">
        <div class="top_wrapper">
            <div class="main_block">
                <?php if($content): ?>
                    <div class="col">
                        <div class="page-title__block_content content-block">
                            <?php if($content): ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
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