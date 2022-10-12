<?php 
   $title = get_sub_field('title');
   $subtitle = get_sub_field('subtitle');
   $list_row = get_sub_field('list_row');
    if($list_row):
?>
<section class="list_block section">
    <div class="bg_block"></div>
    <div class="container">
        <div class="main_block">
            <?php if($title): ?>
            <div class="title_block">
                <?php if($subtitle): ?>
                <p class="subtitle"><?php echo $subtitle; ?></p>
                <?php endif; ?>

                <h2 class="title"><?php echo $title; ?>
                </h2>
            </div>
            <?php endif; ?>
            <?php if(have_rows('list_row')): ?>
            <div class="list_block_content">
                <ul>
                    <?php while(have_rows('list_row')): the_row();
                    $content = get_sub_field('content');
                        if($content):
                    ?>
                    <li>
                        <?php echo $content; ?>
                    </li>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>