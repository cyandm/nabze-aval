<?php get_header() ?>

<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<!-- Service Main -->
<main class="px-4 lg:container">

    <section>

        <!-- Hero -->
        <div class="lg:container grid grid-cols-3 gap-11">

            <?php if (get_field('hero_title') || get_field('hero_sub_title') || get_field('hero_btn_txt') && get_field('hero_btn_url')): ?>
                <div class="col-span-3 md:col-span-2  flex flex-col justify-center gap-11 w">

                    <div class="flex flex-col gap-2">
                        <div class="text-[#1E3A8A] text-h2 md:text-[72px]">
                            <p><?php echo get_field('hero_title'); ?></p>
                        </div>

                        <div class="text-[#666666] text-[18px] md:text-h5">
                            <p><?php echo get_field('hero_sub_title'); ?></p>
                        </div>
                    </div>

                    <div class="hidden md:flex justify-end ">
                        <cyn-button href="<?php echo get_field('hero_btn_url'); ?>" type="primary" icon-position="left"
                            icon="#icon-Cursor,-Click,-Select">
                            <?php echo get_field('hero_btn_txt') ?>
                        </cyn-button>
                    </div>

                </div>
            <?php endif; ?>

            <?php if (get_field('hero_img')): ?>
                <div class="col-span-3 md:col-span-1 w-full h-full object-cover max-md:flex max-md:justify-center">
                    <?php echo wp_get_attachment_image(get_field('hero_img'), 'full', false, ['class' => 'rounded-3xl']); ?>
                </div>
            <?php endif; ?>

            <div class="col-span-3 md:hidden">
                <cyn-button class="justify-center" href="<?php echo get_field('hero_btn_url'); ?>" type="primary"
                    icon-position="left" icon="#icon-Cursor,-Click,-Select">
                    <?php echo get_field('hero_btn_txt') ?>
                </cyn-button>
            </div>
        </div>

        <div class="py-9"></div>

        <!--Desktop Section 1 -->
        <div class="hidden md:block">
            <?php if (get_field('section_1_img') || get_field('section_1_title') || get_field('section_1_txt')): ?>
                <div class="grid grid-cols-3 gap-11 items-center">

                    <div class="col-span-3 md:col-span-2 flex flex-col justify-center gap-6">
                        <p class="text-h5 md:text-h2 text-[#1E293B]"><?php echo get_field('section_1_title'); ?></p>
                        <p class="text-[14px] md:text-body_s leading-7 text-[#475569]">
                            <?php echo get_field('section_1_txt'); ?>
                        </p>
                    </div>

                    <div class="col-span-3 md:col-span-1 max-md:order-1">
                        <?php echo wp_get_attachment_image(get_field('section_1_img'), 'full', false, ['class' => ' rounded-[20px]']); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="py-3"></div>

            <?php if (get_field('section_2_img') || get_field('section_2_title') || get_field('section_2_txt')): ?>
                <div class="grid grid-cols-3 gap-11">
                    <div class="col-span-3 md:col-span-1">
                        <?php echo wp_get_attachment_image(get_field('section_2_img'), 'full', false, ['class' => ' rounded-[20px]']); ?>
                    </div>

                    <div class="col-span-3 md:col-span-2 flex flex-col justify-center gap-6">
                        <p class="text-h5 md:text-h2 text-[#1E293B]"><?php echo get_field('section_2_title'); ?></p>
                        <p class="text-[14px] md:text-body_s leading-7 text-[#475569]">
                            <?php echo get_field('section_2_txt'); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!--Mobile Section 1 -->
        <div class="md:hidden">
            <?php if (get_field('section_1_img') || get_field('section_1_title') || get_field('section_1_txt')): ?>
                <div class="grid grid-cols-3 gap-11 py-11 max-md:grid-cols-1 max-md:flex max-md:flex-col">
                    <!-- Title -->
                    <div class="col-span-3 md:col-span-2 order-1 md:order-none">
                        <p class="text-h5 md:text-h2 text-[#1E293B]"><?php echo get_field('section_1_title'); ?></p>
                    </div>

                    <!-- Image -->
                    <div class="col-span-3 md:col-span-1 order-2 md:order-none">
                        <?php echo wp_get_attachment_image(get_field('section_1_img'), 'full', false, ['class' => 'rounded-[20px]']); ?>
                    </div>

                    <!-- Text -->
                    <div class="col-span-3 md:col-span-2 order-3 md:order-none">
                        <p class="text-[14px] md:text-body_s leading-8 text-[#475569]">
                            <?php echo get_field('section_1_txt'); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_field('section_2_img') || get_field('section_2_title') || get_field('section_2_txt')): ?>
                <div class="grid grid-cols-3 gap-11 py-11 max-md:grid-cols-1 max-md:flex max-md:flex-col">
                    <!-- Title -->
                    <div class="col-span-3 md:col-span-2 order-1 md:order-none">
                        <p class="text-h5 md:text-h2 text-[#1E293B]"><?php echo get_field('section_2_title'); ?></p>
                    </div>

                    <!-- Image -->
                    <div class="col-span-3 md:col-span-1 order-2 md:order-none">
                        <?php echo wp_get_attachment_image(get_field('section_2_img'), 'full', false, ['class' => 'rounded-[20px]']); ?>
                    </div>

                    <!-- Text -->
                    <div class="col-span-3 md:col-span-2 order-3 md:order-none">
                        <p class="text-[14px] md:text-body_s leading-8 text-[#475569]">
                            <?php echo get_field('section_2_txt'); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="py-8"></div>

        <!-- Numbers -->
        <div class="bg-primary-100 rounded-[20px] p-5 flex flex-col gap-7">

            <div class="flex flex-col gap-2">
                <div class="text-[#1E293B] text-h5 md:text-h2">
                    <?php _e('همه جا با شما', 'nabz-aval') ?>
                </div>

                <div class="text-[#475569] text-body_s md:text-h6">
                    <?php _e('خدمات رسانی در تمام مناطق تهران و کرج', 'nabz-aval') ?>
                </div>

            </div>

            <div>
                <div class="flex gap-4 justify-between max-md:flex-wrap max-md:grid max-md:grid-cols-2">
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
                                    <cyn-button class="justify-center" href="tel:<?php echo esc_attr($phone_number); ?>"
                                        class="text-[#D8DADF]">
                                        <?php echo esc_html($phone_number); ?>
                                    </cyn-button>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="py-8"></div>

        <!-- Banner -->
        <?php if (get_field('department_banner')): ?>
            <div>
                <a href="<?php echo get_field('department_banner_url'); ?>" class="block">
                    <img class="w-full rounded-[20px] object-cover"
                        src="<?php echo wp_get_attachment_image_url(get_field('department_banner'), 'full'); ?>" alt="">
                </a>
            </div>
        <?php endif; ?>

        <div class="py-8"></div>

        <!-- Section 2 -->
        <div class="grid grid-cols-5 gap-4 items-center">

            <div class="col-span-5 lg:col-span-3 flex flex-col gap-4">

                <!-- Title -->
                <?php if (get_field('section_3_title')): ?>
                    <div>
                        <p class="text-h5 md:text-h2 text-[#3C3F49] ">
                            <?php echo get_field('section_3_title'); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <!-- Desktop Text -->
                <?php if (get_field('section_3_txt')): ?>
                    <div class="max-lg:hidden">
                        <p class="text-body_s text-[#6A6F81] leading-[34px]">
                            <?php echo get_field('section_3_txt'); ?>
                        </p>
                    </div>
                <?php endif; ?>

            </div>

            <?php if (get_field('slideshow_group')): ?>
                <div class="col-span-5 lg:col-span-2">
                    <div class="grid grid-cols-2 gap-4">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <?php if (get_field("slideshow_group")["section_2_img_$i"]): ?>
                                <div>
                                    <img class="w-full rounded-[20px] object-cover"
                                        src="<?php echo wp_get_attachment_image_url(get_field("slideshow_group")["section_2_img_$i"], 'full'); ?>"
                                        alt="">
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Mobile Text -->
            <?php if (get_field('section_3_txt')): ?>
                <div class="col-span-5 lg:hidden">
                    <p class="text-body_s text-[#6A6F81] leading-[34px]">
                        <?php echo get_field('section_3_txt'); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <div class="py-5"></div>

        <!-- Section 3 -->
        <div>
            <div class="grid grid-cols-5 gap-8 items-center">
                <div class="col-span-5 lg:col-span-3 flex flex-col gap-4">
                    <!-- Title -->
                    <?php if (get_field('section_4_title')): ?>
                        <div>
                            <p class="text-h5 md:text-h2 text-[#3C3F49]">
                                <?php echo get_field('section_4_title'); ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <!-- Desktop Text -->
                    <?php if (get_field('section_4_txt')): ?>
                        <div class="max-lg:hidden">
                            <p class="text-body_s text-[#6A6F81] leading-[34px]">
                                <?php echo get_field('section_4_txt'); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (get_field('section_4_img')): ?>
                    <div class="col-span-5 lg:col-span-2">
                        <img class="w-full rounded-[20px] object-cover"
                            src="<?php echo wp_get_attachment_image_url(get_field('section_4_img'), 'full'); ?>" alt="">
                    </div>
                <?php endif; ?>

                <!-- Mobile Text -->
                <?php if (get_field('section_4_txt')): ?>
                    <div class="col-span-5 lg:hidden">
                        <p class="text-body_s text-[#6A6F81] leading-[34px]">
                            <?php echo get_field('section_4_txt'); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Departments -->
        <div>
            <?php cyn_get_page_template('home/departments'); ?>
        </div>

        <div class="py-8"></div>

        <!-- Content -->
        <div style="max-width: unset !important"
            class="prose prose-h2:text-[#3C3F49] prose-h3:text-[#3C3F49] prose-p:text-[#6A6F81] prose-p:leading-[34px] prose-p:text-body_s">
            <?php the_content() ?>
        </div>

        <div class="py-8"></div>

        <!-- FAQ -->
        <?php if (!empty(get_field('faq-group', $postId))): ?>

            <div class="flex flex-col gap-4">
                <!-- Title -->
                <div class="text-h2">
                    <?php echo __('سوالات متداول', 'cyn-dm') . '  ' . get_the_title() ?>
                </div>

                <div>
                    <?php cyn_get_component('faq-group', ['type' => 'acf', 'acf_field' => 'faq-group', 'post-id' => $postId]) ?>
                </div>
            </div>

        <?php endif; ?>

    </section>

    <div class="pt-[48px]"></div>

    <!-- Comments -->
    <?php cyn_get_component('single-comment') ?>

    </section>

    <!-- Comments For Mobile -->
    <?php cyn_get_component('mobile-res-comment') ?>

</main>

<div class="py-4"></div>

<?php get_footer() ?>