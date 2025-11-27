<?php
$popularPostIds = wpp_get_ids([
    'post_type' => 'post',
    'limit' => 6,
    'range' => 'monthly'
]);
?>
<div class="most-popular-container">
    <header class="py-4">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h2 class="h2 oranienbaum">Most Popular</h2>
            </div>
        </div>
    </header>
    <div class="row most-popular-gallery">
        <?php foreach ($popularPostIds as $postId): $post = get_post($postId); ?>
            <div class="col-lg-4 col-md-6 col-sm-6 pb-3 pb-md-4">
                <?php get_template_part('templates/components/article-box') ?>
            </div>
        <?php endforeach ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>