<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">
        <?php
            $query = new WP_Query([
                'posts_per_page' => 14,
                'post_status' => 'publish',
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC'
            ]);

            $recentPosts = $query->posts;
            $pinnedArticles = array_splice($recentPosts, 0, 4);
        ?>
        <section id="main-banner" class="mb-3">
            <div class="row">
                <?php foreach ($pinnedArticles as $index => $post): setup_postdata($post); ?>
                    <?php if ($index == 0): ?>
                        <div class="col-md-12">
                            <article <?php post_class("mb-3 mb-md-5", get_the_ID()); ?>>
                                <div>
                                    <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                        <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                    </a>
                                </div>
                                <div class="mx-3 mx-md-5 p-3 position-relative text-center article-banner-title bg-white mb-3">
                                    <?php $categories = get_the_category(get_the_ID()) ?>
                                    <?php if ($categories): ?>
                                        <a class="text-decoration-none category-article sweet-sans-pro ls-1" href="<?= get_term_link($categories[0]->term_id) ?>"><h3 class="fs-6 text-center text-danger text-uppercase sweet-sans-font"><?= $categories[0]->name ?></h3></a>
                                    <?php endif; ?>
                                    <a class="text-decoration-none" href="<?= get_the_permalink(); ?>">
                                        <h1 class="article-title text-dark fw-bold h2 arnhem-bold text-danger-hover transition-color-hover"><?php the_title(); ?></h1>
                                    </a>
                                    <?php if ($shortDesc = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)): ?>
                                        <div class="article-shortdesc">
                                            <p class="fw-light fs-5 text-dark roboto-light"><?= $shortDesc; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                    <?php else: ?>
                        <div class="col-md-6 col-lg-4">
                            <article <?php post_class('', get_the_ID()); ?>>
                                <div class="img-hover-zoom">
                                    <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                        <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                    </a>
                                </div>
                                <div class="text-center py-3 py-md-4">
                                    <?php $categories = get_the_category(get_the_ID()) ?>
                                    <?php if ($categories): ?>
                                        <a class="text-decoration-none category-article" href="<?= get_term_link($categories[0]->term_id) ?>">
                                            <span class="h3 fs-6 text-center text-danger text-uppercase sweet-sans-pro ls-1"><?= $categories[0]->name ?></span>
                                        </a>
                                    <?php endif; ?>
                                    <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                        <h2 class="article-title text-dark fw-bold h3 arnhem-bold text-danger-hover transition-color-hover"><?php the_title() ?></h2>
                                    </a>
                                </div>
                            </article>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
        <section id="latest-article" class="mb-3">
            <header class="mb-3">
                <h2 class="sweet-sans-pro ls-2 horizontal-line text-center text-uppercase section-heading">
                    <span class="px-4 bg-white">The Latest</span>
                </h2>
                <p class="text-secondary sweet-sans-pro text-center text-uppercase"><?= date('l F d, Y') ?></p>
            </header>
            <div class="row">
                <?php foreach ($recentPosts as $post): setup_postdata($post); ?>
                    <div class="col-md-6">
                        <article <?php post_class('', get_the_ID()) ?>>
                            <div class="img-hover-zoom">
                                <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                    <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                </a>
                            </div>
                            <div class="text-center py-3 py-md-4">
                                <?php $categories = get_the_category(get_the_ID()) ?>
                                <?php if ($categories): ?>
                                    <a class="text-decoration-none category-article" href="<?= get_term_link($categories[0]->term_id) ?>">
                                        <h4 class="fs-6 text-center text-danger text-uppercase sweet-sans-pro ls-1"><?= $categories[0]->name ?></h4>
                                    </a>
                                <?php endif; ?>
                                <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                    <h3 class="article-title text-dark fw-bold arnhem-bold text-danger-hover transition-color-hover"><?php the_title() ?></h3>
                                </a>
                                <?php $writers = wp_get_post_terms(get_the_ID(), 'writer', ['field' => 'all']); ?>
                                <?php if ($writers): ?>
                                    <div class="categoty-article-writter text-lg-center fw-light">
                                        <span>
                                            <span class="fst-italic georgia-italic">By</span>
                                            <?php foreach ($writers as $writer): ?>
                                                <a class="ms-1 text-decoration-none text-dark sweet-sans-pro ls-1 text-secondary-hover transition-color-hover" href="<?= get_term_link($writer->term_id) ?>"><span class="text-uppercase"><?= $writer->name ?></span></a>
                                            <?php endforeach; ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>