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

    // Determine the order of the columns
    $text_column = "
        <div class='w-full lg:w-1/2 p-6'>
            <h2 class='text-2xl font-semibold mb-4'>{$atts['subheading']}</h2>
            <p class='mb-4'>{$atts['text']}</p>";

    if (!empty($atts['button_text']) && !empty($atts['button_url'])) {
        $text_column .= "
            <a href='{$atts['button_url']}' class='inline-block bg-blue-500 text-white py-2 px-4 rounded'>
                {$atts['button_text']}
            </a>";
    }

    $text_column .= "</div>";

    $image_column = "
        <div class='w-full lg:w-1/2 p-6'>
            <img src='{$atts['image_url']}' alt='' class='w-full h-auto'>
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
