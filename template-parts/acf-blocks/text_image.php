<?php 
   $title = get_sub_field('title');
   $subtitle = get_sub_field('subtitle');
   $content = get_sub_field('content');
   $image = get_sub_field('image');
   $column_list = get_sub_field('column_list');
    if($title || $content):
?>
<section class="text_image <?php if($column_list == true){echo 'column_list';} ?> section">
    <div class="container">
        <div class="main_block">
            <div class="col">
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
            </div>
            <div class="col">
                <div class="img_block">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>