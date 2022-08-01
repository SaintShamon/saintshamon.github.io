<?php
// add hook
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2);
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu($sorted_menu_items, $args)
{
    if (isset($args->sub_menu)) {
        $menuID = 0;
        $currentActiveMenu = 0;
        $added = true;
        $menu = [];

        //search the root menu item "Menu" 
        foreach ($sorted_menu_items as $key => $item) {
            if ($item->title == 'Menu' && $item->menu_item_parent == 0) {
                $menu[] = $item->ID;
                $menuID = $item->ID;
                break;
            }
        }
        //take the children from "Menu"
        while ($added) {
            $added = false;
            foreach ($sorted_menu_items as $key => $item) {
                if (($item->menu_item_parent == $menuID || in_array($item->menu_item_parent, $menu)) && !in_array($item->ID, $menu)) {
                    $menu[] = $item->ID;
                    $added = true;
                }
            }
        }
        //remove all items except the branch "Menu"
        foreach ($sorted_menu_items as $key => $item) {
            //|| in_array('mobile-only', $item->classes) || in_array('desktop-only', $item->classes)
            if (!in_array($item->ID, $menu) ) {
                unset($sorted_menu_items[$key]);
            }
        }
        //search current post id in menu => we consider the first occurence
        foreach ($sorted_menu_items as $key => $item) {
            if ($item->current) {
                $currentActiveMenu = $item->ID;
                break;
            }
        }
        $remove_rest = [];
        //#find the top level parent
        $prev_root_id = $currentActiveMenu;
        while ($prev_root_id != $menuID || $prev_root_id != 0) {
            $found = false;
            foreach ($sorted_menu_items as $menu_item) {
                if ($menu_item->ID == $prev_root_id) {
                    $found = true;
                    $prev_root_id = $menu_item->menu_item_parent;
                    // don't set the root_id to 0 if we've reached the top of the menu
                    if ($prev_root_id == $menuID) {
                        $currentActiveMenu = $menu_item->ID;
                        break;
                    }
                }
            }
            if(!$found){
                break;
            }
            
        }
        //build array with items not in the active branch
        foreach ($sorted_menu_items as $key => $item) {
            if ($item->menu_item_parent == $menuID && $item->ID != $currentActiveMenu) {
                $remove_rest[] = $item->ID;
            }
        }
        //remove them
        foreach ($sorted_menu_items as $key => $item) {
            if (in_array($item->menu_item_parent, $remove_rest) || in_array($item->ID, $remove_rest)) {
                unset($sorted_menu_items[$key]);
            }
        }
        //handle multi-level exceptions
        $skip = [];
        foreach ($sorted_menu_items as $key => $item) {
            if (in_array('menu-item-has-children', $item->classes)) {
                $skip[] = $item->ID;
            }
        }
        foreach ($sorted_menu_items as $key => $item) {
            if ((empty($skip) && $item->menu_item_parent != $currentActiveMenu) || $item->ID == $menuID || $item->ID == $currentActiveMenu) {
                unset($sorted_menu_items[$key]);
            } else {
                if (!in_array($item->menu_item_parent, $skip)) {
                    unset($sorted_menu_items[$key]);
                }
            }
        } 
        return $sorted_menu_items;
    } else {
        return $sorted_menu_items;
    }
}

function get_parent_page_menu_name($postID)
{
    $array_menu = wp_get_nav_menu_items('Main menu');
    $menuParentID = 0;
    $menuPostID = 0;
    $menu_root = 0;
    $title = get_the_title($postID);
    
    foreach ($array_menu as $key => $item) {
        if ($item->title == 'Menu' && $item->menu_item_parent == 0) {
            $menu_root = $item->ID;
            break;
        }
    }
  
    foreach ($array_menu as $menu_item) {
        if ($postID == $menu_item->object_id) {
            $menuPostID = $menu_item->ID;
            $menuParentID = $menu_item->menu_item_parent;
            break;
        }
    }

    //#find the top level parent
    $prev_root_id = $menuPostID;
    while ($prev_root_id != 0) {
        foreach ($array_menu as $menu_item) {
            if ($menu_item->ID == $prev_root_id) {
                $prev_root_id = $menu_item->menu_item_parent;
                if ($prev_root_id == $menu_root) {
                    $menuPostID = $menu_item->ID;
                    break;
                }
            }
        }
    }
    foreach ($array_menu as $item) {
        if ($menuPostID == $item->ID) {
            $title = $item->title;
            break;
        }
    }
    return $title;
}
