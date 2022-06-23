<?php 
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $button = get_sub_field('button');
    $has_background = get_sub_field('has_background');
?>
<section class="meet_section section<?php if($has_background == true){echo ' has_bg';} ?>">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <?php if($image): ?>
                <div class="col meet_section_img"
                    style="background: linear-gradient(0deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1))">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="col meet_content_block">
                <?php if($title || $text): ?>
                    <div class="inner_block">
                        <?php if($title): ?>
                            <h2><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <?php echo $text; ?>
                        <?php endif; ?>
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
            </div>
        </div>
    </div>
</section>