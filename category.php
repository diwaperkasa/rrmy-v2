<?php get_header(); ?>

<?php
$category = get_queried_object();

$children = get_categories([
    'parent' => $category->term_id,
    'hide_empty' => false
]);

$query = new WP_Query([
    'posts_per_page' => 10,
    'post_status' => 'publish',
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
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
                    <div class="border-bottom">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="d-flex justify-content-center lora">
                                    <div class="px-5 pb-2">
                                        <span class="text-warning">All</span>
                                    </div>
                                    <?php foreach ($children as $childCategory): ?>
                                        <div class="border-start px-5 pb-2">
                                            <a class="text-secondary-hover text-decoration-none text-dark" href="<?= get_term_link($childCategory->term_id) ?>"><?= $childCategory->name ?></a>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </section>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php $post = array_shift($topArticles) ?>
                        <div class="col-md-8 pb-3 pb-md-4">
                            <?php get_template_part('templates/components/article-box', '1x1') ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <?php foreach ($topArticles as $post): ?>
                                    <div class="col-12 pb-3 pb-md-4">
                                        <?php get_template_part('templates/components/article-box') ?>
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
                    <div class="row" id="category-container">
                        <?php foreach ($articles as $post): ?>
                            <div class="col-md-6 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box') ?>
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
                    <?php
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'post_status' => 'publish',
                            'orderby' => 'rand',
                        ];

                        $randomPost = new WP_Query($args);
                    ?>
                    <div class="sticky-top py-0 py-md-3">
                        <div class="mb-4 border-bottom">
                            <h2 class="oranienbaum">You May Like</h2>
                        </div>
                        <div class="row">
                            <?php while ( $randomPost->have_posts() ) : $randomPost->the_post(); ?>
                                <div class="col-12 pb-3 pb-md-4">
                                    <?php get_template_part('templates/components/article-box') ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom">
        <div class="container">
            <section id="newsletter">
                <?php get_template_part('templates/components/newsletter') ?>
            </section>
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
</main>

<?php get_footer(); ?>