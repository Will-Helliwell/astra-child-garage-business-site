<?php

/**
 * Shortcode to display footer
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output of the social icons.
 */
function return_astra_garage_footer($atts)
{
    ob_start();
    get_template_part('template_parts/footer', 'content');
    return ob_get_clean();
}
add_shortcode('garage_footer', 'return_astra_garage_footer');
