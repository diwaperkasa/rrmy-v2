<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">
        <div class="py-4 lora">
            <header class="pb-4">
                <h1><?= the_title() ?></h1>
            </header>
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
