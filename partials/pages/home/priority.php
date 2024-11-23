<!-- Desktop -->
<div class="relative hidden lg:block">

    <div class="absolute w-full h-full rotate-[1deg] inset-0 bg-no-repeat bg-cover bg-center "
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/services-vector.png');">
    </div>

    <div class="relative flex flex-wrap justify-around gap-6 bg-primary-100 bg-opacity-90 py-4 px-5">
        <?php for ($i = 1; $i <= 7; $i++): ?>
            <?php if (get_field("advantage_title_$i")): ?>
                <div class="flex-none transition-all duration-300">
                    <div class="flex flex-row items-center gap-1 rounded-full cursor-pointer px-5 py-2 hover:text-primary-100 hover:bg-gradient-to-t hover:from-[#1E3A8A] hover:to-[#2C55C9] hover:shadow-md hover:shadow-slate-400/50">
                        <?php if ($svg = get_field("advantage_svg_$i")): ?>
                            <div class="priority-icon shrink-0">
                                <img src="<?php echo wp_get_attachment_image_url($svg, 'full', false) ?>"
                                    alt="<?php echo esc_attr($svg['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <p class="text-body_s whitespace-nowrap group-hover:text-primary-100"><?php echo get_field("advantage_title_$i"); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>

<!-- Mobile  -->
<div class="relative lg:hidden">

    <div class="absolute w-full h-full rotate-[1deg] inset-0 bg-no-repeat bg-cover bg-center "
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/services-vector.png');">
    </div>

    <div class="relative py-4 px-5 bg-primary-100 ">
        <swiper-container space-between="12" slides-per-view="auto">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <?php if (get_field("advantage_title_$i")): ?>
                    <swiper-slide class="!w-auto">
                        <div
                            class="rounded-full flex gap-1 transition-all duration-300 cursor-pointer px-5 py-2 text-primary-100 bg-gradient-to-t from-[#1E3A8A] to-[#2C55C9] shadow-md shadow-slate-400/50 hover:from-primary-20 hover:to-primary-20 ">
                            <div class="flex flex-row items-center gap-2 whitespace-nowrap">
                                <?php if ($svg = get_field("advantage_svg_$i")): ?>
                                    <div class="priority-icon shrink-0">
                                        <img src="<?php echo wp_get_attachment_image_url($svg, 'full', false) ?>"
                                            alt="<?php echo esc_attr($svg['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                                <p class="text-body_s"><?php echo get_field("advantage_title_$i"); ?></p>
                            </div>
                        </div>
                    </swiper-slide>
                <?php endif; ?>
            <?php endfor; ?>
        </swiper-container>
    </div>

</div>