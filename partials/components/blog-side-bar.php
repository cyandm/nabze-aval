<!-- Blog SideBar -->

<?php

$recommendPosts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'fields' => 'ids'
]);

?>

<?php

$post_categories = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);

?>


<div class="h-full">

    <div class="grid justify-evenly sticky top-3 space-y-3">
        <!-- Search -->
        <?php cyn_get_component('blog-side-bar-search') ?>

        <!-- Category -->
        <div class="bg-primary-100 p-5 rounded-3xl">

            <div class="text-h6 font-medium">
                <?php _e('دسته بندی ها', 'cyn-dm') ?>
            </div>

            <div class="py-2"></div>

            <div>
                <div>
                    <ul class="space-y-3 divide-y-[1px] divide-primary-90">
                        <?php foreach ($post_categories as $term): ?>
                            <a href="<?php echo get_term_link($term) ?>" class="text-secondary-400 pt-3 block">

                                <li class="flex justify-between py-1 text-body_s">
                                    <?php echo $term->name ?>
                                    <span class="text-primary-50">
                                        <?php echo $term->count . 'مقاله'; ?>
                                    </span>
                                </li>
                            </a>

                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</div>