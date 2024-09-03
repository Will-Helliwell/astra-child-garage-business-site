<div class="bg-black flex flex-col items-center h-full p-36">
    <h2 class="text-center text-white text-4xl font-semibold font-poppins mb-8">Our Services</h2>
        <div class="grid grid-rows-2 grid-cols-3 gap-4 mb-8">
            <!-- Top row: single image spanning all columns -->
            <div class="row-span-1 col-span-3 flex items-center text-center">
                <img src="<?php echo esc_url(wp_get_attachment_url(102)); ?>" alt="Top Image" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue">
            </div>
            <!-- Bottom row: three images -->
            <div class="row-span-1 flex items-center text-center">
                <img src="<?php echo esc_url(wp_get_attachment_url(103)); ?>" alt="Image 1" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue ">
            </div>
            <div class="row-span-1 flex items-center text-center">
                <img src="<?php echo esc_url(wp_get_attachment_url(103)); ?>" alt="Image 2" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue ">
            </div>
            <div class="row-span-1 flex items-center text-center">
                <img src="<?php echo esc_url(wp_get_attachment_url(103)); ?>" alt="Image 3" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue ">
            </div>
        </div>
    <a href="/services" class="cta-button px-6 py-2 underline">
        View Services
    </a>
</div>
