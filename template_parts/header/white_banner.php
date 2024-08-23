<div class="flex justify-between w-[70%]">
    <div class="flex items-center space-x-4">
        <!-- Left Column: Icon -->
        <div class="icon w-12 h-12 flex justify-center items-center bg-gray-200 rounded-full">
            <!-- Replace with your SVG icon or font icon -->
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </div>

        <!-- Right Column: Text -->
        <div class="text">
            <p class="text-lg font-semibold">First Line of Text</p>
            <p class="text-sm text-gray-600">Second Line of Text</p>
        </div>
    </div>
    <?php get_template_part('template_parts/header/social_icons', 'content'); ?>
</div>