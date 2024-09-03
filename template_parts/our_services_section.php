<div class="bg-black flex flex-col items-center h-full p-36">
    <h2 class="text-center text-white text-5xl font-bold font-poppins mb-16">Our Services</h2>
    <div class="grid grid-rows-2 grid-cols-3 gap-4 mb-16">
        <!-- Top row: single image spanning all columns -->
        <div class="row-span-1 col-span-3 flex items-center text-center relative">
            <img src="<?php echo esc_url(wp_get_attachment_url(102)); ?>" alt="Top Image" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue">
            <div class="absolute bottom-0 left-0 w-full h-1/5 bg-white flex justify-center items-center rounded-b-3xl p-3">
                <span class="text-black text-3xl font-bold">Garage Sales & Estate Sales</span>
            </div>
        </div>
        <!-- Bottom row: three images -->
        <div class="row-span-1 flex items-center text-center relative">
            <img src="<?php echo esc_url(wp_get_attachment_url(103)); ?>" alt="Image 1" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue">
            <div class="absolute bottom-0 left-0 w-full h-1/5 bg-white flex justify-center items-center rounded-b-3xl p-3">
                <span class="text-black text-3xl font-bold">House and Storage Cleanouts</span>
            </div>
        </div>
        <div class="row-span-1 flex items-center text-center relative">
            <img src="<?php echo esc_url(wp_get_attachment_url(103)); ?>" alt="Image 2" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue">
            <div class="absolute bottom-0 left-0 w-full h-1/5 bg-white flex justify-center items-center rounded-b-3xl p-3">
                <span class="text-black text-3xl font-bold">Moving Assistance</span>
            </div>
        </div>
        <div class="row-span-1 flex items-center text-center relative">
            <img src="<?php echo esc_url(wp_get_attachment_url(103)); ?>" alt="Image 3" class="w-full h-full object-cover rounded-3xl ring-2 ring-image-ring-blue">
            <div class="absolute bottom-0 left-0 w-full h-1/5 bg-white flex justify-center items-center rounded-b-3xl p-3">
                <span class="text-black text-3xl font-bold">Pressure Washing</span>
            </div>
        </div>
    </div>
    <a href="/services" class="cta-button px-16 py-6 underline text-2xl">
        View Services
    </a>
</div>
