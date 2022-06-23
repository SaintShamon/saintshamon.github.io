
<?php 
$postBanner = get_field('banner_image');
$content = get_the_content();
$pdf = get_field('pdf_file');
?>
<div class="section container blog-post__header">

    <div class="blog-post__header__banner">
        <?php if($postBanner): ?>
            <?php image_acf($postBanner); ?>
        <?php endif; ?>
    </div>

    <div class="row">
            <div class="col-xl-12 col-lg-12 offset-xl-0 offset-lg-2 ">
                <div class="content-block content-block--xl">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
    </div>

</div>
