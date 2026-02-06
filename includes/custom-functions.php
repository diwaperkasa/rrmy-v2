<?php

require_once get_template_directory() . "/inc/init.php";

/**
 * This is file for all of your custom functions for the project
 */

/**
 * Enables the Link Manager that existed in WordPress until version 3.5.
 */
// add_filter('pre_option_link_manager_enabled', '__return_true');

function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section('theme_options', array(
        'title'       => __('Theme Options', 'mytheme'),
        'priority'    => 30,
    ));

    $wp_customize->add_setting('theme_logo', array(
        'default' => 0,
        'sanitize_callback' => 'absint',
        'type' => 'theme_mod',
    ));

    $wp_customize->add_setting('rr1_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_setting('the_vault_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_setting('ultimate_drives_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_setting('subscribe_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_setting('subscribe_logo', array(
        'default' => 0,
        'sanitize_callback' => 'absint',
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'theme_logo',
        [
            'label' => __('RobbReport Image', 'rr_logo'),
            'section' => 'theme_options',
            'mime_type' => 'image',
        ]
    ));

    $wp_customize->add_control('rr1_url', [
        'label' => __('RR1 Url', 'rr1_url'),
        'section' => 'theme_options',
        'type' => 'url',
    ]);

    $wp_customize->add_control('the_vault_url', [
        'label' => __('The Vault Url', 'the_vault_url'),
        'section' => 'theme_options',
        'type' => 'url',
    ]);

    $wp_customize->add_control('ultimate_drives_url', [
        'label' => __('Ultimate Drives Url', 'ultimate_drives_url'),
        'section' => 'theme_options',
        'type' => 'url',
    ]);

    $wp_customize->add_control('subscribe_url', [
        'label' => __('Subscribe Url', 'subscribe_url'),
        'section' => 'theme_options',
        'type' => 'url',
    ]);

    $wp_customize->add_control(new WP_Customize_Media_Control(
        $wp_customize,
        'subscribe_logo',
        [
            'label' => __('Subscribe Image', 'subscribe_logo'),
            'section' => 'theme_options',
            'mime_type' => 'image',
        ]
    ));
}

add_action('customize_register', 'mytheme_customize_register');

function theme_setup()
{
    /* add woocommerce support */
    add_theme_support('woocommerce');
    /* add title tag support */
    add_theme_support('title-tag');
    /* Add default posts and comments RSS feed links to head */
    add_theme_support('automatic-feed-links');
    /* Add excerpt to pages */
    add_post_type_support('page', 'excerpt');
    /* Add support for post thumbnails */
    add_theme_support('post-thumbnails');
    /* Add support for Selective Widget refresh */
    add_theme_support('customize-selective-refresh-widgets');
    /** Add sensei support */
    add_theme_support('sensei');
    /* Add support for HTML5 */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'widgets',
    ));
    /*  Enable support for Post Formats */
    // add_theme_support('post-formats', array('video'));
    /* Register Menus */
    register_nav_menus([
        'mobile_menu' => __('Mobile', 'rrmy'),
    ]);

    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(array(
            'label' => 'Featured image (Square)',
            'id'    => 'square-image', // A unique ID for the thumbnail
            'post_type' => 'post' // The post type to associate the image with
        ));
    }
}

add_action('after_setup_theme', 'theme_setup');

function my_acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/acf-json';

    return $path;
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function video_vimeo_register_post_type_args($args, $post_type)
{
    if ('vimeo-video' === $post_type) {
        $args['rewrite']['slug'] = 'video';
    }

    return $args;
}

add_filter('register_post_type_args', 'video_vimeo_register_post_type_args', 10, 2);

function get_dfp_targets()
{
    global $post;
    $targets = [];

    if (is_home() || is_front_page()) {
        $targets[] = 'home';
    } elseif (is_singular(['post', 'wine', 'passport', 'package'])) {
        $categories = wp_get_object_terms($post->ID, 'category');

        if (!empty($categories)) {
            foreach ($categories as $category) {
                $targets[] = $category->slug;

                if ($category->parent) {
                    $term = get_term_by('id', $category->parent, 'category');
                    $targets[] = $term->slug;
                }
            }
        }

        $targets[] = $post->ID;
    } elseif (is_author()) {
        $targets[] = 'home';
    } elseif (is_category()) {
        $term = get_queried_object();
        $targets[] = $term->slug;

        if ($term->parent) {
            $term      = get_term_by('id', $term->parent, 'category');
            $targets[] = $term->slug;
        }
    }

    return $targets;
}

function wpp_custom_taxonomy_separator($separator)
{
    return " | ";
}

add_filter('wpp_taxonomy_separator', 'wpp_custom_taxonomy_separator', 10, 1);

add_filter('option_users_can_register', function ($value) {
    $script = basename(parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH));

    if ($script == 'wp-login.php') {
        $value = false;
    }

    return $value;
});

function force_feed($feed)
{
    $feed->force_feed(true);
}

add_action('wp_feed_options', 'force_feed', 10, 1);

function get_wp_menu_tree($menu_location = 'primary')
{
    $locations = get_nav_menu_locations();

    if (!isset($locations[$menu_location])) {
        return [];
    }

    $menu_id = $locations[$menu_location];
    $items   = wp_get_nav_menu_items($menu_id);

    $menu_tree = [];
    $children  = [];

    // Group children by parent
    foreach ($items as $item) {
        $parent_id = intval($item->menu_item_parent);

        if ($parent_id === 0) {
            $menu_tree[$item->ID] = [
                'id'       => $item->ID,
                'title'    => $item->title,
                'url'      => $item->url,
                'object'   => $item->object,
                'target'   => $item->target,
                'children' => []
            ];
        } else {
            $children[$parent_id][] = [
                'id'       => $item->ID,
                'title'    => $item->title,
                'url'      => $item->url,
                'object'   => $item->object,
                'target'   => $item->target,
                'parent'   => $parent_id,
                'children' => []
            ];
        }
    }

    // Assign nested children recursively
    $add_children = function (&$parents) use (&$children, &$add_children) {
        foreach ($parents as &$parent) {
            if (!empty($children[$parent['id']])) {
                $parent['children'] = $children[$parent['id']];
                $add_children($parent['children']);
            }
        }
    };

    $add_children($menu_tree);

    return array_values($menu_tree);
}

function more_category_article()
{
    $result = [];

    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $length = filter_input(INPUT_GET, 'length', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $term_id = filter_input(INPUT_GET, 'term_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $query = new WP_Query([
        'paged' => $page,
        'posts_per_page' => $length,
        'post_status' => 'publish',
        'post_type' => ['post', 'wine', 'passport', 'package'],
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows'  => true,
        'tax_query' => [
            [
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $term_id,
            ]
        ]
    ]);

    foreach ($query->posts as $row) {
        global $post;
        $post = $row;
        setup_postdata($post);
        ob_start();
        get_template_part('templates/components/article-box', 'category');
        $html = ob_get_clean();
        $result[] = $html;
        wp_reset_postdata();
    }

    // Prepare response
    $response = array(
        'message' => 'success',
        'data' => $result,
    );

    // Send JSON response
    return wp_send_json($response);
}

add_action('wp_ajax_more_category_article', 'more_category_article');
add_action('wp_ajax_nopriv_more_category_article', 'more_category_article');

function more_article()
{
    $result = [];

    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $length = filter_input(INPUT_GET, 'length', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $query = new WP_Query([
        'paged' => $page,
        'posts_per_page' => $length,
        'post_status' => 'publish',
        'post_type' => ['post', 'wine', 'passport', 'package'],
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows'  => true,
    ]);

    foreach ($query->posts as $row) {
        global $post;
        $post = $row;
        setup_postdata($post);
        ob_start();
        get_template_part('templates/components/article-box');
        $html = ob_get_clean();
        $result[] = $html;
        wp_reset_postdata();
    }

    // Prepare response
    $response = array(
        'message' => 'success',
        'data' => $result,
    );

    // Send JSON response
    return wp_send_json($response);
}

add_action('wp_ajax_more_article', 'more_article');
add_action('wp_ajax_nopriv_more_article', 'more_article');

function package_price()
{
    global $post;

    $currency = get_field('currency', $post->ID);
    $package_price = get_field('package_price', $post->ID);
    $unit = get_field('unit', $post->ID);

    if (!preg_match('#[^0-9]#', $package_price)) {
        return $currency . " " . number_format($package_price, 2, '.', ',') . (!empty($unit) ? " " . $unit : "");
    } else {
        return $package_price;
    }
}

add_filter('shortcode_atts_gallery', function ($out, $pairs, $atts) {
    $out['size'] = 'full';
    return $out;
}, 10, 3);

add_filter('ep_is_integrated', '__return_true');

add_action( 'pre_get_posts', function( $query ) {
    if ($query->is_search() && $query->is_main_query()) {
        $query->set('post_status', ['publish']);
        $query->set('ignore_sticky_posts', true);
        
        if ( apply_filters('ep_is_integrated', false) ) {
            $query->set('fields', '');
            $query->set('ep_integrate', true);
        }
    }

    if ((is_tag() || is_tax() || is_archive()) && $query->is_main_query()) {
        $query->set('post_status', ['publish']);
        
        if (apply_filters('ep_is_integrated', false)) {
            $query->set('ep_integrate', true);
        }
    }
});

add_filter('ep_is_integrated', function ($integrated) {
    if (is_admin()) {
        return false;
    }

    return $integrated;
}, 10, 3);

add_filter( 'ep_post_match_fuzziness', '__return_zero' );

function getPostThumbnail($postId, $slug)
{
    if (!class_exists('MultiPostThumbnails')) {
        return;
    }

    $imgUrl = MultiPostThumbnails::get_post_thumbnail_url(
        'post',
        $slug,
        $postId,
        'full'
    );

    return $imgUrl;
}

add_filter('post_thumbnail_html', function ( $html, $post_id, $post_thumbnail_id, $size, $attr  ) {
    if (!isset($attr['class'])) {
        return $html;
    }
    
    $class = $attr['class'];

    if (!str_contains($class, '1x1')) return $html;

    $squareImage = getPostThumbnail(get_the_ID(), 'square-image');

    if (!$squareImage) return $html;

    $imgTag = $html;
    $source = [];

    if (str_contains($class, 'ratio-1x1')) {
        if (!str_contains($class, '16x9') && !str_contains($class, '2x1')) {
            $source[] = "<source srcset=\"{$squareImage}\"/>";
        }
        
        if (str_contains($class, 'ratio-sm')) {
            $source[] = "<source media=\"(max-width: 575px)\" srcset=\"{$squareImage}\"/>";
        } elseif (str_contains($class, 'ratio-md')) {
            $source[] = "<source media=\"(max-width: 767px)\" srcset=\"{$squareImage}\"/>";
        } elseif (str_contains($class, 'ratio-lg')) {
            $source[] = "<source media=\"(max-width: 1023px)\" srcset=\"{$squareImage}\"/>";
        }
    } elseif (str_contains($class, 'ratio-sm-1x1')) {
        $source[] = "<source media=\"(min-width: 576px)\" srcset=\"{$squareImage}\"/>";
    } elseif (str_contains($class, 'ratio-md-1x1')) {
       $source[] = "<source media=\"(min-width: 768px)\" srcset=\"{$squareImage}\"/>";
    } elseif (str_contains($class, 'ratio-lg-1x1')) {
        $source[] = "<source media=\"(min-width: 1024px)\" srcset=\"{$squareImage}\"/>";
    }

    if (empty($source)) {
        return $html;
    }

    $sourceTag = join('', $source);

    return "
        <picture>
            {$sourceTag}
            {$imgTag}
        </picture>
    ";
},10, 15);

function filter_short_title( $title, $post_id ) {
    if (is_admin()) {
        return $title;
    }

    if (is_single()) {
        return $title;
    }

    if ($shortTitle = get_field('short_title', $post_id)) {
        return $shortTitle;
    }

    return $title;
}

add_filter( 'the_title', 'filter_short_title', 10, 2 );

if ( defined( 'AUTOMATIC_UPDATER_DISABLED' ) && AUTOMATIC_UPDATER_DISABLED ) {
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );
    remove_action( 'admin_init', '_maybe_update_core' );
}