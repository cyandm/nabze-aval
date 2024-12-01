<?php

$banner_desktop_image = get_field('service_desktop_banner');
$banner_desktop_image_url = get_field('service_desktop_banner_url');

$banner_mobile_image = get_field('service_mobile_banner');
$banner_mobile_image_url = get_field('service_mobile_banner_url');

?>

<div class="container">

    <?php if (!empty($banner_desktop_image) && !empty($banner_desktop_image_url)): ?>
        <a href="<?php echo esc_url($banner_desktop_image_url) ?>">
            <div class="hidden min-[425px]:block rounded-[20px] bg-no-repeat bg-cover bg-center w-full h-[150px] xs:h-[200px] sm:h-[250px] md:h-[300px] lg:h-[400px] xl:h-[500px] 2xl:h-[600px] transition-all duration-300"
                style="background-image: url('<?php echo wp_get_attachment_image_url($banner_desktop_image, 'full', false) ?>');">
            </div>
        </a>
    <?php endif; ?>

    <?php if (!empty($banner_mobile_image) && !empty($banner_mobile_image_url)): ?>
        <a href="<?php echo esc_url($banner_mobile_image_url) ?>">
            <div class="block min-[425px]:hidden rounded-[20px] bg-no-repeat bg-cover bg-center w-full h-[400px] transition-all duration-300"
                style="background-image: url('<?php echo wp_get_attachment_image_url($banner_mobile_image, 'full', false) ?>');">
            </div>
        </a>
    <?php endif; ?>

</div>