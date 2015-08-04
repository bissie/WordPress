<?php

function get_last_category_post($category_name){
    $posts = get_posts(array(
        'category_name' => $category_name,
        'post_status' => 'publish',
    ));
    $postId = null;
    foreach ($posts as $post) {
        $postId = $post->ID;
        break;
    }
    return get_post($postId, 'OBJECT', 'display');
}

?>
