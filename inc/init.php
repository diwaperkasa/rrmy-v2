<?php
/**
 * Helper functions
 */
require get_template_directory() . '/inc/helpers/helpers-frontend.php';
require get_template_directory() . '/inc/helpers/helpers-shortcode.php';
require get_template_directory() . '/inc/helpers/helpers-grid.php';
require get_template_directory() . '/inc/helpers/helpers-icons.php';

/**
 * Flatsome Shortcodes.
 */

require get_template_directory() . '/inc/shortcodes/row.php';
require get_template_directory() . '/inc/shortcodes/text_box.php';
require get_template_directory() . '/inc/shortcodes/sections.php';
require get_template_directory() . '/inc/shortcodes/ux_slider.php';
require get_template_directory() . '/inc/shortcodes/ux_banner.php';
require get_template_directory() . '/inc/shortcodes/ux_banner_grid.php';
require get_template_directory() . '/inc/shortcodes/accordion.php';
require get_template_directory() . '/inc/shortcodes/tabs.php';
require get_template_directory() . '/inc/shortcodes/gap.php';
require get_template_directory() . '/inc/shortcodes/featured_box.php';
require get_template_directory() . '/inc/shortcodes/ux_sidebar.php';
require get_template_directory() . '/inc/shortcodes/buttons.php';
require get_template_directory() . '/inc/shortcodes/share_follow.php';
require get_template_directory() . '/inc/shortcodes/elements.php';
require get_template_directory() . '/inc/shortcodes/titles_dividers.php';
require get_template_directory() . '/inc/shortcodes/lightbox.php';
require get_template_directory() . '/inc/shortcodes/blog_posts.php';
require get_template_directory() . '/inc/shortcodes/google_maps.php';
require get_template_directory() . '/inc/shortcodes/testimonials.php';
require get_template_directory() . '/inc/shortcodes/team_members.php';
require get_template_directory() . '/inc/shortcodes/messages.php';
require get_template_directory() . '/inc/shortcodes/search.php';
require get_template_directory() . '/inc/shortcodes/ux_logo.php';
require get_template_directory() . '/inc/shortcodes/ux_image.php';
require get_template_directory() . '/inc/shortcodes/ux_image_box.php';
require get_template_directory() . '/inc/shortcodes/price_table.php';
require get_template_directory() . '/inc/shortcodes/scroll_to.php';
require get_template_directory() . '/inc/shortcodes/ux_pages.php';
require get_template_directory() . '/inc/shortcodes/ux_gallery.php';
require get_template_directory() . '/inc/shortcodes/ux_hotspot.php';
require get_template_directory() . '/inc/shortcodes/item_list.php';
require get_template_directory() . '/inc/shortcodes/page_header.php';
require get_template_directory() . '/inc/shortcodes/ux_instagram_feed.php';
require get_template_directory() . '/inc/shortcodes/ux_countdown/ux-countdown.php';
require get_template_directory() . '/inc/shortcodes/ux_video.php';
require get_template_directory() . '/inc/shortcodes/ux_nav.php';
require get_template_directory() . '/inc/shortcodes/ux_payment_icons.php';

if (is_admin()) {
    require get_template_directory() . '/inc/extensions/flatsome-shortcode-insert/tinymce.php';
}

/**
 * UX Builder
 */
require get_template_directory() . '/inc/builder/builder.php';