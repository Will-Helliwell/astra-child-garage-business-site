<?php
/*
 * Template Name: Homepage
 * description: >-
  Page template for homepage
 */
?>

<?php get_header(); ?>

<div class="homepage-container flex flex-col items-center w-full">
    <!-- First Div: Header -->
        <?php get_template_part('template_parts/header/header_homepage', 'content'); ?>

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