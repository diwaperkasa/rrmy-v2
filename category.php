<?php get_header(); ?>

<?php
$category = get_queried_object();

$query = new WP_Query([
    'posts_per_page' => 10,
    'post_status' => 'publish',
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'no_found_rows'  => true,
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => $category->term_id,
        ]
    ]
]);

$articles = $query->posts;
$topArticles = array_splice($articles, 0, 3);
?>


<main class="main" role="main">
    <div class="border-bottom bg-light">
        <div class="container">
            <section id="latest-category-article">
                <header class="py-4">
                    <div class="text-center">
                        <h1 class="oranienbaum pb-2"><?= $category->name ?></h1>
                    </div>
                    <?php if (!$category->parent): ?>
                        <?php
                        $children = get_categories([
                            'parent' => $category->term_id,
                            'hide_empty' => false
                        ]);
                        ?>
                        <?php if ($children): ?>
                            <div class="border-bottom">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="d-flex justify-content-between align-items-center lora">
                                            <div class="pb-2 col px-2 text-center">
                                                <span class="text-warning mx-2">All</span>
                                            </div>
                                            <?php foreach ($children as $childCategory): ?>
                                                <div class="border-start pb-2 col px-2 text-center">
                                                    <a class="text-secondary-hover text-decoration-none text-dark" href="<?= get_term_link($childCategory->term_id) ?>"><?= $childCategory->name ?></a>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </header>
            </section>
            <div class="row">
                <?php $post = array_shift($topArticles) ?>
                <div class="col-md-8 pb-3 pb-md-4">
                    <?php if ($post): ?>
                        <?php get_template_part('templates/components/article-box', 'square') ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <?php foreach ($topArticles as $post): ?>
                            <div class="col-6 col-md-12 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box', 'category-child') ?>
                            </div>
                        <?php endforeach ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="leaderboard leaderboard-top">
                <div id='div-gpt-ad-3035191-2'>
                    <script>
                        googletag.cmd.push(function() {
                            googletag.display('div-gpt-ad-3035191-2')
                        });
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="row" id="category-container">
                        <?php foreach ($articles as $post): ?>
                            <div class="col-lg-12 col-sm-6 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box', 'category') ?>
                            </div>
                        <?php endforeach ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="pt-4 pb-5">
                        <div class="horizontal-line text-center text-uppercase">
                            <button data-term_id="<?= $category->term_id ?>" style="--bs-btn-disabled-opacity: 1" class="btn px-4 border-0 rounded-0 more-category-article bg-light">
                                <span class="oranienbaum h3 loading-text text-secondary-hover transition-color-hover">Read More Stories</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="leaderboard leaderboard-vertical sticky-top">
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
        </div>
    </div>
    <div class="leaderboard-border-bottom">
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
    <div class="border-bottom bg-light">
        <div class="container">
            <section id="most-popular" class="pb-4">
                <?php get_template_part('templates/components/most-popular') ?>
            </section>
        </div>
    </div>
    <div class="border-bottom">
        <div class="container">
            <section id="newsletter">
                <?php get_template_part('templates/components/newsletter') ?>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>