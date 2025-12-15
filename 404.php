<?php get_header(); ?>

<main class="main" role="main">
    <div class="border-bottom bg-light">
        <div class="container">
            <div class="py-4">
                <div class="page__content lora">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-center mb-4 mb-md-0">
                                <span class="h1 mulish" style="font-size: 6em; font-weight: bold; opacity: .3">404</span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <header class="page-title">
                                <h1 class="oranienbaum">Oops! That page can’t be found.</h1>
                            </header>
                            <div class="page-content">
							<p class="mulish">It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <form method="get" class="searchform" action="/" role="search">
                                        <div class="mb-3">
                                            <input type="search" class="form-control mulish rounded-0 border-dark" name="s" placeholder="Search..." required>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
</main>

<?php get_footer(); ?>
