<?php $render_template = $args['render_template'] ?? true ?>

<?php if ($render_template): ?>
    <footer>

        <div class="py-9 bg-noise bg-[#1E3A8A] text-primary-100 space-y-6">
            <div class="container flex justify-between items-center max-md:items-start max-md:gap-8 max-lg:flex-col">
                <div class="flex gap-11 max-md:flex-col max-md:gap-8">
                    <div class="space-y-3 max-md:order-first max-md:w-full">
                        <span class="text-h6 max-md:text-body">
                            <?php _e('نواحی خدمات رسانی', 'cyn-dm') ?>
                        </span>

                        <div class="space-y-3 max-md:flex max-md:flex-wrap max-md:gap-4">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <?php
                                $location_title = get_option("cyn_phone_number_title_$i");
                                $phone_number = get_option("cyn_phone_number_$i");

                                if (!empty($location_title) || !empty($phone_number)):
                                    ?>
                                    <div class="block text-primary-80 text-body_s max-md:w-[calc(50%-8px)]">
                                        <?php if (!empty($location_title)): ?>
                                            <div><?php echo esc_html($location_title); ?></div>
                                        <?php endif; ?>

                                        <?php if (!empty($phone_number)): ?>
                                            <a href="tel:<?php echo esc_attr($phone_number); ?>">
                                                <?php echo esc_html($phone_number); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div class="flex gap-11 max-md:grid max-md:grid-cols-2 max-md:gap-8 max-md:w-full">
                        <div class="space-y-3 max-md:w-full">
                            <span class="text-h6 max-md:text-body">
                                <?php _e('خدمات', 'cyn-dm') ?>
                            </span>
                            <div class="space-y-3">
                                <?php
                                $services = get_posts([
                                    'post_type' => 'service',
                                    'posts_per_page' => 10,
                                    'orderby' => 'menu_order',
                                    'order' => 'ASC'
                                ]);

                                foreach ($services as $service): ?>
                                    <a class="block text-primary-80 text-body_s"
                                        href="<?php echo get_permalink($service->ID) ?>">
                                        <?php echo $service->post_title ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="max-w-[320px] max-lg:max-w-[250px] space-y-9 max-md:w-full max-md:max-w-full">
                            <div class="space-y-3">
                                <span class="text-h6 max-md:text-body">
                                    <?php _e('ساعات کاری', 'cyn-dm') ?>
                                </span>
                                <p class="text-primary-80 text-body_s">
                                    <?php echo get_option('cyn_days') ?>
                                </p>
                                <p class="text-primary-80 text-body_s">
                                    <?php echo get_option('cyn_hours') ?>
                                </p>
                            </div>

                            <div class="space-y-3">
                                <span class="text-h6 max-md:text-body">
                                    <?php _e('شبکه های اجتماعی', 'cyn-dm') ?>
                                </span>

                                <div class="flex gap-2">
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <a href="<?php echo get_option("cyn_social_media_url_$i") ?>">
                                            <img src="<?php echo get_option("cyn_social_media_img_$i") ?>" alt="" />
                                        </a>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-9 max-md:w-full">
                            <div class="space-y-3">
                                <span class="text-h6 max-md:text-body">
                                    <?php _e('شماره تماس ', 'cyn-dm') ?>
                                </span>

                                <div class="space-y-3">

                                    <p class="text-primary-80 text-body_s">
                                        <?php _e('خط ویژه', 'cyn-dm') ?>
                                    </p>

                                    <a class="block text-primary-80 text-body_s"
                                        href="<?php echo 'tel:' . get_option("cyn_special_number") ?>">
                                        <?php echo get_option("cyn_special_number") ?>
                                    </a>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <span class="text-h6 max-md:text-body">
                                    <?php _e('پست الکترونیکی ', 'cyn-dm') ?>
                                </span>

                                <div class="space-y-3">
                                    <a class="block text-primary-80 text-body_s"
                                        href="<?php echo 'mailto:' . get_option("cyn_email") ?>">
                                        <?php echo get_option("cyn_email") ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3 max-md:w-full">
                            <span class="text-h6 max-md:text-body">
                                <?php _e('دسترسی سریع', 'cyn-dm') ?>
                            </span>

                            <div class="space-y-3">
                                <?php
                                $quick_services = get_terms([
                                    'taxonomy' => 'quick_service', // Replace with your taxonomy name
                                    'hide_empty' => false,
                                    'meta_query' => [
                                        [
                                            'key' => 'show_in_footer',
                                            'value' => '1',
                                            'compare' => '='
                                        ]
                                    ]
                                ]);

                                if (!empty($quick_services) && !is_wp_error($quick_services)):
                                    foreach ($quick_services as $service): ?>
                                        <div class="text-primary-80 text-body_s">
                                            <a href="<?php echo get_term_link($service); ?>">
                                                <?php echo $service->name; ?>
                                            </a>
                                        </div>
                                    <?php endforeach;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="max-md:w-full max-md:mt-4 space-y-6 flex flex-col items-center">
                    <div>
                        <img class="max-md:mx-auto" src="
                                  <?php echo get_option('cyn_custom_logo'); ?>" alt="nabz_aval_logo">
                    </div>

                    <div class="space-y-3 max-md:text-center">
                        <span class="text-h6 max-md:text-body">
                            <?php _e('دریافت خبرنامه', 'cyn-dm') ?>
                        </span>

                        <p class="text-primary-80 text-body_s">
                            <?php _e('برای دریافت آخرین اخبار ایمیل خود را وارد نمایید', 'cyn-dm') ?>
                        </p>

                    </div>

                </div>
            </div>


            <div class="text-[#D8DADF] text-center">
                <span class="text-caption">
                    <?php _e('Designed by ', 'nabz-aval') ?>
                </span>

                <span class="text-body_s">
                    <?php _e('CyanDM', 'nabz-aval') ?>
                </span>
            </div>

        </div>

    </footer>
<?php endif; ?>

<div class="wp-scripts">
    <?php wp_footer() ?>
</div>

</body>

</html>