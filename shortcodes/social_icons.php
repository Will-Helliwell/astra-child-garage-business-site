<?php

/**
 * Shortcode to display custom social icons
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output of the social icons.
 */
function astra_garage_social_icons($atts)
{
    ob_start();
    get_template_part('template_parts/header/social_icons', 'content');
    return ob_get_clean();
}
add_shortcode('social_icons_garage_custom', 'astra_garage_social_icons');
