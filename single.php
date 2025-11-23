<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="post__header py-4" role="heading">
                    <div class="text-center mb-3">
                        <?php $categories = get_the_category(get_the_ID()) ?>
                        <?php if ($categories): ?>
                            <a class="text-decoration-none category-article sweet-sans-pro ls-1" href="<?= get_term_link($categories[0]->term_id) ?>">
                                <span class="h6 fs-6 text-center text-danger text-uppercase sweet-sans-font"><?= $categories[0]->name ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="text-center mb-3">
                                <h1 class="post__title arnhem"><?php the_title(); ?></h1>
                            </div>
                            <?php if ($shortDesc = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)): ?>
                                <div class="text-center mb-3">
                                    <p class="fw-light fs-5 text-dark roboto-light"><?= $shortDesc; ?></p>
                                </div>
                            <?php endif; ?>
                            <?php $writers = wp_get_post_terms(get_the_ID(), 'writer', ['field' => 'all']); ?>
                            <?php if ($writers): ?>
                                <div class="article-writter text-center fw-light mb-3">
                                    <span>
                                        <span class="fst-italic georgia-italic">By</span>
                                        <?php foreach ($writers as $writer): ?>
                                            <a class="ms-1 text-decoration-none text-dark sweet-sans-pro ls-1 text-secondary-hover transition-color-hover" href="<?= get_term_link($writer->term_id) ?>"><span class="text-uppercase"><?= $writer->name ?></span></a>
                                        <?php endforeach; ?>
                                        <span class="mx-1">|</span>
                                        <span class="sweet-sans-pro text-uppercase"><?= date('F d, Y', strtotime($post->post_date)) ?></span>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="post__share-btn mb-3">
                        <div class="d-flex justify-content-center">
                            <button style="height:40px; width:40px" class="mx-2 btn border rounded-circle d-flex justify-content-center align-items-center p-0">
                                <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z"/></svg>
                            </button>
                            <button style="height:40px; width:40px" class="mx-2 btn border rounded-circle d-flex justify-content-center align-items-center p-0">
                                <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                            </button>
                            <button style="height:40px; width:40px" class="mx-2 btn border rounded-circle d-flex justify-content-center align-items-center p-0">
                                <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M125.4 128C91.5 128 64 155.5 64 189.4C64 190.3 64 191.1 64.1 192L64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192L575.9 192C575.9 191.1 576 190.3 576 189.4C576 155.5 548.5 128 514.6 128L125.4 128zM528 256.3L528 448C528 456.8 520.8 464 512 464L128 464C119.2 464 112 456.8 112 448L112 256.3L266.8 373.7C298.2 397.6 341.7 397.6 373.2 373.7L528 256.3zM112 189.4C112 182 118 176 125.4 176L514.6 176C522 176 528 182 528 189.4C528 193.6 526 197.6 522.7 200.1L344.2 335.5C329.9 346.3 310.1 346.3 295.8 335.5L117.3 200.1C114 197.6 112 193.6 112 189.4z"/></svg>
                            </button>
                            <button style="height:40px; width:40px" class="mx-2 btn border rounded-circle d-flex justify-content-center align-items-center p-0">
                                <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                            </button>
                        </div>
                    </div>
                </header>

                <div class="post__thumbnail mb-5">
                    <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="post__content lora fs-5 mb-5  border-bottom">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        ads
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
        <section id="most-popular" class="mb-5">
            <?php get_template_part('templates/components/most-popular') ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
