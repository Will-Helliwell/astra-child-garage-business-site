<?php

/**
 * Shortcode to display custom social icons
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output of the social icons.
 */
function astra_garage_social_icons($atts)
{   
    $atts = shortcode_atts(array(
        'social_icons_fill_color' => 'white',
        'social_icons_outer_color' => 'black',
    ), $atts, 'social_icons_garage_custom');

    $social_icons_fill_color = $atts['social_icons_fill_color'];
    $social_icons_outer_color = $atts['social_icons_outer_color'];

    // Set variables for the template part
    set_query_var('social_icons_fill_color', $social_icons_fill_color);
    set_query_var('social_icons_outer_color', $social_icons_outer_color);

    get_template_part('template_parts/social_icons', 'content');
}
add_shortcode('social_icons_garage_custom', 'astra_garage_social_icons');
