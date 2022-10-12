<section class="content_text_block section">
    <div class="container">
        <div class="main_block">
            <?php 
                $content_block = get_sub_field('content');
                $text_size = get_sub_field('text_size');
                if($content_block):
            ?>
            <div class="content-block <?php echo $text_size; ?>">
                <?php echo $content_block; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>