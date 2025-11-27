<?php get_header(); ?>

<main class="main" role="main">
    <div class="bg-light border-bottom">
        <div class="container">
            <?php $carousels = get_field('articles'); ?>
            <section id="main-banner" class="mb-3">
                <div class="carousel-gallery">
                    <?php foreach ($carousels as $postId): $post = get_post($postId); ?>
                        <div id="carousel-slide-<?= $postId ?>" class="carousel-cell w-100" data-id="<?= $postId ?>">
                            <figure class="mb-0">
                                <article <?php post_class("", get_the_ID()); ?>>
                                    <div class="p-0">
                                        <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                            <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                        </a>
                                        <div class="position-relative">
                                            <div class="position-absolute carousel-desc">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="m-4 p-4 position-relative article-banner-title bg-white">
                                                            <?php $categories = get_the_category(get_the_ID()) ?>
                                                            <?php if ($categories): ?>
                                                                <a class="text-decoration-none category-article" href="<?= get_term_link($categories[0]->term_id) ?>">
                                                                    <span class="h3 fs-small text-warning text-uppercase mulish ls-1"><?= $categories[0]->name ?></span>
                                                                </a>
                                                            <?php endif; ?>
                                                            <a class="text-decoration-none" href="<?= get_the_permalink(); ?>">
                                                                <h1 class="article-title text-dark h3 oranienbaum text-secondary-hover transition-color-hover mb-0"><?php the_title(); ?></h1>
                                                            </a>
                                                            <?php $writers = wp_get_post_terms(get_the_ID(), 'writer', ['field' => 'all']); ?>
                                                            <p class="mb-0">
                                                                <?php if ($writers): ?>
                                                                    <span>
                                                                        <span class="mulish text-dark fs-small text-uppercase">By</span>
                                                                        <?php foreach ($writers as $writer): ?>
                                                                            <a class="fs-small text-decoration-none text-dark text-secondary-hover transition-color-hover" href="<?= get_term_link($writer->term_id) ?>"><span class="text-uppercase mulish"><?= $writer->name ?></span></a>
                                                                        <?php endforeach; ?>
                                                                    </span>
                                                                <?php endif; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="d-flex bg-white">
                    <?php foreach ($carousels as $index => $postId): $post = get_post($postId); ?>
                        <div class="p-3 col cursor-pointer carousel-nav <?= $index ? null : 'active' ?> ?>" data-id="<?= $postId ?>" id="carousel-nav-<?= $postId ?>">
                            <?php $categories = get_the_category(get_the_ID()) ?>
                            <?php if ($categories): ?>
                                <p class="fs-small text-warning text-uppercase mulish mb-0 ls-1"><?= $categories[0]->name ?></p>
                            <?php endif; ?>
                            <h2 class="h6 article-title text-secondary oranienbaum text-dark-hover transition-color-hover mb-0"><?php the_title(); ?></h1>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
    </div>
    <div class="container">
        <section id="advertise-section">

        </section>
    </div>
    <div class="border-bottom">
        <div class="container">
            <section id="latest-article" class="mb-5">
                <header class="py-4">
                    <h2 class="oranienbaum border-bottom pb-2">Latest Stories</h2>
                </header>
                <?php
                $query = new WP_Query([
                    'posts_per_page' => get_field('how_many_articles_to_show'),
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ]);
    
                $latestArticles = $query->posts;
                $topArticles = array_splice($latestArticles, 0, 3);
                ?>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <?php $post = array_shift($topArticles) ?>
                            <div class="col-md-8">
                                <?php get_template_part('templates/components/article-box', '1x1') ?>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <?php foreach ($topArticles as $post): ?>
                                        <div class="col-12">
                                            <?php get_template_part('templates/components/article-box') ?>
                                        </div>
                                    <?php endforeach ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="leaderboard leaderboard-vertical">
                                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($latestArticles as $post): ?>
                        <div class="col-lg-4 col-md-6">
                            <?php get_template_part('templates/components/article-box') ?>
                        </div>
                    <?php endforeach ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="my-4">
                    <div class="horizontal-line text-center text-uppercase">
                        <button class="btn px-4 border-0 rounded-0 bg-white more-btn">
                            <span class="oranienbaum h3 loading-text text-secondary-hover transition-color-hover">Read More Stories</span>
                        </button>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <?php
    $selectedCategories = get_field('selected_categories');
    ?>
    <?php foreach ($selectedCategories as $categoryIndex => $category): ?>
        <?php
        $query = new WP_Query([
            // 'posts_per_page' => get_field('how_many_article_category_to_show'),
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $category['main_category'],
                ]
            ]
        ]);

        $term = get_term($category['main_category']);
        $articles = $query->posts;
        ?>

        <div class="<?= $categoryIndex % 2 ? "bg-white" : "bg-light"  ?> border-bottom">
            <div class="container">
                <section id="<?= $category['main_category'] ?>-category">
                    <header class="py-4">
                        <h2 class="oranienbaum border-bottom pb-2"><?= $term->name ?></h2>
                    </header>
                    <div class="row">
                        <?php if ($category['variant_design'] == 'variant_1'): ?>
                            <?php $post = array_shift($articles) ?>
                            <div class="col-lg-8 col-md-6 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box', 'square') ?>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="row">
                                    <?php foreach ($articles as $post): ?>
                                        <div class="col-12 pb-3 pb-md-4">
                                            <?php get_template_part('templates/components/article-box', 'square') ?>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        <?php elseif ($category['variant_design'] == 'variant_2'): ?>
                            <?php $cover = array_pop($articles) ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="row">
                                    <?php foreach ($articles as $post): ?>
                                        <div class="col-12 pb-3 pb-md-4">
                                            <?php get_template_part('templates/components/article-box', 'square') ?>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <?php $post = $cover ?>
                            <div class="col-lg-8 col-md-6 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box', 'square') ?>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php elseif ($category['variant_design'] == 'variant_3'): ?>
                            <?php foreach ($articles as $index => $post): ?>
                                <?php if (($index + 1) % 3 !== 0): ?>
                                    <div class="col-lg-6 col-md-6 pb-3 pb-md-4">
                                        <?php get_template_part('templates/components/article-box', 'square') ?>
                                    </div>
                                <?php else: ?>
                                    <div class="col-lg-12 col-md-6 pb-3 pb-md-4">
                                        <article <?php post_class('h-100', get_the_ID()) ?>>
                                            <div class="img-hover-zoom ratio-1x1 ratio-lg-2x1">
                                                <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                                    <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                                </a>
                                            </div>
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0">
                                                    <div class="p-3">
                                                        <?php $categories = get_the_category(get_the_ID()) ?>
                                                        <?php if ($categories): ?>
                                                            <div class="mb-1">
                                                                <a href="<?= get_term_link($categories[0]->term_id) ?>" class="text-decoration-none fs-small text-warning text-uppercase mulish">
                                                                    <span class="ls-1"><?= $categories[0]->name ?></span>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                        <a class="text-decoration-none" href="<?= get_the_permalink(); ?>">
                                                            <h3 class="article-title text-dark h4 oranienbaum text-secondary-hover transition-color-hover mb-1"><?php the_title(); ?></h3>
                                                        </a>
                                                        <?php $writers = wp_get_post_terms(get_the_ID(), 'writer', ['field' => 'all']); ?>
                                                        <div class="article-writter fw-light">
                                                            <span>
                                                                <span class="fs-small mulish text-uppercase">By</span>
                                                                <?php foreach ($writers as $writer): ?>
                                                                    <a class="fs-small text-decoration-none text-dark mulish text-secondary-hover transition-color-hover" href="<?= get_term_link($writer->term_id) ?>"><span class="text-uppercase"><?= $writer->name ?></span></a>
                                                                <?php endforeach; ?>
                                                                <span class="mulish fs-small">|</span>
                                                            </span>
                                                            <span class="mulish text-uppercase fs-small"><?= date('F d, Y', strtotime($post->post_date)) ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php endif ?>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php get_footer(); ?>