<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <!-- 	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<?php $body_classes = ''; ?>
<?php 
	if(is_singular('services')):
		if(get_field('change_book_content_blocks_order') == true):
			$body_classes = $body_classes . ' change_blocks_order';
		endif;
	endif;
?>
<body <?php body_class($body_classes); ?>>
    <div class="overlay"></div>
    <div class="site">
        <?php 
	get_template_part('template-parts/header/header'); ?>


        <main id="main" class="<?php if(is_singular('services' )){echo 'service-template';} ?>">