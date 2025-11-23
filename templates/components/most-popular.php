<?php
$popularPostIds = wpp_get_ids([
    'post_type' => 'post',
    'limit' => 6,
    'range' => 'all'
]);
?>
<div class="most-popular-container">
    <header class="mb-3">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h3 class="h4 titling-gothic-fb-cond text-uppercase ls-3">Most Popular</h3>
            </div>
        </div>
    </header>
    <div class="row most-popular-gallery">
        <?php foreach ($popularPostIds as $postId): $post = get_post($postId); ?>
            <div class="col-md-4 col-sm-6 most-popular-item">
                <div class="d-flex flex-column justify-content-between h-100">
                    <article <?php post_class('mb-4', get_the_ID()) ?>>
                        <div class="img-hover-zoom">
                            <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                            </a>
                            <?php $categories = get_the_category(get_the_ID()) ?>
                            <?php if ($categories): ?>
                                <div class="text-center mb-2">
                                    <a class="text-decoration-none article-category" href="<?= get_term_link($categories[0]->term_id) ?>">
                                        <span class="h3 fs-6 text-danger text-uppercase titling-gothic-fb-cond ls-2"><?= $categories[0]->name ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <a class="text-decoration-none text-center" href="<?= get_the_permalink() ?>">
                                <h4 class="article-title text-secondary fw-bold titling-gothic-fb-cond text-dark-hover transition-color-hover"><?php the_title() ?></h4>
                            </a>
                        </div>
                    </article>
                    <div class="date-info">
                        <p class="text-center">
                            <span class="sweet-sans-pro text-uppercase text-secondary"><?= date('F d, Y', strtotime($post->post_date)) ?></span>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>