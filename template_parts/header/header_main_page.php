<?php
switch ($pagename) {
    case 'services':
        $background_image_id = 54;
        $subtitle_line_one = 'Comprehensive Solutions for Your Needs in Los';
        $subtitle_line_two = 'Angeles, Orange County and Nationwide';
        break;
    case 'who-we-are':
        $background_image_id = 50;
        $subtitle_line_one = 'Discover The Story Behind Grand Slam Garage Sales';
        $subtitle_line_two = '';
        break;
    case 'how-it-works':
        $background_image_id = 55;
        $subtitle_line_one = 'Seamless and Efficient Processes Tailored for You';
        $subtitle_line_two = '';
        break;
    case 'get-in-touch':
        $background_image_id = 81;
        $subtitle_line_one = "We'd Love to Hear from You!";
        $subtitle_line_two = '';
        break;

    default:
        $background_image_id = 24;
        $subtitle_line_one = 'Discover The Story Behind Grand Slam Garage Sales';
        $subtitle_line_two = '';
        break;
}
?>

<div class="header-main-page w-full bg-cover bg-center bg-no-repeat p-6 text-white text-center h-[500px] relative overflow-hidden"
    style="background-image: url('<?php echo esc_url(wp_get_attachment_url($background_image_id)); ?>');">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-header-blue/100 via-header-blue/70 to-transparent z-0"></div>
    <div class="relative z-10">
        <?php get_template_part('template_parts/header/menu', 'content') ?>
        <div class="header-main-page-title-subtitle flex flex-col justify-center items-center mt-28">
            <h1 class="title text-5xl text-white font-bold mb-4"><?php the_title(); ?></h1>
            <h2 class="subtitle text-3xl text-white mb-4"><?php echo esc_html($subtitle_line_one); ?></h2>
            <h2 class="subtitle text-3xl text-white mb-4"><?php echo esc_html($subtitle_line_two); ?></h2>
        </div>
    </div>
</div>