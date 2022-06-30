<?php 
    $image = get_sub_field('image');
    $cf7 = get_sub_field('contact_form');
    if($cf7):
?>
<section class="contact_section contact-center section">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <div class="col col_form">
                <?php if($image): ?>
                    <div class="img_block">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    </div>
                <?php endif; ?>
                <div class="form_block">
                    <?php echo $cf7; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>