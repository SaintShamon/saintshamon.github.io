<?php 
    if(is_singular( 'programs' )){
        $sidebar_block = get_field('single_program_sidebar_block', 'options');
        if($sidebar_block):
            $block_title = $sidebar_block['title'];
            $text = $sidebar_block['text'];
            $button = $sidebar_block['button'];
            $background_image = $sidebar_block['background_image'];
            $button_target = $button['target'] ? $button['target'] : '_self';
        endif;
    }
    else{
        $block_title = get_field('block_title');
        $text = get_field('text');
        $button = get_field('button');
        $background_image = get_field('background_image');
        $button_target = $button['target'] ? $button['target'] : '_self';
    }
?>
<div class="sidebar__links">
    <?php if(is_singular('programs')): ?>
        <?php 
            if(have_rows('single_program_links', 'options')): 
            while(have_rows('single_program_links', 'options')): the_row(); $link = get_sub_field('single_program_link'); ?>
            <?php if($link): ?>
                <li class="page_item">
                    <a href="<?php echo $link['url']; ?>" aria-current="page"><?php echo $link['title']; ?></a>
                </li>
            <?php endif; ?>
        <?php 
            endwhile;
                endif;     
        ?>
    <?php else: ?>
        <?php 
            $parent_id = wp_get_post_parent_id(); 
            $page_link = get_page_link($parent_id);
            $current_page_link = get_page_link(get_the_ID());
            $parent_page_label = get_field('sidebar_page_label', $parent_id);
        ?>
        <li class="page_item page-item-25 <?php if($current_page_link == $page_link): echo 'current_page_item'; endif; ?>">
            <a href="<?php echo $page_link; ?>" aria-current="page"><?php if($parent_page_label): echo $parent_page_label; else: echo get_the_title($parent_id); endif; ?></a>
        </li>
        <?php echo do_shortcode('[wpb_childpages]'); ?>
    <?php endif; ?>
</div>
<div class="sidebar__separator separator"></div>
<?php if($block_title): ?>
    <h4 class="sidebar__blockTitle"><?php echo $block_title; ?></h4>
<?php endif; ?>
<?php if($text || $background_image || $button): ?>
<div class="sidebar__block">
    <?php if($background_image): ?>
        <div class="sidebar__image"><img src="<?php echo $background_image; ?>" alt=""></div>
    <?php endif; ?>
    <?php if($text): ?>
        <div class="sidebar__text text-lg"><?php echo $text; ?></div>
    <?php endif; ?>
    <div class="sidebar__button">
        <a href="<?php echo $button['url']; ?>" class="btn" target="<?php echo $button_target; ?>"><?php echo $button['title']; ?></a>
    </div>
</div>
<?php endif; ?>