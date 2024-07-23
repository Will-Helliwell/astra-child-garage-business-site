<div class="header-homepage bg-cover bg-center bg-no-repeat p-6 text-white text-center h-screen"
     style="background-image: url('<?php echo esc_url(wp_get_attachment_url(24)); ?>');">
    <?php get_template_part('template_parts/header/menu', 'content') ?>
    <div class="bottom-row mt-10">
        <h1 class="title text-4xl font-bold mb-4"><?php the_title(); ?></h1>
        <h2 class="subtitle text-2xl mb-4">Your Subtitle Here</h2>
        <a href="#" class="cta-button bg-black text-white py-2 px-4 rounded hover:bg-gray-700">Call to Action</a>
    </div>
</div>
