<div class="container">
    <div class="text-h5 md:text-[40px]">
        <?php _e('در چند قدم ساده', 'nabz-aval'); ?>
    </div>

    <div class="py-4"></div>

    <div class="flex flex-col md:flex-row md:flex-wrap lg:flex-nowrap justify-center items-stretch gap-5">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div
                class="w-full md:w-[calc(50%-12px)] lg:w-1/4 bg-primary-100 rounded-lg p-5 border border-[#E2E8F0] flex flex-row md:flex-col justify-start items-center gap-4">
                <?php if ($svg = get_field("step_svg_{$i}")): ?>
                    <div class="bg-[#1E3A8A] rounded-full p-2 w-14 h-14 flex items-center justify-center shrink-0">
                        <img class=" object-contain" src="<?php echo wp_get_attachment_image_url($svg, 'full', false); ?>"
                            alt="<?php echo esc_attr($svg['alt']); ?>">
                    </div>
                <?php endif; ?>

                <div class="bg-[#F3F4F6] p-5 w-full rounded-xl">
                    <?php if ($title = get_field("step_title_{$i}")): ?>
                        <div class="text-[#1E293B] text-h6 text-center"><?php echo esc_html($title); ?></div>
                    <?php endif; ?>

                    <div class="py-2"></div>

                    <?php if ($desc = get_field("step_desc_{$i}")): ?>
                        <div class="text-[#6A6F81] text-[14px]"><?php echo esc_html($desc); ?></div>
                    <?php endif; ?>
                </div>

            </div>
        <?php endfor; ?>
    </div>
</div>