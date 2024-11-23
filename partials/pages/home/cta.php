<div class="container">
    <?php
    $banner_image = get_field('service_banner');
    $banner_image_url = get_field('service_banner_url');

    if ($banner_image): ?>
        <a href="<?php echo esc_url($banner_image_url) ?>">
            <div class="rounded-[20px] bg-no-repeat bg-cover bg-center w-full h-[150px] xs:h-[200px] sm:h-[250px] md:h-[300px] lg:h-[400px] xl:h-[500px] 2xl:h-[600px] transition-all duration-300"
                style="background-image: url('<?php echo wp_get_attachment_image_url($banner_image, 'full', false) ?>');">
            </div>
        </a>
    <?php endif; ?>
</div>