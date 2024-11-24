<?php

class cyn_search
{
    public function __construct()
    {
        add_action('pre_get_posts', [$this, 'searchPage']);
    }

    public function searchPage(WP_Query $query)
    {
        if (!$query->is_search() || !$query->is_main_query()) {
            return;
        }

        $search_type = $_GET['search-type'] ?? 'all';
        if ($search_type === 'all') {

            $post_types = get_post_types(['public' => true, 'exclude_from_search' => false], 'names');

            unset($post_types['video']);

        } else {

            $post_types = [$search_type];

            if ($search_type === 'video') {

                $post_types = [];
            }
        }

        $query->set('posts_per_page', -1);
        $query->set('post_type', $post_types);
    }
}
new cyn_search();
