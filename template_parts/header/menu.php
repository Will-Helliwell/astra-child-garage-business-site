<div class="top-row flex justify-between items-center">
    <div class="site-logo flex-1">
        <?php if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <a href="<?php echo home_url(); ?>" class="text-2xl font-bold"><?php bloginfo('name'); ?></a>
        <?php } ?>
    </div>
    <nav class="menu-primary-custom flex-2">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'flex space-x-4')); ?>
    </nav>
    <div class="header-homepage-buttons flex-2 flex justify-around">
        <a href="#" class="header-homepage-button bg-black text-white py-2 px-4 rounded hover:bg-gray-700">Button 1</a>
        <a href="#" class="header-homepage-button bg-black text-white py-2 px-4 rounded hover:bg-gray-700">Button 2</a>
    </div>
</div>