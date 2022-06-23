<section class="billpay_section section">
    <div class="container">
        <?php 
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $button = get_sub_field('button');
            $image = get_sub_field('image');
        ?>
        <div class="main_block">
            <div class="col">
                <?php if($title || $text): ?>
                    <div class="billpay__content_block">
                        <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
                        <?php if($text): ?>
                            <p class="text--size--22"><?php echo $text; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="button button--blue"><?php echo $button['title']; ?></a>
                <?php endif; ?>
            </div>
            <?php if($image): ?>
                <div class="col billpay__img">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>