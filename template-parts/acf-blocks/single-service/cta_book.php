<?php 
    $cta = get_field('cta_book', 'options');
    if($cta):
?>
<section class="cta-book section">
    <?php 
        if(is_singular('services') && get_field('change_book_content_blocks_order') == true): ?>
            <div class="background_image"></div>
        <?php endif; ?>
    <div class="container">
        <?php 
            $content = $cta['content'];
            $button = $cta['button'];
        ?>
        <div class="main_block">
            <?php if($content): ?>
            <div class="col">
                <div class="cta-book__content content-block">
                    <?php echo $content; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if($button): ?>
            <div class="col">
                <div class="cta-book_link">
                    <a href="<?php echo $button['url']; ?>"
                        class="button button--blue"><?php echo $button['title']; ?></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>