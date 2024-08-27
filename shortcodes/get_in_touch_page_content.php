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
    <div class="contact-page-outer-wrapper md:grid md:grid-cols-[3fr_2fr] md:gap-0">
        <div class="left-column-wrapper p-4 md:p-28">
            <h1 class="text-3xl font-bold mb-5">Let's Get in Touch</h1>
            <p class="mb-5">Ready to get started? Schedule a free consultation to discuss your needs and how we can help. Fill out the form below, and one of our team members will get back to you shortly.</p>
            <p>Shoot us an email</p>
            <p class="mb-5">Call or text at (949) 876-3355</p>
            <div class="contact-form-container">
                <?php echo do_shortcode('[ninja_form id=2]'); ?>
            </div>
        </div>
        <div class="hidden md:block bg-gray-200">
            <p>second column</p>
        </div>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('get_in_touch_page_content', 'return_get_in_touch_page_content');
