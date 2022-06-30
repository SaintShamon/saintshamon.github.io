<?php 
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $button = get_sub_field('button');
    $image_side = get_sub_field('image_side');
    if($image_side == 'Right'):
?>
<section class="image_content section small_height visa_block">
    <div class="container">
        <div class="main_block">
            <div class="col image_content__content">
                <?php if($content): ?>
                    <div class="inner_block content-block">
                        <?php echo $content; ?>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="button button--icon"><?php echo $button['title']; ?>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                fill="#0C6F97" />
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if(have_rows('icons_list')): ?>
                    <div class="visa_block_list">
                        <ul>
                            <?php while(have_rows('icons_list')): the_row(); ?>
                                <?php 
                                    $icon = get_sub_field('icon');
                                    if($icon):
                                ?>
                                    <li><img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['title']; ?>"></li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($image): ?>
                <div class="col image_content__img">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php elseif($image_side == 'Left'): ?>
<section class="meet_section section">
    <div class="container">
        <div class="main_block">
            <?php if($image): ?>
                <div class="col meet_section_img">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                </div>
            <?php endif; ?>
            <?php if($content || $button): ?>
                <div class="col meet_content_block">
                    <?php if($content): ?>
                        <div class="inner_block content-block">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($button): ?>
                        <a href="<?php echo $button['url']; ?>" class="button button--blue"><?php echo $button['title']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>