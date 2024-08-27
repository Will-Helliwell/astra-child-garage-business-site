<div class="footer-background bg-black">
    <div class="columns-container pt-10 px-20 pb-10 text-white">
        <div class="grid grid-cols-2 gap-0">
            <div class="flex flex-col justify-between">
                <a href="/" class="mb-4 underline">Home</a>
                <a href="/who-we-are" class="mb-4 underline">Who We Are</a>
                <a href="/services" class="mb-4 underline">Services</a>
                <a href="/how-it-works" class="mb-4 underline">How it Works</a>
                <a href="/faqs" class="mb-4 underline">FAQs</a>
                <a href="/get-in-touch" class="underline">Get in Touch</a>
            </div>
            <div class="grid grid-cols-[3fr_1fr] gap-0">
                <div></div>
                <div class="flex flex-col justify-between">
                    <p><b>Phone:</b> 949-876-3355</p>
                    <p><b>Email:</b> help@grandslamgaragesales.com</p>
                    <p><b>Business Hours:</b> Mon-Fri, 9am-6pm</p>
                </div>
            </div>
        </div>
    </div>
    <div class="social-icons-container flex justify-center pb-10">
        <?php
        set_query_var('social_icons_fill_color', 'black');
        set_query_var('social_icons_outer_color', 'white');
        get_template_part('template_parts/social_icons')
        ?>
    </div>
    <div class="border-t border-footer-text-grey w-full pb-10"></div>
    <div class="copyright-container text-center pb-10 text-footer-text-grey">
        <p>@2024 Grand Slam Garage Sales. All rights reserved.</p>
    </div>
</div>