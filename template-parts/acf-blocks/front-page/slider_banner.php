<?php if(have_rows('slide')): ?>
<section class="slider-banner section">
    <div class="slider_list_bg slider_main">
        <?php while(have_rows('slide')): the_row(); ?>
        <?php $image = get_sub_field('image'); ?>
        <div class="background_image" style="background-image: url('<?php echo $image; ?>');">
            <div class="lines_block"
                style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/lines/main-slider_lines.svg')">
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="container">
        <div class="main_block">
            <div class="first_section_slider slider_main">
                <?php while(have_rows('slide')): the_row(); ?>
                <?php 
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $above_title_text = get_sub_field('above_title_text');
                        $button = get_sub_field('button');
                        $text_color = get_sub_field('slide_text_color');
                    ?>
                <div class="slider_block">
                    <?php if($title || $above_title_text): ?>
                    <div class="title_wrapper <?php echo $text_color; ?>">
                        <?php if($above_title_text): ?>
                        <div class="top_subtitle">
                            <p><?php echo $above_title_text; ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if($title): ?>
                        <div class="title">
                            <h1><?php echo $title; ?></h1>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($text || $button): ?>
                    <div class="content_wrapper <?php echo $text_color; ?>">
                        <?php if($text): echo $text; endif; ?>
                        <?php if($button): ?>
                        <a href="<?php echo $button['url'] ?>" class="button"><?php echo $button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="dots_block">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>