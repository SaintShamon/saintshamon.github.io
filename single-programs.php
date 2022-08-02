<?php 
    get_header(); 
    $logo = get_field('logo', 'options');
    $hero_background = get_field('hero_block_background_image');
?>
<main class="has-sidebar" >
    <section class="heroWrapper">
        <div class="hero">
            <?php if($hero_background): ?>
                <div class="hero__background"><img src="<?php echo $hero_background; ?>" alt=""></div>
            <?php endif; ?>
            <div class="container hero__content">
                <?php if($logo): ?>
                    <div class="hero__logo"><a href="<?php echo get_home_url() ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>"></a></div>
                <?php endif; ?>
                <h1 class="hero__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="menu">
            <div class="menu__wrapper"></div>
            <div class="menu__iconWrapper">
                <div class="menu__icon"><img src="<?php echo get_template_directory_uri() . '/build/img/menu_icon.svg'; ?>" alt=""></div>
            </div>
        </div>
    </section>
    <div class="container">
        <?php get_template_part('template-parts/global/breadcrumbs'); ?>
        <div class="components">
            <?php if (have_rows('components')) : ?>
                <?php while (have_rows('components')) : the_row();
                    get_template_part("template-parts/components/" . get_row_layout());
                endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="sidebar">
            <?php get_template_part('template-parts/sidebar/navigation'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>