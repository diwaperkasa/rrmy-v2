<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">
        <?php
            $args = [
                'numberposts' => 4, // Number of recent posts thumbnails to display
                'post_status' => 'publish', // Show only the published posts
                'post_type' => 'post',
                'orderby' => 'post_date',
                'order' => 'DESC',
            ];

            if ($videoCategory = get_category_by_slug('video')) {
                $args['category__not_in'][] = $videoCategory->term_id;
            }

            $pinnedArticles = wp_get_recent_posts($args);
        ?>
        <section id="mainBanner" class="mb-3">
            <div class="row">
                <?php foreach ($pinnedArticles as $index => $post): ?>
                    <?php if ($index == 0): ?>
                        <div class="col-md-12">
                            <article <?php post_class("mb-3 mb-md-5", $post['ID']); ?>>
                                <div>
                                    <a class="text-decoration-none" href="<?= get_permalink($post['ID']) ?>">
                                        <?= get_the_post_thumbnail($post['ID'], 'full') ?>
                                    </a>
                                </div>
                                <div class="mx-3 mx-md-5 p-3 position-relative text-center article-banner-title bg-white mb-3">
                                    <?php $categories = get_the_category($post['ID']) ?>
                                    <?php if ($categories): ?>
                                        <a class="text-decoration-none category-article sweet-sans-pro ls-1" href="<?= get_term_link($categories[0]->term_id) ?>"><h3 class="fs-6 text-center text-danger text-uppercase sweet-sans-font"><?= $categories[0]->name ?></h3></a>
                                    <?php endif; ?>
                                    <a class="text-decoration-none" href="<?= get_permalink($post['ID']) ?>">
                                        <h1 class="article-title text-dark fw-bold h2 arnhem-bold"><?= $post['post_title'] ?></h1>
                                    </a>
                                    <?php if ($shortDesc = get_post_meta($post['ID'], '_yoast_wpseo_metadesc', true)): ?>
                                        <div class="article-shortdesc">
                                            <p class="fw-light fs-5 text-dark roboto-light"><?= $shortDesc; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                    <?php else: ?>
                        <div class="col-md-6 col-lg-4">
                            <article <?php post_class('', $post['ID']); ?>>
                                <div class="img-hover-zoom">
                                    <a class="text-decoration-none" href="<?= get_permalink($post['ID']) ?>">
                                        <?= get_the_post_thumbnail($post['ID'], 'full') ?>
                                    </a>
                                </div>
                                <div class="text-center py-3 py-md-4">
                                    <?php $categories = get_the_category($post['ID']) ?>
                                    <?php if ($categories): ?>
                                        <a class="text-decoration-none category-article" href="<?= get_term_link($categories[0]->term_id) ?>">
                                            <h3 class="fs-6 text-center text-danger text-uppercase sweet-sans-pro ls-1"><?= $categories[0]->name ?></h3>
                                        </a>
                                    <?php endif; ?>
                                    <a class="text-decoration-none" href="<?= get_permalink($post['ID']) ?>">
                                        <h2 class="article-title text-dark fw-bold h3 arnhem-bold"><?= $post['post_title'] ?></h2>
                                    </a>
                                </div>
                            </article>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>