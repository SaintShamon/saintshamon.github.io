<?php 
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $button = get_sub_field('button');
    if($content || $image):
?>
<section class="contact_image section has_bg">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <?php if($image): ?>
                <div class="col contact_image__img">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>
            <?php endif; ?>
            <?php if($content || $button): ?>
                <div class="col contact_image__content">
                    <?php if($content): ?>
                        <div class="inner_block content-block">
                           <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($button): ?>
                        <a href="<?php echo $button['url'] ?>" class="button button--icon"><?php echo $button['title']; ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                    fill="#0C6F97" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>