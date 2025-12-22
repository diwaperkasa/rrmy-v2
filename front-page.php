<?php get_header(); ?>

<main class="main" role="main">
    <div class="bg-light border-bottom">
        <div class="container p-0">
            <?php $carousels = get_field('articles'); ?>
            <section id="main-banner" class="pb-5 pb-md-0">
                <div class="mb-3 mb-md-0">
                    <div class="carousel-gallery ratio-16x9">
                        <?php foreach ($carousels as $postId): $post = get_post($postId); ?>
                            <div id="carousel-slide-<?= $postId ?>" class="carousel-cell w-100" data-id="<?= $postId ?>">
                                <figure class="pb-12 pb-md-0 mb-0">
                                    <article <?php post_class("", get_the_ID()); ?>>
                                        <div class="p-0">
                                            <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                                                <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                                            </a>
                                        </div>
                                    </article>
                                </figure>
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
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <div class="d-none d-md-block row carousel-desc-gallery bg-white mx-0 carousel-navigation-gallery my-auto">
                    <?php foreach ($carousels as $index => $postId): $post = get_post($postId); ?>
                        <div class="py-3 col-lg col-md-3 col-sm-6 col-12 col cursor-pointer carousel-nav h-100" data-id="<?= $postId ?>" id="carousel-nav-<?= $postId ?>">
                            <div class="px-3 border-end h-100">
                                <?php $categories = get_the_category(get_the_ID()) ?>
                                <?php if ($categories): ?>
                                    <p class="fs-small article-category text-secondary text-uppercase mulish mb-2 ls-1"><?= $categories[0]->name ?></p>
                                <?php endif; ?>
                                <h2 class="h6 article-title text-secondary oranienbaum text-dark-hover transition-color-hover mb-0"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
    </div>
    <div class="leaderboard-border-bottom">
        <div class="container">
            <div class="leaderboard leaderboard-top">
                <div id='div-gpt-ad-3035191-2'>
                    <script>
                        googletag.cmd.push(function() {
                            googletag.display('div-gpt-ad-3035191-2')
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom">
        <div class="container">
            <section id="latest-article">
                <header class="py-4">
                    <h2 class="oranienbaum border-bottom pb-2">Latest Stories</h2>
                </header>
                <?php
                $length = get_field('how_many_articles_to_show');;
                $query = new WP_Query([
                    'posts_per_page' => $length,
                    'post_status' => 'publish',
                    'post_type' => ['post', 'wine', 'passport', 'package'],
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
                            <div class="col-md-8 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box', '1x1') ?>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <?php foreach ($topArticles as $post): ?>
                                        <div class="col-12 pb-3 pb-md-4">
                                            <?php get_template_part('templates/components/article-box', 'front-child') ?>
                                        </div>
                                    <?php endforeach ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="leaderboard leaderboard-vertical">
                            <div id='div-gpt-ad-3035191-5'>
                                <script>
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-3035191-5')
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="latest-container" class="row">
                    <?php foreach ($latestArticles as $post): ?>
                        <div class="col-lg-4 col-md-6 pb-3 pb-md-4">
                            <?php get_template_part('templates/components/article-box') ?>
                        </div>
                    <?php endforeach ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="pt-4 pb-5">
                    <div class="horizontal-line text-center text-uppercase">
                        <button data-length="<?= $length ?>" style="--bs-btn-disabled-opacity: 1" class="btn px-4 border-0 rounded-0 bg-white more-article-btn">
                            <span class="oranienbaum h3 loading-text text-secondary-hover transition-color-hover">Read More Stories</span>
                        </button>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="border-bottom">
        <div class="container">
            <section id="video-section" class="pb-5">
                <header class="py-4">
                    <h2 class="oranienbaum border-bottom pb-2">Videos</h2>
                </header>
                <div class="row">
                    <div class="col-12">
                        <?= do_shortcode('[yotuwp type="channel" id="UCFTpnmZ91yuM7SyBByJCsXg" ]'); ?>
                    </div>
                </div>
            </section>
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
                                        <?php get_template_part('templates/components/article-box', 'rectangle') ?> 
                                    </div>
                                <?php endif ?>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="pt-4 pb-5">
                        <div class="horizontal-line text-center">
                            <a href="<?= get_term_link($category['main_category']) ?>" class="text-decoration-none px-4 border-0 rounded-0 <?= $categoryIndex % 2 ? "bg-white" : "bg-light"  ?> text-dark more-category-btn">
                                <span class="oranienbaum h3 loading-text text-secondary-hover transition-color-hover">More <?= $term->name ?> Stories</span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <?php if ($categoryIndex == 0): ?>
            <div class="leaderboard-border">
                <div class="container">
                    <div class="leaderboard leaderboard-mid">
                        <div id='div-gpt-ad-3035191-3'>
                            <script>
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-3035191-3')
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;  ?>
    <?php endforeach; ?>
    <div class="border-bottom bg-light d-block d-md-none">
        <div class="container">
            <section id="magazine-subscribe" class="py-4">
                <div class="text-center px-5">
                    <img class="img-fluid mb-3" src="<?= get_theme_mod('subscribe_logo' , "https://robbreport.com/wp-content/uploads/2024/10/RR2022_09_shadow.webp"); ?>" alt="<?= get_theme_mod('subscribe_logo' , "https://robbreport.com/wp-content/uploads/2024/10/RR2022_09_shadow.webp"); ?>">
                </div>
                <h2 class="mb-4 oranienbaum ls-1 text-center">Get The Magazine</h2>
                <p class="mulish-light ls-1">Subscribe now for a one-year subscription at only RM150 for the print version or opt for the digital edition for US$39.90 with two issues free.</p>
                <div class="text-center">
                    <a href="/print-subscription" class="text-uppercase text-white btn btn-danger rounded-0 px-4 py-2 mulish-light ls-1">PRINT</a>
                    <a target="_blank" href="https://www.magzter.com/MY/Indochine-Media/Robb-Report-Malaysia/Lifestyle/?utm_source=cj-cps&cjevent=612b9ff3d3dd11f0829401a20a18b8f6" class="text-uppercase text-white btn btn-danger rounded-0 px-4 py-2 mulish-light ls-1">DIGITAL</a>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>