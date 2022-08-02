<?php
if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('full-hd', 1920, 1080, false); // Full HD Thumbnail
    add_image_size('large-square', 1300, 1300, true); // Large Square Thumbnail
    add_image_size('large-wide', 1300, 735, true); // Large Wide Thumbnail
    add_image_size('medium', 485, '', true); // Medium Thumbnail
    add_image_size('small', 242, '', true); // Small Thumbnail
}

// Register mso Navigation
function register_mso_menu() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'mso'), // Main Navigation
        'footer-menu-pages' => __('Footer Main Menu', 'mso'), // Footer Navigation Pages
        'footer-menu-terms' => __('Footer Terms Menu', 'mso'), // Footer Navigation Terms
    ));
}
add_action('init', 'register_mso_menu'); // Add Menus

// Remove comments from pages
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// Remove admin bar
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

/* Child pages list */
function wpb_list_child_pages() { 
 
    global $post; 
     
    if ( is_page() && $post->post_parent )
     
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
     
    if ( $childpages ) {
     
        $string = $childpages;
    }
     
    return $string;
     
    }
     
    add_shortcode('wpb_childpages', 'wpb_list_child_pages');
?>

