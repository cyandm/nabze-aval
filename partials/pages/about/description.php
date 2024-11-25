<?php $description_img = get_field("description_img"); ?>


<div class="container grid grid-cols-2 items-center gap-10 max-lg:gap-4">

    <!-- Mobile Title -->
    <?php if (!empty(get_field('description_title'))): ?>
        <div class="col-span-2 text-h5 max-[1024px]:block min-[1024px]:hidden">
            <?php echo get_field('description_title') ?>
        </div>
    <?php endif; ?>

    <!-- Description Image -->
    <?php if (!empty($description_img)): ?>
        <div class="col-span-1 max-lg:col-span-2 aspect-video min-[1024px]:order-1 ">
            <?php echo wp_get_attachment_image($description_img, "full", false, ["class" => "rounded-3xl w-64 h-64 object-cover"]) ?>
        </div>
    <?php endif; ?>

    <!-- Description Texts -->
    <div class="col-span-1 max-lg:col-span-2 min-[1024px]:order-0">

        <!-- Title -->
        <?php if (!empty(get_field('description_title'))): ?>
            <div class="text-h2 max-[1023px]:hidden">
                <?php echo get_field('description_title') ?>
            </div>
        <?php endif; ?>

        <div class="py-2"></div>

        <!-- Txt -->
        <?php if (!empty(get_field('description_txt'))): ?>
            <div class="text-body_s leading-8">
                <?php echo get_field('description_txt') ?>
            </div>
        <?php endif; ?>
    </div>

</div>