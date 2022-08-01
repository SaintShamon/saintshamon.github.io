<?php
// Change the posts menu to "News"
//Except for Ferryhouse news is to be called News
add_action('admin_menu', function () {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News Post';
  });
  
  add_action('init', function () {
      global $wp_post_types;
      $labels = &$wp_post_types['post']->labels;
      $labels->name = 'News';
      $labels->singular_name = 'News';
      $labels->add_new = 'Add News post';
      $labels->add_new_item = 'Add News post';
      $labels->edit_item = 'Edit News post';
      $labels->new_item = 'News';
      $labels->view_item = 'View News';
      $labels->search_items = 'Search News';
      $labels->not_found = 'No News posts found';
      $labels->not_found_in_trash = 'No News posts found in Trash';
      $labels->all_items = 'All News posts';
      $labels->menu_name = 'News';
      $labels->name_admin_bar = 'News';
  });