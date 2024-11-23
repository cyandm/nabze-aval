<div class="flex gap-3 w-full max-xl:flex-col container">
    <!-- Text content for mobile -->
    <div class="xl:hidden">
        <div anim-delay="0.5" class="p-4 rounded-2xl text-[#1E3A8A] space-y-4 bg-primary-100 fade-in-down">
            <div class="space-y-2">
                <div class="text-h2 md:text-[70px] font-extrabold">
                    <?php
                    $hero_title = get_field('hero_title');
                    if ($hero_title) {
                        echo $hero_title;
                    } else {
                        echo 'Hero Title Not Found';
                    }
                    ?>
                </div>

                <div class="text-h4 md:text-h2 text-[#666666]">
                    <?php
                    $hero_subtitle = get_field('hero_subtitle');
                    if ($hero_subtitle) {
                        echo $hero_subtitle;
                    } else {
                        echo 'Subtitle Not Found';
                    }
                    ?>
                </div>

                <div class="flex flex-row">
                    <div class="text-body_s md:text-h5 text-[#666666]">
                        <?php echo get_field('hero_desc') ?>
                    </div>

                    <div class="w-[82px] md:w-[200px] bg-no-repeat bg-contain"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-vector.png');">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero image -->
    <div class="w-full flex-1 h-full aspect-square bg-no-repeat bg-contain rounded-3xl overflow-hidden flex gap-3 p-4 items-end fade-in-down"
        anim-delay="0.7"
        style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('hero_banner'), 'full') ?>')">
    </div>

    <!-- Mobile buttons -->
    <div class="flex flex-row gap-2 lg:hidden">
        <a href="<?php echo get_field('hero_card_url_1') ?>" anim-delay="1.1"
            class="bg-[#1E3A8A] p-4 max-md:p-3 rounded-xl flex-1 fade-in-down flex flex-col justify-between">
            <div class="text-primary-100 text-h4 max-xl:text-h5 max-md:text-body_s">
                <?php echo get_field('hero_card_title_1') ?>
            </div>
            <div class="flex justify-end items-center py-2 px-3">
                <cyn-icon-button type="secondary"
                    class="rotate-0 border-primary-100 text-primary-100 hover:text-[#1E3A8A]" icon="#icon-Arrow-27">
                </cyn-icon-button>
            </div>
        </a>

        <div href="<?php echo get_field('hero_card_url_2') ?>" anim-delay="1.2"
            class="bg-[#1E3A8A] p-4 max-md:p-3 rounded-xl flex-1 fade-in-down flex flex-col justify-between">
            <div class="text-primary-100 text-h4 max-xl:text-h5 max-md:text-body_s">
                <?php echo get_field('hero_card_title_2') ?>
                <div class="text-caption">
                    <?php echo get_field('hero_card_sub_2') ?>
                </div>
            </div>

            <div class="flex justify-end items-center py-2 px-3">
                <div class="rounded-3xl bg-primary-100 flex items-center px-3 py-1 gap-2">
                    <a class="block text-[#1E3A8A] text-body_s"
                        href="<?php echo 'tel:' . get_option("cyn_special_number") ?>">
                        <?php echo get_option("cyn_special_number") ?>
                    </a>
                    <svg class="icon size-6">
                        <use href="#icon-Phone,-Call-11" />
                    </svg>
                </div>
            </div>

        </div>
    </div>

    <!-- Desktop content container -->
    <div class="flex-1 space-y-3">
        <!-- Desktop text content -->
        <div anim-delay="0.5" class="p-4 rounded-2xl text-[#1E3A8A] space-y-4 hidden xl:block fade-in-down">
            <div class="space-y-2">

                <div class="text-h2 md:text-[70px] font-extrabold">
                    <?php
                    $hero_title = get_field('hero_title');
                    if ($hero_title) {
                        echo $hero_title;
                    } else {
                        echo 'Hero Title Not Found'; 
                    }
                    ?>
                </div>

                <div class="text-h4 md:text-h2 text-[#666666]">
                    <?php
                    $hero_subtitle = get_field('hero_subtitle');
                    if ($hero_subtitle) {
                        echo $hero_subtitle;
                    } else {
                        echo 'Subtitle Not Found';
                    }
                    ?>
                </div>

                <div class="flex flex-row">
                    <div class="text-body_s md:text-h5 text-[#666666]">
                        <?php echo get_field('hero_desc') ?>
                    </div>

                    <div class="w-[200px] bg-no-repeat bg-contain"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-vector.png');">
                    </div>
                </div>

            </div>
        </div>

        <!-- Desktop buttons -->
        <div class="flex flex-row gap-3 max-lg:hidden">
            <a href="<?php echo get_field('hero_card_url_1') ?>" anim-delay="1.1"
                class="bg-[#1E3A8A] p-4 max-md:p-3 rounded-xl flex-1 fade-in-down flex flex-col justify-between">
                <div class="text-primary-100 text-h4 max-xl:text-h5 max-md:text-body_s">
                    <?php echo get_field('hero_card_title_1') ?>
                </div>
                <div class="flex justify-end items-center py-2 px-3">
                    <cyn-icon-button type="secondary"
                        class="rotate-0 border-primary-100 text-primary-100 hover:text-[#1E3A8A]" icon="#icon-Arrow-27">
                    </cyn-icon-button>
                </div>
            </a>

            <div href="<?php echo get_field('hero_card_url_2') ?>" anim-delay="1.2"
                class="bg-[#1E3A8A] p-4 max-md:p-3 rounded-xl flex-1 fade-in-down flex flex-col justify-between">
                <div class="text-primary-100 text-h4 max-xl:text-h5 max-md:text-body_s">
                    <?php echo get_field('hero_card_title_2') ?>
                    <div class="text-caption">
                        <?php echo get_field('hero_card_sub_2') ?>
                    </div>
                </div>

                <div class="flex justify-end items-center py-2 px-3">
                    <div class="rounded-3xl bg-primary-100 flex items-center px-3 py-1 gap-2">
                        <a class="block text-[#1E3A8A] text-body_s"
                            href="<?php echo 'tel:' . get_option("cyn_special_number") ?>">
                            <?php echo get_option("cyn_special_number") ?>
                        </a>
                        <svg class="icon size-6">
                            <use href="#icon-Phone,-Call-11" />
                        </svg>
                    </div>
                </div>

            </div>

        </div>

        <!-- Desktop Numbers -->
        <div class="bg-primary-100 rounded-3xl p-4 grid gap-5">
            <p class="text-[#1E3A8A] text-h5">
                <?php _e('خدمات رسانی در سراسر تهران', 'cyn-dm') ?>
            </p>

            <div class="flex gap-4 justify-around max-md:flex-wrap max-md:grid max-md:grid-cols-2">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <?php
                    $location_title = get_option("cyn_phone_number_title_$i");
                    $phone_number = get_option("cyn_phone_number_$i");

                    if (!empty($location_title) || !empty($phone_number)):
                        ?>
                        <div class="grid gap-2 text-primary-100 text-body_s">
                            <?php if (!empty($location_title)): ?>
                                <div class="text-[#334155] text-[14px]"><?php echo esc_html($location_title); ?></div>
                            <?php endif; ?>

                            <?php if (!empty($phone_number)): ?>
                                <cyn-button class="justify-center" href="tel:<?php echo esc_attr($phone_number); ?>" class="text-[#D8DADF]">
                                    <?php echo esc_html($phone_number); ?>
                                </cyn-button>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>

</div>