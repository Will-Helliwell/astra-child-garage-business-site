<div class="bg-black">
    <div class="pb-10">
        <p>section 1</p>
    </div>
    <div class="flex justify-center pb-10">
        <?php
        set_query_var('social_icons_fill_color', 'black');
        set_query_var('social_icons_outer_color', 'white');
        get_template_part('template_parts/social_icons')
        ?>
    </div>
    <div class="border-t border-footer-text-grey w-full pb-10"></div>
    <div class="text-center pb-10 text-footer-text-grey">
        <p>@2024 Grand Slam Garage Sales. All rights reserved.</p>
    </div>
</div>