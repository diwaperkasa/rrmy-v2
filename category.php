<?php get_header(); ?>

<?php
$category = get_queried_object();
?>

<main class="main" role="main">
    <div class="container">
        <h1 class="sweet-sans-pro ls-2 text-uppercase text-center"><?= $category->name ?></h1>
    </div>
</main>

<?php get_footer(); ?>