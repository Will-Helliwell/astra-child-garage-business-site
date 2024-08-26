<?php
function garage_image_text_columns($atts)
{
    // Define the default attributes
    $atts = shortcode_atts(array(
        'order' => 'left', // 'left' or 'right'
        'subheading' => '',
        'text' => '',
        'button_text' => '',
        'button_url' => '',
        'image_url' => '',
    ), $atts, 'image_text_columns');

    // Sanitize and allow specific HTML tags
    $allowed_html = array(
        'strong' => array(),
        'b' => array(),
        'em' => array(),
        'i' => array(),
        'a' => array(
            'href' => array(),
            'title' => array(),
        ),
        'br' => array(),
    );
    $text_content = wp_kses($atts['text'], $allowed_html);
    $subheading_content = wp_kses($atts['subheading'], $allowed_html);

    // Determine the order of the columns
    $text_column = "
        <div class='w-full lg:w-1/2 p-36 flex flex-col justify-center items-start'>
            <h2 class='text-4xl font-semibold mb-4 font-poppins'>{$subheading_content}</h2>
            <p class='mb-5 text-xl font-mona leading-relaxed'>{$text_content}</p>";

    if (!empty($atts['button_text']) && !empty($atts['button_url'])) {
        $text_column .= "
            <a href='{$atts['button_url']}' class='cta-button py-2 px-9 font-mona'>
                {$atts['button_text']}
            </a>";
    }

    $text_column .= "</div>";

    $image_column = "
        <div class='w-full lg:w-1/2 p-36'>
            <img src='{$atts['image_url']}' alt='' class='w-full h-auto rounded-3xl ring-2 ring-image-ring-blue'>
        </div>";

    // Combine columns based on the order attribute
    if ($atts['order'] === 'left') {
        $content = "
        <div class='flex flex-col lg:flex-row'>
            $text_column
            $image_column
        </div>";
    } else {
        $content = "
        <div class='flex flex-col lg:flex-row'>
            $image_column
            $text_column
        </div>";
    }

    return $content;
}

// Register the shortcode with WordPress
add_shortcode('image_text_columns', 'garage_image_text_columns');
