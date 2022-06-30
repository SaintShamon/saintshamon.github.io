<?php 
    $title = get_sub_field('title');
    if(have_rows('cards')):
?>
<section class="textCards">
    <div class="container">
        <?php if($title): ?>
            <div class="textCards__title">
                <h2>
                    <?php echo $title; ?>
                </h2>
            </div>
        <?php endif; ?>
        <div class="textCards__list">
            <?php while(have_rows('cards')): the_row(); $content = get_sub_field('card_content'); ?>
                <?php if($content): ?>
                    <div class="textCards__itemWrapper content-block">
                        <div class="textCards__item content-block">
                            <?php echo $content; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>