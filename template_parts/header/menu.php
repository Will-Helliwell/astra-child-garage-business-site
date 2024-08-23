<div class="flex justify-center">
    <div class="header-main-page-top-row flex justify-between items-center w-full max-w-5xl px-4">
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
            <a href="#" class="header-homepage-button flex flex-col items-center justify-center w-40 bg-transparent border border-cta-pink text-white text-xxs tracking-widest py-1 px-2 rounded-lg">
                <p class="font-normal text-center w-full leading-tight">Call or Text</p>
                <p class="font-bold text-center w-full leading-tight">949-876-3355</p>
            </a>
            <a href="#" class="header-homepage-button flex items-center justify-center w-40 bg-cta-pink text-white text-lg font-semibold py-0 px-6 rounded-lg hover:bg-pink-600">
                Get In Touch
            </a>
        </div>
    </div>
</div>
