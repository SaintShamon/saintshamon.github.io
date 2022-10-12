<?php 
   $title = get_sub_field('title');
   $subtitle = get_sub_field('subtitle');
   $content = get_sub_field('content');
   $image = get_sub_field('image');
   $column_list = get_sub_field('column_list');
    if($title || $content):
?>
<section class="top_text_image section">
    <div class="container">
        <div class="main_block">
            <div class="title_block">
                <?php if($subtitle): ?>
                <p class="subtitle"><?php echo $subtitle; ?></p>
                <?php endif; ?>
                <?php if($title): ?>
                <h2 class="title"><?php echo $title; ?>
                </h2>
                <?php endif; ?>
            </div>
            <?php if($content): ?>
            <div class="content-block">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
            <?php if(have_rows('image_row')): ?>
            <div class="img_block">
                <?php while(have_rows('image_row')): the_row();
                    $image = get_sub_field('image');
                        if($image):
                    ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>