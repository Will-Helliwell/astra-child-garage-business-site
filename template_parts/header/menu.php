<div class="flex justify-center">
    <div class="header-main-page-top-row flex justify-between items-center w-full max-w-5xl px-4">
        <!-- Site Logo: Always visible -->
        <div class="site-logo flex">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url(); ?>" class="text-2xl font-bold"><?php bloginfo('name'); ?></a>
            <?php } ?>
        </div>
        <!-- Menu for Desktop -->
        <nav class="menu-primary-custom hidden md:flex flex-1 justify-center">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'flex space-x-8 text-xl font-normal')); ?>
        </nav>
        <!-- Buttons for Desktop -->
        <div class="header-homepage-buttons hidden md:flex space-x-4">
            <a href="#" class="header-homepage-button flex flex-col items-center justify-center w-40 bg-transparent border border-cta-pink text-white text-xxs tracking-widest py-1 px-2 rounded-lg">
                <p class="font-normal text-center w-full leading-tight">Call or Text</p>
                <p class="font-bold text-center w-full leading-tight">949-876-3355</p>
            </a>
            <a href="/get-in-touch" class="cta-button py-0 px-6 flex items-center justify-center">
                Get In Touch
            </a>
        </div>
        <!-- Burger Icon for Mobile -->
        <button id="burger-icon" class="md:hidden flex items-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <!-- Dropdown Menu for Mobile -->
        <div id="mobile-menu" class="fixed inset-0 bg-black text-white transform -translate-y-full transition-transform duration-300 z-50 md:hidden">
            <div class="flex flex-col items-center py-4 relative">
                <!-- Close Button -->
                <button id="close-menu" class="absolute top-4 right-4 text-white">
                    <!-- Close Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <!-- Menu Items -->
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'flex flex-col space-y-4 text-xl font-normal')); ?>
            </div>
        </div>
    </div>
</div>

<script>
    // mobile menu pop-up
    document.addEventListener('DOMContentLoaded', function() {
        const burgerIcon = document.getElementById('burger-icon');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');

        burgerIcon.addEventListener('click', function() {
            mobileMenu.classList.remove('-translate-y-full');
            mobileMenu.classList.add('translate-y-0');
        });

        closeMenu.addEventListener('click', function() {
            mobileMenu.classList.add('-translate-y-full');
            mobileMenu.classList.remove('translate-y-0');
        });
    });
</script>