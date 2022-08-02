<?php 
    $title = get_sub_field('title');
    $testimonials = get_sub_field('testimonials');
    if($testimonials):
?>
<section class="testimonials">
    <?php if($title): ?>
        <h2 class="testimonials__title"><?php echo $title; ?></h2>
    <?php endif; ?>
    <div class="testimonials__list">
        <?php foreach($testimonials as $post): setup_postdata( $post ); ?>
            
            <div class="testimonials__item">
                <?php if(!empty(get_the_content())): ?><div class="testimonials__itemText"><?php the_content(); ?></div><?php endif; ?>
                <?php if(!empty(get_the_title())): ?><div class="testimonials__itemSubtext"><?php the_title(); ?></div><?php endif; ?>
            </div>
        <?php endforeach; wp_reset_postdata(  ); ?>
    </div>
</section>
<?php endif; ?>