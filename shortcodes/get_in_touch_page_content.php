<?php

/**
 * Shortcode to display all content for get in touch page
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output of the social icons.
 */
function return_get_in_touch_page_content($atts)
{
    ob_start();
?>
    <p>shortcode working</p>
    <?php echo do_shortcode('[ninja_form id=2]'); ?>
<?php
    return ob_get_clean();
}
add_shortcode('get_in_touch_page_content', 'return_get_in_touch_page_content');
