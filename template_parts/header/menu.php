<div class="flex justify-center">
    <div class="header-main-page-top-row flex justify-between items-center w-full max-w-6xl px-4">
        <div class="site-logo flex">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url(); ?>" class="text-2xl font-bold"><?php bloginfo('name'); ?></a>
            <?php } ?>
        </div>
        <nav class="menu-primary-custom flex flex-1 justify-center">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'flex space-x-8 text-xl font-normal')); ?>
        </nav>
        <div class="header-homepage-buttons flex space-x-4">
            <a href="#" class="header-homepage-button flex items-center justify-center w-36 bg-transparent border border-pink-500 text-pink-500 py-2 px-8 rounded text-xs">
                First Line<br>Second Line
            </a>
            <a href="#" class="header-homepage-button flex items-center justify-center w-36 bg-pink-500 text-white py-2 px-8 rounded hover:bg-pink-600">
                Button 2
            </a>
        </div>
    </div>
</div>
