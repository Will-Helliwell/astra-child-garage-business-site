<?php
/*
 * Template Name: Tailwind Test
 * description: >-
  Page template for testing tailwind
 */
?>

<?php get_header(); ?>

<div class="bg-blue-500 text-white p-4">
    <h1 class="text-3xl">Hello, Tailwind!</h1>
</div>
<div class="custom-page-content">
    <!-- Insert shortcode here -->
    <?php echo do_shortcode('[testimonial_slider]'); ?>
</div>

<?php get_footer(); ?>