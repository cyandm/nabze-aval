<?php

defined('ABSPATH') || exit;

global $wp_query;

$search_type = empty($_GET['search-type']) ? 'all' : $_GET['search-type'];

?>

<?php get_header() ?>

<!-- Bread Crumb -->
<?php cyn_get_component('breadcrumb'); ?>

<div class="container">
    <div id="searchPostType"
        class="bg-primary-100 max-lg:flex flex-col p-5 rounded-3xl  divide-y space-y-3 divide-primary-90">

        <form id="search-form" class="flex justify-between items-center max-lg:flex-col max-lg:gap-3">

            <div class="max-lg:order-0 ">
                <div class="flex gap-1 py-1 px-3 border border-primary-50 rounded-full">
                    <div>
                        <svg class="icon size-8">
                            <use href="#icon-Search,-Loupe" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon" name="s" value="<?php the_search_query() ?>"
                        class="text-right -outline-offset-8 outline-none focus:outline-none focus-visible:outline-none focus:border-none focus:ring-0 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="جست و جو">
                </div>
            </div>

            <div class="flex justify-center items-center gap-1 py-3 text-primary-30 text-body_s">

                <?php if (!empty($_GET['s'])): ?>
                    <span id='postsCount'>
                        <?php echo $wp_query->found_posts ?>
                    </span>

                    <span>
                        <?php _e('نتیجه', 'cyn-dm') ?>
                    </span>
                <?php endif; ?>
            </div>

        </form>
    </div>

    <div class="p-6 ">

        <?php if (!empty($_GET['s'])): ?>

            <?php if (have_posts()): ?>

                <div id="searchPostsWrapper " class="space-y-4 divide-y divide-primary-70 py-4">
                    <?php while (have_posts()):
                        the_post() ?>
                        <div>
                            <?php cyn_get_card('search') ?>
                        </div>
                    <?php endwhile; ?>
                </div>

                <?php
            else:
                cyn_get_component('search-not-found');
            endif;
            ?>

        <?php endif; ?>
    </div>
</div>


<?php get_footer() ?>