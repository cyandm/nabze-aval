<?php defined('ABSPATH') || exit;  ?>
<!-- Not found  -->

<?php get_header(); ?>
<div class="py-12 max-xl:hidden"></div>

<main class="container flex justify-center items-center flex-col">
    <!-- 404 image  -->
    <div>
        <img src="<?php echo get_option('cyn_custom_404_logo') ?>" alt="404-picture">
    </div>

    <div class="py-6"></div>

    <!-- Text and button  -->
    <div class="items-center justify-center">
        
        <!-- Text  -->
        <div class="text-body">
            <?php _e('متاسفانه صفحه ی مورد نظر یافت نشد', 'cyn-dm') ?>
        </div>

        <div class="py-2"></div>

        <!-- button  -->
        <div>
            <cyn-button type="primary" size="md" href="<?php echo esc_url(home_url()); ?>" class="items-center justify-center">
                <?php _e('بازگشت به صفحه اصلی', 'cyn-dm') ?>
            </cyn-button>
        </div>
    </div>

</main>

<div class="py-8"></div>


<?php get_footer(); ?>