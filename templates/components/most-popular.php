<?php
$popularPostIds = wpp_get_ids([
    'post_type' => 'post',
    'limit' => 6,
    'range' => 'weekly'
]);
?>
<div class="most-popular-container">
    <header class="py-4">
        <h2 class="oranienbaum border-bottom pb-2">Most Popular</h2>
    </header>
    <div class="row most-popular-gallery">
        <?php foreach ($popularPostIds as $postIdx => $postId): $post = get_post($postId); ?>
            <?php if ($postIdx % 4 === 0): ?>
                <div class="col-lg-6 col-md-6 col-sm-6 pb-3 pb-md-4 px-lg-4">
                    <?php get_template_part('templates/components/article-box', 'rectangle') ?> 
                </div>
            <?php else: ?>
                <div class="col-lg-3 col-md-6 col-sm-6 pb-3 pb-md-4">
                    <?php get_template_part('templates/components/article-box', 'square') ?>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>