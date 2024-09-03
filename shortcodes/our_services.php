<?php

/**
 * Shortcode to display our services section
 *
 * @return string HTML output of the social icons.
 */
function display_our_services_section()
{   
    ob_start();
    get_template_part('template_parts/our_services_section', 'content');
    return ob_get_clean();
}
add_shortcode('our_services_section', 'display_our_services_section');