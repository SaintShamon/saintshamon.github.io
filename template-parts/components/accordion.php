<?php 
    $title = get_sub_field('title');
    $text = get_sub_field('block_description');
    $accordionButton = get_sub_field('button');
    if(have_rows('accordion_list')):
?>
<section class="accordionWrapper">
    <?php if($title || $text): ?>
        <div class="accordion__contentWrapper">
            <?php if($title): ?>
                <h3 class="accordion__title">
                    <?php echo $title; ?>
                </h3>   
            <?php endif; ?>
            <?php if($text): ?>
                <div class="accordion__content">
                    <?php echo $text; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="accordion__list">
        <?php while(have_rows('accordion_list')): the_row(); ?>
            <?php 
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $button = get_sub_field('button');
            ?>
            <div class="accordion__item">
                <?php if($title): ?>
                    <div class="accordion__itemTitle"><?php echo $title; ?></div>
                <?php endif; ?>
                <?php if($content || $button): ?>
                    <div class="accordion__itemContentWrapper content-block">
                        <?php if($content): ?>
                            <div class="accordion__itemContent">
                                <?php echo $content; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($button): ?>
                            <div class="accordion__itemButton">
                                <a href="<?php echo $button['url']; ?>" class="btn"><?php echo $button['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php if($accordionButton): ?>
        <div class="accordion__button">
            <a href="<?php echo $accordionButton['url']; ?>" class="btn"><?php echo $accordionButton['title']; ?></a>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>