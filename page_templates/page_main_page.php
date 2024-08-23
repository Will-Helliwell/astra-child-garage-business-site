<?php
/*
 * Template Name: main page
 * description: >-
  Page template for all major pages on the site (apart from homepage)
 */
?>

<?php get_header(); ?>

<div class="main-page-container flex flex-col items-center w-full">
    <!-- First Div: Header -->
    <?php get_template_part('template_parts/header/white_banner', 'content'); ?>
    <?php get_template_part('template_parts/header/header_main_page', 'content'); ?>
    <!-- Second Div: Page Content -->
    <div class="main-page-content-container w-full">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>