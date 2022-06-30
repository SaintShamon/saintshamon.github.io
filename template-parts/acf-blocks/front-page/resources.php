<?php 
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    if(have_rows('links_list')):
?>
<section class="resourses_section section">
    <div class="container">
        <div class="main_block">
            <?php if($image): ?>
            <div class="col resourses_img">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            </div>
            <?php endif; ?>
            <div class="col">
                <?php if($content): ?>
                <div class="resourses_content_block content-block">
                    <?php echo $content ?>
                </div>
                <?php endif; ?>
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
            </div>
        </div>
    </div>
</section>
<?php endif; ?>