<?php $render_template = $args['render_template'] ?? true ?>

<?php if ($render_template): ?>
    <footer>

        <!-- App Bar  -->
        <section class="text-caption w-full flex flex-col items-end fixed bottom-4 md:hidden gap-3 px-[22px] py-2 z-50">
            <a style="transition: transform .16s linear 0s, opacity .08s linear 0s;"
                href="<?php echo 'tel:' . get_option("cyn_app_bar_btn_link_1") ?>"
                class="cursor-pointer flex flex-col gap-1 items-center justify-center transition-transform duration-200 hover:scale-110">

                <div style=" box-shadow: 0 1px 3px 0 #0000004d, 0 4px 8px 3px #00000026;"
                    class="bg-[#EA580C] rounded-2xl size-[55px] flex justify-center items-center text-primary-100">
                    <div class="icon size-6 ">
                        <img src="<?php echo get_option('cyn_app_bar_btn_icon_1') ?>">
                    </div>
                </div>
            </a>
        </section>

        <div class="pt-9 pb-17 md:py-9 bg-noise bg-[#1E3A8A] text-primary-100 space-y-6">
            <div class="container flex justify-between items-center max-md:items-start max-md:gap-8 max-lg:flex-col">
                <div class="flex gap-11 max-md:flex-col max-md:gap-8">
                    <div class="space-y-3 max-md:order-first max-md:w-full">
                        <span class="text-h6 max-md:text-body">
                            <?php _e('نواحی خدمات رسانی', 'cyn-dm') ?>
                        </span>

                        <div class="space-y-3 max-md:flex max-md:flex-wrap max-md:gap-4">
                            <?php for ($i = 1; $i <= 6; $i++): ?>
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

                                wp_nav_menu([
                                    'theme_location' => 'footer_department',
                                    'container' => false,
                                    'items_wrap' => '<div class="flex flex-col gap-2 list-none">%3$s</div>',
                                ]);

                                ?>
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
                        </div>

                        <div class="space-y-9 max-md:w-full">

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

                        <div class="space-y-3 max-md:w-full">
                            <span class="text-h6 max-md:text-body">
                                <?php _e('دسترسی سریع', 'cyn-dm') ?>
                            </span>

                            <div class="text-[#D8DADF] text-body_s">
                                <?php

                                wp_nav_menu([
                                    'theme_location' => 'footer_access',
                                    'container' => false,
                                    'items_wrap' => '<div class="flex flex-col gap-2 list-none">%3$s</div>',
                                ]);

                                ?>
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

                        <form id="newsletterForm" class="flex flex-col gap-2" method="POST">
                            <input type="email" name="email" id="newsletter-email" class="py-2 px-4 rounded-3xl"
                                placeholder="<?php _e('ایمیل خود را وارد کنید', 'cyn-dm') ?>" required>
                            <button id="newsletter-submit" type="submit"
                                class="border border-primary-100 text-primary-100 py-2 px-4 rounded-3xl hover:bg-primary-100 hover:text-[#1E3A8A] hover:border-[#1E3A8A]"><?php _e('دریافت خبرنامه', 'cyn-dm') ?></button>
                        </form>

                        <div id="newsletter-response"></div>
                    </div>

                </div>
            </div>

            <a href="<?php echo get_option('cyn_footer_btn')?>">
                <div class="text-[#D8DADF] text-center">
                    <span class="text-caption">
                        <?php _e('Designed by ', 'nabz-aval') ?>
                    </span>

                    <span class="text-body_s">
                        <?php _e('CyanDM', 'nabz-aval') ?>
                    </span>
                </div>
            </a>

        </div>

    </footer>
<?php endif; ?>
<?php cyn_get_popup('backdrop'); ?>

<div class="wp-scripts">
    <?php wp_footer() ?>
</div>

</body>

</html>