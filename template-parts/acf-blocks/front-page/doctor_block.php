<section class="doctor_section section">
    <div class="container">
        <div class="main_block">
            <?php 
                $name = get_sub_field('name');
                $description = get_sub_field('description');
                $button = get_sub_field('button');
                $image = get_sub_field('image');
                $list_title = get_sub_field('list_title');
            ?>
            <div class="col">
                <?php if($name || $description): ?>
                    <div class="content_block">
                        <?php if($name): ?><h2><?php echo $name; ?></h2><?php endif; ?>
                        <?php if($description): ?>
                            <?php echo $description; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="button button--blue"><?php echo $button['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="col doctor_image_col">
                <div class="sertefication_block">
                    <?php if($list_title): ?>
                        <h3><?php echo $list_title; ?></h3>
                    <?php endif; ?>
                    <?php if(have_rows('list')): ?>
                        <ul class="sertefication_list">
                            <?php while(have_rows('list')): the_row(); ?>
                                <?php 
                                    $icon = get_sub_field('icon');
                                    $above_title_text = get_sub_field('above_title_text');
                                    $title = get_sub_field('title');
                                ?>
                                <li class="inner_block">
                                    <?php if($icon): ?>
                                        <img src="<?php echo $icon['url']; ?>" alt="">
                                    <?php endif; ?>
                                    <?php if($above_title_text || $title): ?>
                                        <div class="text_block">
                                            <?php if($above_title_text): ?><p class="text--size--14"><?php echo $above_title_text; ?></p><?php endif; ?>
                                            <?php if($title): ?>
                                                <p class="text--size--16"><?php echo $title; ?></p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php if($image): ?>
                    <div class="doctor_img_block">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>