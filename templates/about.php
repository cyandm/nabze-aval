 <?php /* Template name: About Us */ ?>

<?php get_header() ?>

<!-- Description-->
<?php cyn_get_page_template('about/introduction') ?>

<div class="py-11"></div>

<!-- Crow -->
<?php cyn_get_page_template('about/description') ?>

<div class="py-[45px]"></div>

<!-- Services -->
<?php cyn_get_page_template('home/services') ?>

<div class="py-[48px] max-lg:py-[32px]"></div>

<?php get_footer() ?>