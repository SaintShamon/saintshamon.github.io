<?php 
    $cta = get_field('cta_block', 'options');
    if($cta):
    $title = $cta['title'];
    $button = $cta['button'];
    $background_image = $cta['background_image'];
?>
<section class="cta">
    <?php if($background_image): ?>
        <div class="cta__backgroundImage"><img src="<?php echo $background_image; ?>" alt=""></div>
    <?php endif; ?>
    <?php if($title || $button): ?>
        <div class="cta__content">
            <?php if($title): ?>
                <h2 class="cta__title"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if($button): ?>
                <div class="cta__button">
                    <a href="<?php echo $button['url'] ?>" class="btn"><?php echo $button['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>