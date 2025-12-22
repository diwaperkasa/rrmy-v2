<article <?php post_class('h-100', get_the_ID()) ?>>
    <div class="row">
        <div class="col-6 col-md-12">
            <div class="article-header">
                <div class="img-hover-zoom ratio-1x1 ratio-md-16x9">
                    <a class="text-decoration-none" href="<?= get_the_permalink() ?>">
                        <?= get_the_post_thumbnail(get_the_ID(), 'full', [
                            "class" => "ratio-1x1 ratio-md-16x9"
                        ]) ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-12">
            <div class="article-body mb-3 mb-sm-0">
                <div class="article-footer">
                    <div class="article-desc">
                        <?php $categories = get_the_category(get_the_ID()) ?>
                        <?php if ($categories): ?>
                            <div class="my-2">
                                <a href="<?= get_term_link($categories[0]->term_id) ?>" class="text-decoration-none fs-small text-warning text-uppercase mulish">
                                    <span class="ls-1"><?= $categories[0]->name ?></span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <a class="text-decoration-none" href="<?= get_the_permalink(); ?>">
                            <h3 class="article-title text-dark h4 oranienbaum text-secondary-hover transition-color-hover mb-1"><?php the_title(); ?></h3>
                        </a>
                    </div>
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
    </div>
</article>