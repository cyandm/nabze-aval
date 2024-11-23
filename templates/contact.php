<?php /* Template Name: Contact us */ ?>

<!-- Contact Us page  -->
<?php get_header() ?>

<main class="container max-lg:flex max-lg:flex-col pb-[52px]">

    <div class="text-h1 text-primary-20">
        <?php _e('اگه سوالی داری...', 'cyn-dm') ?>
    </div>
    <div class="py-2"></div>

    <div class="flex gap-11 max-lg:flex-col	">
        <!-- image  -->
        <div class="max-lg:w-full w-3/6 flex items-center justify-center">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full') ?>
        </div>
        <!-- Contact form -->
        <div class="max-lg:w-full flex gap-4 flex-col w-3/6">
            <!-- first form text  -->
            <div class="flex flex-col text-primary-40 gap-2">
                <p class="text-h3 "> <?php _e('تماس با ما', 'cyn-dm') ?></p>
                <p class="text-body_s"> <?php _e('پیام خودتونو برای ما ارسال کنید', 'cyn-dm') ?></p>
            </div>
            <!-- Customer  information form   -->
            <div>
                <form class="flex gap-4 flex-col" action="/" method="post" id="ContactUsForm">
                    <div class="flex w-4/5 max-lg:w-full gap-4">
                        <!-- <?php //sanitize_textarea_field($name['textarea_input']) 
                        ?> -->
                        <input class=" w-1/2 max-lg:w-full p-2 rounded-3xl border border-primary-80 " type="text"
                            placeholder="نام شما" required="required" name="name" id="name">
                        <input class=" w-1/2 max-lg:w-full p-2 rounded-3xl border border-primary-80 " maxlength="11"
                            type="number_format" placeholder="شماره تلفن همراه شما" required="required" name="name"
                            id="phoneNumber">
                    </div>
                    <div>
                        <input class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" type="email"
                            placeholder="ایمیل شما" name="email" id="email">
                    </div>
                    <div>
                        <textarea class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" name="message"
                            id="message" cols="30" rows="10" placeholder="پیام خودتونو بنویسید"></textarea>
                    </div>
                    <!-- Submit field -->
                    <div
                        class=" flex items-end justify-end max-lg:items-center max-lg:justify-center w-4/5 max-lg:w-full">
                        <cyn-button type="primary" icon="#icon-Send">
                            <div class="me-2">
                                <?php _e('ارسال پیام', 'cyn-dm') ?>
                            </div>
                        </cyn-button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</main>

<?php get_footer() ?>