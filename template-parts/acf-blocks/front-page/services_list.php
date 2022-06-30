<?php 
$title = get_sub_field('title');
$button = get_sub_field('button');
$procedures = get_sub_field('services');
if($procedures):
?>
<section class="services-list section">
    <div class="container">
        <div class="main_block">
            <?php  if($title || $button): ?>
                <div class="title_wrapper">
                    <?php if($title): ?>
                        <div class="title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if($button): ?>
                        <div class="btn_block">
                            <a href="<?php echo $button['url']; ?>" class="button button--icon"><?php echo $button['title']; ?>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                        fill="#0C6F97" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="content_wrapper">
                <div class="services-list_row">
                    <?php foreach($procedures as $procedure): setup_postdata($procedure); ?>
                        <?php 
                            $name = get_the_title($procedure->ID);
                            $excerpt = get_the_excerpt( $procedure->ID );
                            $image = get_the_post_thumbnail_url( $procedure->ID );
                            $link = get_the_permalink( $procedure->ID );
                        ?>
                        <li class="services-list_block">
                            <a href="<?php echo $link; ?>">
                                <?php if(!empty($image)): ?>
                                    <div class="services-list__img">
                                        <img src="<?php echo $image; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <div class="services-list_title">
                                    <?php if(!empty($name) || !empty($excerpt)): ?>
                                        <div class="text_block">
                                            <?php if(!empty($name)): ?><h3><?php echo $name; ?></h3><?php endif; ?>
                                            <?php if(!empty($excerpt)): ?><p><?php echo $excerpt ?></p><?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 8L11 5.11325L11 10.8868L16 8ZM-4.37114e-08 8.5L11.5 8.5L11.5 7.5L4.37114e-08 7.5L-4.37114e-08 8.5Z"
                                                fill="#0C6F97" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
