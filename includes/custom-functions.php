<?php

/**
 * This is file for all of your custom functions for the project
 */

/**
 * Enables the Link Manager that existed in WordPress until version 3.5.
 */
// add_filter('pre_option_link_manager_enabled', '__return_true');

function my_acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '../flatsome-child/acf-json';
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

function get_targets()
{
    global $post;
    $targets = [];

    if (is_home() || is_front_page()) {
        $targets[] = 'home';
    } elseif (is_singular(array('post'))) {
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
