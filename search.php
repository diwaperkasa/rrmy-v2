<?php get_header(); ?>

<?php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'orderby' => 'rand',
];

$randomPost = new WP_Query($args);
?>

<main class="main" role="main">
    <div class="bg-light border-bottom">
        <div class="container">
            <?php if (have_posts()): ?>
                <div class="text-center py-4">
                    <h1 class="oranienbaum">Search Result For: <span><?= get_search_query() ?></span></h1>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="col-md-6 pb-3 pb-md-4">
                                    <?php get_template_part('templates/components/article-box') ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="py-4 text-center">
                            <?= get_the_posts_pagination([
                                "mid_size" => 2,
                                "prev_text" => '<svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z"/></svg>',
                                "next_text" => '<svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>'
                            ]);?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sticky-top">
                            <header class="pb-4 pt-3">
                                <h3 class="oranienbaum border-bottom pb-2 h4">You May Also Like</h3>
                            </header>
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
            <?php else: ?>
                <div class="text-center py-4 border-bottom">
                    <h1 class="oranienbaum">No Results Found</h1>
                </div>
                <div class="py-4 border-bottom">
                    <h2 class="oranienbaum">You May Like</h2>
                </div>
                <div class="py-3">
                    <div class="row">
                        <?php while ( $randomPost->have_posts() ) : $randomPost->the_post(); ?>
                            <div class="col-md-6 col-lg-4 pb-3 pb-md-4">
                                <?php get_template_part('templates/components/article-box') ?>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            <?php endif; ?>
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