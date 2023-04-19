<?php

if (!defined('ABSPATH')) exit;

function get_terms_by_taxonomy(int $post_id, string $taxonomy_name = '')
{
    if (empty($taxonomy_name)) {
        $posts_terms = get_the_category($post_id);

        if (!empty($posts_terms))
            return $posts_terms;

        return false;
    }

    $posts_terms = get_the_terms($post_id, $taxonomy_name);

    if (!empty($posts_terms))
        return $posts_terms;

    return false;
}
