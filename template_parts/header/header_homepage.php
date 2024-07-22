<div class="header-homepage bg-cover bg-center bg-no-repeat p-6 text-white text-center h-screen"
     style="background-image: url('<?php echo esc_url(wp_get_attachment_url(24)); ?>');">
    <div class="top-row flex justify-between items-center">
        <div class="site-logo flex-1">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url(); ?>" class="text-2xl font-bold"><?php bloginfo('name'); ?></a>
            <?php } ?>
        </div>
        <nav class="navigation-menu flex-2">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'flex space-x-4')); ?>
        </nav>
        <div class="header-homepage-buttons flex-1 flex justify-around">
            <a href="#" class="header-homepage-button bg-black text-white py-2 px-4 rounded hover:bg-gray-700">Button 1</a>
            <a href="#" class="header-homepage-button bg-black text-white py-2 px-4 rounded hover:bg-gray-700">Button 2</a>
        </div>
    </div>
    <div class="bottom-row mt-10">
        <h1 class="title text-4xl font-bold mb-4"><?php the_title(); ?></h1>
        <h2 class="subtitle text-2xl mb-4">Your Subtitle Here</h2>
        <a href="#" class="cta-button bg-black text-white py-2 px-4 rounded hover:bg-gray-700">Call to Action</a>
    </div>
</div>
