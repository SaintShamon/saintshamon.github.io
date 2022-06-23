<section class="resourses_section section">
    <div class="container">
        <div class="main_block">
            <?php 
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $text = get_sub_field('text');
            ?>
            <?php if($image): ?>
                <div class="col resourses_img">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="col">
                <?php if($title || $text): ?>
                    <div class="resourses_content_block">
                        <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
                        <?php if($text): ?><p><?php echo $text; ?></p><?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if(have_rows('links_list')): ?>
                    <ul class="resourses_list">
                        <?php while(have_rows('links_list')): the_row(); ?>
                            <?php $link = get_sub_field('link'); ?>
                            <?php if($link): ?>
                                <li class="resourses_inner">
                                    <a href="<?php echo $link['url']; ?>">
                                        <p class=" text--uppercase"><?php echo $link['title']; ?></p>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                                fill="#0C6F97" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>