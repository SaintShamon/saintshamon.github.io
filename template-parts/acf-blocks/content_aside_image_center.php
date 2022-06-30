<?php 
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $left_content = get_sub_field('left_content');
    $right_content = get_sub_field('right_content');
    if($left_content || $right_content):
?>
<section class="side-content-image center_title-content section">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <?php if($title): ?>
                <div class="title_wrapper">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <?php if($left_content): ?>
                    <div class="col content-block">
                        <?php echo $left_content; ?>
                    </div>
                <?php endif; ?>
                <?php if($image): ?>
                    <div class="col center_img">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    </div>
                <?php endif; ?>
                <?php if($right_content): ?>
                    <div class="col content-block">
                        <?php echo $right_content; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>