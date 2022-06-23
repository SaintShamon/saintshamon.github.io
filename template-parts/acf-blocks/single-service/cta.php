<?php 
    $cta = get_field('single_service_cta_block', 'options');
    if($cta):
?>
<section class="cta-book section">
    <div class="container">
        <?php 
            $title = $cta['title'];
            $text = $cta['text'];
            $button = $cta['button'];

        ?>
        <div class="main_block">
            <?php if($title || $text): ?>
                <div class="col">
                    <div class="cta-book__content">
                        <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
                        <?php if($text): ?>
                            <?php echo $text; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($button): ?>
            <div class="col">
                <div class="cta-book_link">
                    <a href="<?php echo $button['url']; ?>" class="button button--blue"><?php echo $button['title']; ?></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>