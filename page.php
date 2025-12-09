<?php get_header(); ?>

<main class="main bg-light" role="main">
    <div class="border-bottom">
        <div class="container">
            <div class="py-4">
                <header class="pb-4 text-center oranienbaum">
                    <h1 class="mb-0"><?= the_title() ?></h1>
                </header>
                <div class="post__content lora">
                    <?php the_content(); ?>
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
</main>

<?php get_footer(); ?>
