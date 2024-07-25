<?php
/*
 * Template Name: main page
 * description: >-
  Page template for all major pages on the site (apart from homepage)
 */
?>

<?php get_header(); ?>

<div class="flex flex-col items-center w-full">
    <!-- First Div: Header -->
    <div class="w-full">
        <?php get_template_part('template_parts/header/header_main_page', 'content'); ?>
    </div>

    <!-- Second Div: Page Content -->
    <div class="w-full mt-6">
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