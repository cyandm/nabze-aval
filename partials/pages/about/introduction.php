<?php $introduction_img = get_field("introduction_img"); ?>

<div class="container grid grid-cols-2 items-center gap-10 max-lg:gap-4">

    <div class="text-h1 max-lg:text-h3 pt-3"><?php _e('درباره ما', 'cyn-dm') ?></div>

    <div class="pb-7"></div>

    <!-- Mobile Title -->
    <?php if (!empty(get_field('introduction_title'))): ?>
        <div class="col-span-2 text-h5 max-[1024px]:block min-[1024px]:hidden">
            <?php echo get_field('introduction_title') ?>
        </div>
    <?php endif; ?>

    <!-- Introduction Image -->
    <?php if (!empty($introduction_img)): ?>
        <div class="col-span-1 max-lg:col-span-2 aspect-video">
            <?php echo wp_get_attachment_image($introduction_img, "full", false, ["class" => "rounded-3xl w-64 h-64 object-cover"]) ?>
        </div>
    <?php endif; ?>

    <!-- Introduction Texts -->
    <div class="col-span-1 max-lg:col-span-2">

        <!-- Title -->
        <?php if (!empty(get_field('introduction_title'))): ?>
            <div class="text-h2 max-[1023px]:hidden">
                <?php echo get_field('introduction_title') ?>
            </div>
        <?php endif; ?>

        <div class="py-2"></div>

        <!-- Txt -->
        <?php if (!empty(get_field('introduction_txt'))): ?>
            <div class="text-body_s leading-8 block">
                <?php echo get_field('introduction_txt') ?>
            </div>
        <?php endif; ?>
    </div>
</div>