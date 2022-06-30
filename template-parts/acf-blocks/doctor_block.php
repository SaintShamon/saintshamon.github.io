<?php 
    $about_doctor = get_sub_field('about_doctor');
    $image = get_sub_field('image');
    $button = get_sub_field('button');
    if($about_doctor || $image):
?>
<section class="about_doctor section" id="about_doctor">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <?php if($about_doctor || $image): ?>
            <div class="image_wrapper">
                <?php if($image): ?>
                <div class="col about_doctor__img">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>
                <?php endif; ?>
                <?php if($about_doctor || $button): ?>
                <div class="col about_doctor__content_block content-block">
                    <?php if($about_doctor): ?>
                    <?php echo $about_doctor; ?>
                    <?php endif; ?>
                    <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>"
                        class="button button--blue"><?php echo $button['title']; ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if(have_rows('lists')): ?>
            <div class="lists_wrapper">
                <?php while(have_rows('lists')): the_row(); ?>
                <?php 
                            $list_title = get_sub_field('list_title');    
                        ?>
                <div class="about_doctor__inner_block">
                    <?php if($list_title): ?>
                    <h3><?php echo $list_title; ?></h3>
                    <?php endif; ?>
                    <?php if(have_rows('list')): ?>
                    <ul class="about_doctor__list">
                        <?php while(have_rows('list')): the_row(); ?>
                        <?php $item = get_sub_field('list_item'); ?>
                        <?php if($item): ?><li><?php echo $item; ?></li><?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>