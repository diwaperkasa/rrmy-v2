<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        const gptadslots = [];
        var googletag = googletag || {
            cmd: []
        };
    </script>
    <script>
        googletag.cmd.push(function() {
            const dfpTarget = <?= json_encode(get_dfp_targets()) ?>;

            const mapping = googletag.sizeMapping()
                .addSize([1024, 768], [
                    [960, 300]
                ])
                .addSize([768, 0], [
                    [960, 300]
                ])
                .addSize([320, 0], [
                    [400, 500],
                    [375, 500]
                ])
                .build();

            const mapping_header = googletag.sizeMapping()
                .addSize([1024, 768], [
                    [1280, 300]
                ])
                .addSize([768, 0], [
                    [1280, 300]
                ])
                .addSize([320, 0], [
                    [375, 225],
                    [400, 225]
                ])
                .build();

            const mapping_vertical = googletag.sizeMapping()
                .addSize([1024, 768], [
                    [300, 600]
                ])
                .build();
            // Adslot 1 declaration
            gptadslots.push(googletag.defineSlot('/21837625142/header', [
                    [1280, 300],
                    [375, 225],
                    [400, 225]
                ], 'div-gpt-ad-3035191-1')
                .defineSizeMapping(mapping_header)
                .setTargeting('tag', dfpTarget)
                .addService(googletag.pubads()));
            // Adslot 2 declaration
            gptadslots.push(googletag.defineSlot('/21837625142/top-lb', [
                    [375, 500],
                    [960, 300],
                    [400, 500]
                ], 'div-gpt-ad-3035191-2')
                .defineSizeMapping(mapping)
                .setTargeting('tag', dfpTarget)
                .addService(googletag.pubads()));
            // Adslot 3 declaration
            gptadslots.push(googletag.defineSlot('/21837625142/mid-lb', [
                    [375, 500],
                    [960, 300],
                    [400, 500]
                ], 'div-gpt-ad-3035191-3')
                .defineSizeMapping(mapping)
                .setTargeting('tag', dfpTarget)
                .addService(googletag.pubads()));
            // Adslot 4 declaration
            gptadslots.push(googletag.defineSlot('/21837625142/bottom-lb', [
                    [400, 500],
                    [375, 500],
                    [960, 300]
                ], 'div-gpt-ad-3035191-4')
                .defineSizeMapping(mapping)
                .setTargeting('tag', dfpTarget)
                .addService(googletag.pubads()));
            // Adslot 5 declaration (Vertical Banner)
            gptadslots.push(googletag.defineSlot('/21837625142/hp-home', [
                    [300, 600],
                    [300, 600]
                ], 'div-gpt-ad-3035191-5')
                .defineSizeMapping(mapping_vertical)
                .setTargeting('tag', dfpTarget)
                .addService(googletag.pubads()));

            googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().setCentering(true);
            googletag.enableServices();
            // This listener will be called when a slot has finished rendering.
            googletag.pubads().addEventListener("slotRenderEnded", (event) => {
                const slotId = event.slot.getSlotElementId();

                if (event.advertiserId) {
                    const width = document.querySelector(`#${slotId}`).offsetWidth;
                    const iframe = document.querySelector(`#${slotId} iframe`);
                    const head = iframe.contentWindow.document.head;
                    const style = iframe.contentWindow.document.createElement('style');
                    const css = `.GoogleActiveViewElement img { max-width: ${width}px; width: 100%; height: auto; }`;

                    head.appendChild(style);

                    if (style.styleSheet) {
                        // This is required for IE8 and below.
                        style.styleSheet.cssText = css;
                    } else {
                        style.appendChild(document.createTextNode(css));
                    }
                }
            });
        });
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T5GV2H9');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WWC6L1FB6R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-WWC6L1FB6R');
    </script>

    <!-- Event snippet for Page view conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-853072439/kBr4CInTvfUZELe045YD'
        });
    </script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '147646339349091');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=147646339349091&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <?php if (is_singular(['post']) || is_category()): ?>
        <?php
        $category_display = "";

        if (is_singular()) {
            $category = get_the_category();

            if ($category) {
                $category_display = $category[0]->name;
            }
        }

        if (is_category()) {
            $term = get_queried_object();
            $category_display = $term->name;
        }
        ?>
        <script>
            dataLayer.push(function() {
                dataLayer.push({
                    'Category': '<?= htmlspecialchars_decode($category_display); ?>'
                });
            });
        </script>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5GV2H9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div style="--bs-bg-opacity: .75;" class="offcanvas offcanvas-start w-100 bg-black bg-blur text-white overflow-auto" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasLabel">
        <div class="container">
            <div class="offcanvas-header justify-content-between align-items-start align-items-md-center py-3 py-md-5">
                <div class="d-flex w-100">
                    <div class="row w-100">
                        <div class="col-md-4">
                            <a class="text-decoration-none me-4" href="/">
                                <img class="invert-color" height="50px" src="<?= get_theme_mod('theme_logo' , get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp"); ?>" alt="robbreport-malaysia-logo">
                            </a>
                        </div>
                        <div class="col-md-5">
                            <div class="my-3 my-md-0">
                                <form action="/">
                                    <div class="input-group">
                                        <button type="submit" class="bg-transparent input-group-text border-0 rounded-0 border-bottom">
                                            <svg fill="#FFF" class="text-white" height="24px" width="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z" />
                                            </svg>
                                        </button>
                                        <input name="s" type="search" class="bg-transparent form-control border-0 rounded-0 border-bottom text-white mulish" type="search" placeholder="Type your keywords..." required />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-danger rounded-circle">
                    <button style="--bs-btn-close-opacity: 1;" type="button" class="m-1 btn-close text-reset invert-color" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
            <div class="offcanvas-body">
                <?php $megaMenus = get_wp_menu_tree('mega-menu'); ?>
                <div class="row">
                    <?php foreach ($megaMenus as $menu): ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="py-2">
                                <div class="border-bottom mb-3">
                                    <a href="<?= $menu['url'] ?>" class="text-white text-decoration-none text-danger-hover transition-color-hover fs-4 oranienbaum ls-3"><?= $menu['title'] ?></a>
                                </div>
                                <ul class="list-unstyled">
                                    <?php foreach ($menu['children'] as $childMenu): ?>
                                        <li class="mb-2"><a href="<?= $childMenu['url'] ?>" class="text-white text-decoration-none text-danger-hover transition-color-hover fs-6 mulish ls-3"><?= $childMenu['title'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="fw-normal h4 oranienbaum">Newsletter</h2>
                        <p class="lora">Sign up for our weekly newsletter for the latest from the universe of luxury.</p>
                        <form target="_blank" action="https://robbreport.us12.list-manage.com/subscribe/post?u=28729885bbfbb9568a4580c7b&id=6523a24d0a" method="POST">
                            <div class="input-group mb-3">
                                <input name="EMAIL" type="email" class="fs-small form-control bg-transparent rounded-0 border text-white mulish px-3 py-2" placeholder="EMAIL ADDRESS" aria-label="EMAIL ADDRESS" required>
                                <button type="submit" class="fs-small input-group-text rounded-0 mulish text-dark bg-white border-white px-3 py-2">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-start justify-content-md-end">
                            <div class="mb-5 mb-md-0">
                                <h2 class="fw-normal h4 oranienbaum">Follow us</h2>
                                <div class="d-flex">
                                    <a href="<?= get_field("instagram_url", "option") ?>" target="_blank" style="height:40px; width:40px" class="text-decoration-none mx-2 btn border border-white bg-white rounded-circle d-flex justify-content-center align-items-center p-0">
                                        <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
                                    </a>
                                    <a href="<?= get_field("facebook_url", "option") ?>" target="_blank" style="height:40px; width:40px" class="text-decoration-none mx-2 btn border border-white bg-white rounded-circle d-flex justify-content-center align-items-center p-0">
                                        <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z"/></svg>
                                    </a>
                                    <a href="<?= get_field("youtube_url", "option") ?>" target="_blank" style="height:40px; width:40px" class="text-decoration-none mx-2 btn border border-white bg-white rounded-circle d-flex justify-content-center align-items-center p-0">
                                        <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z"/></svg>
                                    </a>
                                    <a href="<?= get_field("linkedin_url", "option") ?>" target="_blank" style="height:40px; width:40px" class="text-decoration-none mx-2 btn border border-white bg-white rounded-circle d-flex justify-content-center align-items-center p-0">
                                        <svg height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="leaderboard header-top">
            <div id='div-gpt-ad-3035191-1'>
                <script>
                    googletag.cmd.push(function() {
                        googletag.display('div-gpt-ad-3035191-1')
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="bg-white border-bottom main-nav" id="main-nav">
        <div class="container">
            <header class="header d-none d-lg-block border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <span type="button" class="text-dark me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                                <svg style="stroke: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;" fill="#fff" width="20" height="20" viewBox="0 0 22 15" xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M2 7.5h18m-18 6h18M2 1.5h18" stroke-width="2.09" fill="none" stroke-linecap="square"></path>
                                </svg>
                            </span>
                            <span type="button" class="top-header-menu text-dark me-3 search-btn">
                                <svg style="stroke: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;" fill="#fff" width="18" height="18" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                                    <title>Search</title>
                                    <g transform="translate(.7)" stroke-width="1.58" fill="none" fill-rule="evenodd">
                                        <circle cx="7" cy="7" r="5.71"></circle>
                                        <path d="M14 14l3 3" stroke-linecap="square"></path>
                                    </g>
                                </svg>
                            </span>
                            <a class="top-header-menu me-2" href="<?= get_theme_mod("rr1_url", "javascript:void(0);") ?>" target="_blank">
                                <svg width="30" height="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 720 252" style="enable-background:new 0 0 720 252;" xml:space="preserve">
                                    <title>RR One</title>
                                    <g>
                                        <g>
                                            <g>
                                                <path fill="#BE1E2D" class="st0" d="M488,239.1c37.2-0.4,47.3-4.2,47.3-23.5V44.2c0-22.1-5.3-25.9-47-26.6v-2.8l75.7-6.3v207.1 c0,18.9,9.5,23.1,47.7,23.5v3.1H488V239.1z"></path>
                                            </g>
                                        </g>
                                        <path d="M435.9,199.7l-2-14.5c-5.1-36.3-15.5-54.8-64.2-59.9v-1c49.8-7.7,70.6-29.2,70.6-59.5c0-35-34.6-57.2-96.5-57.2h-97.8v2.7 c34.3,1,39.7,7.1,39.7,23.2v182.3c0,12.9-3.4,19.2-21.3,21.8c-1.9,0.2-3.9,0.3-5.8,0.4c-28.7-0.5-34.3-7.9-39.5-38.3l-2-14.5 c-5.1-36.3-15.5-54.8-64.2-59.9v-1c49.8-7.7,70.6-29.2,70.6-59.5c0-35-34.6-57.2-96.5-57.2H29.1v2.7c34.3,1,39.7,7.1,39.7,23.2 v182.3c0,16.5-5.4,22.2-39.7,23.2v3h106.3v-3c-33.6-1-38-6.4-38-22.8v-88.8h33c40,0,50.1,7.7,54.1,41.4l3.7,30.3 c3.2,25.8,8.1,40.1,27.9,43.7l-0.1,0c0,0,14.2,3.2,55.7-0.7h80.5v-3c-33.6-1-38-6.4-38-22.8v-88.8h33c40,0,50.1,7.7,54.1,41.4 L405,199c3.7,30.3,9.8,44.7,39.3,44.7c11.1,0,23.5-1,34.6-3V238C447,238,441.3,231.3,435.9,199.7z M129.4,122.3h-32V12.7h27.9 c49.4,0,65.6,17.2,65.6,52.5C190.9,102.8,179.8,122.3,129.4,122.3z M346.1,122.3h-32V12.7h27.9c49.4,0,65.6,17.2,65.6,52.5 C407.7,102.8,396.6,122.3,346.1,122.3z"></path>
                                    </g>
                                </svg>
                            </a>
                            <a target="_blank" class="top-header-menu text-uppercase text-black text-secondary-hover transition-color-hover text-decoration-none fs-small mulish" href="<?= get_theme_mod("the_vault_url", "javascript:void(0);") ?>">The Vault</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center">
                            <a class="text-decoration-none" href="/">
                                <img class="my-0 my-lg-4" height="75px" src="<?= get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp" ?> ?>" alt="robbreport-malaysia-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end align-items-center">
                            <a class="top-header-menu text-uppercase text-black text-secondary-hover transition-color-hover text-decoration-none fs-small mulish me-2" href="<?= get_theme_mod("ultimate_drives_url", "javascript:void(0);") ?>">Ultimate Drives</a>
                            <a class="text-uppercase text-black text-secondary-hover transition-color-hover text-decoration-none fs-small subsribe-hover mulish" href="javascript:void(0);">SUBSCRIBE</a>
                        </div>
                    </div>
                </div>
            </header>
            <div id="containerNav">
                <nav class="navbar navbar-expand-lg p-0" id="mainNavbar">
                    <span type="button" class="d-block d-lg-none text-danger pe-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                        <svg fill="#fff" stroke="#d02027" width="24" height="24" viewBox="0 0 22 15" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M2 7.5h18m-18 6h18M2 1.5h18" stroke-width="2.09" fill="none" stroke-linecap="square"></path>
                        </svg>
                    </span>
                    <div class="d-block d-lg-none">
                        <a class="nav-link text-uppercase text-black text-decoration-none fw-normal my-2" aria-current="page" href="/">
                            <img height="40px" src="<?= get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp" ?> ?>" alt="robbreport-malaysia-logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse primary-menu">
                        <?php $primaryMenus = get_wp_menu_tree('header'); ?>
                        <?php if ($primaryMenus): ?>
                            <ul class="navbar-nav text-nowrap flex-wrap mx-auto mb-2 mb-lg-0 fw-bold align-items-center">
                                <?php foreach ($primaryMenus as $menu): ?>
                                    <li class="nav-item dropdown flex-shrink-0 px-3">
                                        <a class="nav-link text-uppercase text-black text-decoration-none fw-normal mulish ls-1 text-secondary-hover transition-color-hover" aria-current="page" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                                        <ul class="dropdown-menu bg-white shadow border-0 rounded-0 py-0" style="--bs-light-rgb: 235,236,237;">
                                            <?php foreach ($menu['children'] as $childMenu): ?>
                                                <li><a class="dropdown-item py-2" href="<?= $childMenu['url'] ?>"><?= $childMenu['title'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <span type="button" class="text-danger ps-2 search-btn d-block d-lg-none">
                        <svg fill="#fff" stroke="#d02027" width="24" height="24" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                            <title>Search</title>
                            <g transform="translate(.7)" stroke-width="1.58" fill="none" fill-rule="evenodd">
                                <circle cx="7" cy="7" r="5.71"></circle>
                                <path d="M14 14l3 3" stroke-linecap="square"></path>
                            </g>
                        </svg>
                    </span>
                </nav>
                <div class="d-block d-lg-none slider-menu-mobile">
                    <div class="d-flex overflow-auto gap-3 pb-2">
                        <?php foreach ($primaryMenus as $menu): ?>
                            <div class="flex-shrink-0">
                                <a class="text-uppercase text-dark text-decoration-none mulish" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="position-relative subsribe-popup d-none">
                    <div class="position-absolute w-100">
                        <div class="container bg-white border-top">
                            <div class="subsribe-popup-container">
                                <div class="row">
                                    <div class="col-md-6 py-4">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="d-flex justify-content-center">
                                                    <img class="img-fluid" src="<?= get_theme_mod('subscribe_logo' , "https://robbreport.com/wp-content/uploads/2024/10/RR2022_09_shadow.webp"); ?>" alt="<?= get_theme_mod('subscribe_logo' , "https://robbreport.com/wp-content/uploads/2024/10/RR2022_09_shadow.webp"); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-7 d-none d-md-block">
                                                <div class="py-3">
                                                    <h3 class="mb-4 oranienbaum ls-1">Get The Magazine</h3>
                                                    <p class="mulish-light ls-1">Subscribe now for a full year (12 issues) at only RM150 for the print version or opt for the digital edition for US$39.90 with two issues free.</p>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="/print-subscription" class="text-uppercase text-white btn btn-danger rounded-0 px-4 py-2 mulish-light ls-1">PRINT</a>
                                                        <a target="_blank" href="https://www.magzter.com/MY/Indochine-Media/Robb-Report-Malaysia/Lifestyle/?utm_source=cj-cps&cjevent=612b9ff3d3dd11f0829401a20a18b8f6" class="text-uppercase text-white btn btn-danger rounded-0 px-4 py-2 mulish-light ls-1">PRINT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-4">
                                        <div class="py-3 px-5 border-start">
                                            <h3 class="mb-4 oranienbaum ls-1">Newsletter</h3>
                                            <p class="mb-4 mulish-light ls-1">Sign up for our weekly newsletter for the latest from the universe of luxury.</p>
                                            <form target="_blank" action="https://robbreport.us12.list-manage.com/subscribe/post?u=28729885bbfbb9568a4580c7b&id=6523a24d0a" method="POST">
                                                <div class="input-group mb-4">
                                                    <input name="EMAIL" type="email" class="fs-small form-control rounded-0 border-black mulish-light ls-1 px-3 py-2" placeholder="EMAIL ADDRESS" aria-label="Email address" required />
                                                    <button type="submit" class="fs-small input-group-text bg-black text-white rounded-0 border-black mulish-light ls-1 px-3 py-2"><span>SIGN UP</span></button>
                                                </div>
                                            </form>
                                            <p class="mb-0 mulish-light ls-1 fs-small">
                                                By providing your information, you agree to our Terms of Use and our Privacy Policy. We use vendors that may also process your information to help provide our services. This site is protected by reCAPTCHA Enterprise and the Google Privacy Policy and Terms of Service apply.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative search-popup d-none">
                    <div class="position-absolute w-100 border-top">
                        <div class="container bg-white">
                            <div class="search-popup-container">
                                <div class="py-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <form action="/">
                                                <div class="input-group">
                                                    <button type="submit" class="bg-transparent input-group-text border-0 rounded-0 border-bottom border-black">
                                                        <svg fill="#000" class="text-white" height="24px" width="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                            <path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z" />
                                                        </svg>
                                                    </button>
                                                    <input name="s" type="search" class="bg-transparent form-control border-0 rounded-0 border-bottom border-black" type="search" placeholder="Type your keywords..." required />
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
        </div>
    </div>