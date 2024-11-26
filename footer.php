<?php $render_template = $args['render_template'] ?? true ?>

<?php if ($render_template): ?>
    <footer>

        <!-- App Bar  -->
        <section class="text-caption w-full flex flex-col fixed bottom-4 z-30 md:hidden gap-3">

            <!-- App Bar  -->
            <div
                class=" w-[calc(100%_-_1rem)] mx-auto rounded-3xl flex justify-between gap-8 items-center bg-primary-100 px-14 py-3 shadow-2xl">

                <!-- button 1 -->
                <a href="<?php echo get_option('cyn_app_bar_btn_link_1') ?>"
                    class=" cursor-pointer flex flex-col gap-1 items-center justify-center ">

                    <div class="bg-accent-40 rounded-full size-10 flex justify-center items-center text-primary-100">
                        <div class=" icon size-6 ">
                            <img src="<?php echo get_option('cyn_app_bar_btn_icon_1') ?>">
                        </div>
                    </div>

                    <p class="text-accent-40">
                        <?php echo get_option('cyn_app_bar_btn_title_1') ?>
                    </p>
                </a>

                <!-- Button 2 -->
                <a href="<?php echo get_option('cyn_app_bar_btn_link_2') ?>"
                    class="reservePopUpOpener cursor-pointer flex flex-col gap-1 items-center justify-center">

                    <div class="bg-accent-40 rounded-full size-10 flex justify-center items-center text-primary-100">
                        <div class=" icon size-6 ">
                            <img src="<?php echo get_option('cyn_app_bar_btn_icon_2') ?>">
                        </div>
                    </div>

                    <p class="text-accent-40">
                        <?php echo get_option('cyn_app_bar_btn_title_2') ?>
                    </p>
                </a>

                <!-- Button 3 -->
                <a href="<?php echo get_option('cyn_app_bar_btn_link_3') ?>"
                    class="cursor-pointer flex flex-col gap-1 items-center justify-center">
                    <div
                        class="bg-accent-40 relative after:absolute after:rounded-full isolate after:-z-10 after:animate-ping after:bg-accent-40 after:content-[''] after:inset-0 rounded-full size-10 flex justify-center items-center text-primary-100">
                        <div class=" icon size-6 ">
                            <img src="<?php echo get_option('cyn_app_bar_btn_icon_3') ?>">
                        </div>
                    </div>
                    <p class="text-accent-40">
                        <?php echo get_option('cyn_app_bar_btn_title_3') ?>
                    </p>
                </a>
            </div>
        </section>



        <div class="py-9 bg-noise bg-[#1E3A8A] text-primary-100 space-y-6">
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
<?php cyn_get_popup('backdrop'); ?>

<div class="wp-scripts">
    <?php wp_footer() ?>
</div>

</body>

</html>