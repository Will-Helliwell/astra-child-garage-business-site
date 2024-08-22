<?php
switch ($pagename) {
    case 'Services':
        $background_image_id = 1;
        $subtitle_text = 'xxx';
        break;
    case 'who-we-are':
        $background_image_id = 50;
        $subtitle_text = 'Discover The Story Behind Grand Slam Garage Sales';
        break;

    default:
        $background_image_id = 24;
        $subtitle_text = 'Discover The Story Behind Grand Slam Garage Sales';
        break;
}
?>

<div class="header-main-page w-full bg-cover bg-center bg-no-repeat p-6 text-white text-center h-screen"
     style="background-image: url('<?php echo esc_url(wp_get_attachment_url(24)); ?>');">
    <?php get_template_part('template_parts/header/menu', 'content')
    ?>
    <div class="header-main-page-title-subtitle flex flex-col justify-center items-center mt-10">
        <h1 class="title text-4xl font-bold mb-4"><?php the_title();
                                                    ?></h1>
        <h2 class="subtitle text-2xl mb-4"><?php echo esc_html($subtitle_text);
                                            ?></h2>
    </div>
</div>

