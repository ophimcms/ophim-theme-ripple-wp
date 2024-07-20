<?php

if (!function_exists('ophim_theme_setup')) {
    function ophim_theme_setup()
    {

        /*
         * Tự chèn RSS Feed links trong <head>
         */
        add_theme_support('automatic-feed-links');
        /*
         * Thêm chức năng title-tag để tự thêm <title>
         */
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');

        /*
         * Tạo menu cho theme
         */
        register_nav_menu('primary-menu', __('Primary Menu', 'ophim'));

    }

    add_action('init', 'ophim_theme_setup');

}




function wp_get_menu_array($current_menu)
{
    $menu_name = $current_menu;
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $array_menu = wp_get_nav_menu_items($menu->term_id);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID'] = $m->ID;
            $submenu[$m->ID]['title'] = $m->title;
            $submenu[$m->ID]['url'] = $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}

function ophim_pagination()
{

    global $wp_query;

    if ($wp_query->max_num_pages <= 1) return;
    $big = 999999999;

    $pages = paginate_links(array('base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), 'prev_text'          => '<',
        'next_text'          => '>',
        'format' => '?paged=%#%', 'current' => max(1, get_query_var('paged')), 'total' => $wp_query->max_num_pages, 'type' => 'array',));

    if (is_array($pages)) {
        echo '<nav role="navigation"  class="flex items-center justify-between"> <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">  <div><span class="relative z-0 inline-flex shadow-sm rounded-md">';
        foreach ($pages as $page) {
            $page = str_replace('page-numbers current','relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-red-600 hover:bg-opacity-80 shadow-md cursor-default leading-5',$page);
            $page = str_replace('page-numbers','relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-[#151111] hover:bg-red-600 hover:bg-opacity-80 shadow-md leading-5 focus:z-10 active:bg-gray-100 active:text-white transition ease-in-out duration-150',$page);
            echo "$page";
        }
        echo '</span></div></div></nav>';
    }
}

add_action('admin_enqueue_scripts', 'ophim_include_vung_admin_script');
function ophim_include_vung_admin_script()
{
    wp_enqueue_style('admin_vung', get_stylesheet_directory_uri() . '/admin/css/admin.css', false, '');
}