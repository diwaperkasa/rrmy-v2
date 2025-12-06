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

            const mapping = googletag.sizeMapping().
            addSize([1024, 768], [
                [960, 300]
            ]). //desktop
            addSize([768, 0], [
                [960, 300]
            ]). //tablet
            addSize([320, 0], [
                [400, 500],
                [375, 500]
            ]). //mobile
            build();

            const mapping_header = googletag.sizeMapping().
            addSize([1024, 768], [
                [1280, 300]
            ]). //desktop
            addSize([768, 0], [
                [1280, 300]
            ]). //tablet
            addSize([320, 0], [
                [375, 225],
                [400, 225]
            ]). //mobile
            build();

            const mapping_vertical = googletag.sizeMapping().
            addSize([1024, 768], [
                [300, 600]
            ]). //desktop
            build();
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5GV2H9"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div style="--bs-bg-opacity: .75;" class="offcanvas offcanvas-start w-100 bg-black bg-blur text-white" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasLabel">
        <div class="container">
            <div class="offcanvas-header justify-content-between align-items-start align-items-md-center py-3 py-md-5">
                <div class="d-flex w-100">
                    <div class="row w-100">
                        <div class="col-md-4">
                            <a class="text-decoration-none me-4" href="/">
                                <img class="invert-color" height="50px" src="<?= get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp" ?> ?>" alt="robbreport-malaysia-logo">
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
                                        <input name="s" type="search" class="bg-transparent form-control border-0 rounded-0 border-bottom text-white" type="search" placeholder="Type your keywords..." required />
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
                                <ul class="list-unstyled d-none d-md-block">
                                    <?php foreach ($menu['children'] as $childMenu): ?>
                                        <li class="mb-2"><a href="<?= $childMenu['url'] ?>" class="text-white text-decoration-none text-danger-hover transition-color-hover fs-6 mulish ls-3"><?= $childMenu['title'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
                            <span type="button" class="text-dark me-3 search-btn">
                                <svg style="stroke: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;" fill="#fff" width="18" height="18" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                                    <title>Search</title>
                                    <g transform="translate(.7)" stroke-width="1.58" fill="none" fill-rule="evenodd">
                                        <circle cx="7" cy="7" r="5.71"></circle>
                                        <path d="M14 14l3 3" stroke-linecap="square"></path>
                                    </g>
                                </svg>
                            </span>
                            <a class="me-2" href="https://rr1.com/" target="_blank">
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
                            <a class="text-uppercase text-black text-secondary-hover transition-color-hover text-decoration-none fs-small mulish" href="">The Vault</a>
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
                            <a class="text-uppercase text-black text-secondary-hover transition-color-hover text-decoration-none fs-small mulish me-2" href="">Ultimate Driver</a>
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
                                    <li class="nav-item dropdown flex-shrink-0">
                                        <a class="nav-link text-uppercase text-black text-decoration-none fw-normal mulish ls-1 text-secondary-hover transition-color-hover" aria-current="page" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                                        <ul class="dropdown-menu bg-white shadow border-0 rounded-0 py-0" style="--bs-light-rgb: 235,236,237;">
                                            <?php foreach ($menu['children'] as $childMenu): ?>
                                                <li><a class="dropdown-item py-2 fs-small" href="<?= $childMenu['url'] ?>"><?= $childMenu['title'] ?></a></li>
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
                        <div class="subsribe-popup-container shadow mt-2">
                            <div class="row bg-white">
                                <div class="col-md-6 py-4">
                                    <div class="row border-end h-100">
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <img class="img-fluid" src="https://robbreport.com/wp-content/uploads/2024/10/RR2022_09_shadow.webp" alt="https://robbreport.com/wp-content/uploads/2024/10/RR2022_09_shadow.webp">
                                            </div>
                                        </div>
                                        <div class="col-md-8 d-none d-md-block">
                                            <div class="py-3">
                                                <h3 class="text-uppercase mb-4 sweet-sans-pro ls-1">Get The Magazine</h3>
                                                <p class="roboto-light ls-1">Subscribe now and get up to 61% off the cover price.</p>
                                                <p class="roboto-light ls-1">Includes digital magazine access and the exclusive Robb Report tote bag.</p>
                                                <button class="text-uppercase text-white btn btn-danger rounded-0 px-4 py-2 roboto-light ls-1">SUBSCRIBE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 py-4">
                                    <div class="py-3 px-5">
                                        <h3 class="text-uppercase mb-4 text-center sweet-sans-pro ls-1">Newsletter</h3>
                                        <p class="text-center mb-4 roboto-light ls-1">Sign up for our newsletter and go inside a world of luxury.</p>
                                        <form target="_blank" action="https://robbreport.us12.list-manage.com/subscribe/post?u=28729885bbfbb9568a4580c7b&id=6523a24d0a" method="POST">
                                            <div class="input-group mb-4">
                                                <input name="EMAIL" type="email" class="form-control rounded-0 border-black py-3 roboto-light ls-1" placeholder="Email address" aria-label="Email address" required />
                                                <button type="submit" class="input-group-text bg-black text-white rounded-0 border-black ms-2 roboto-light ls-1"><span>SIGN UP</span></button>
                                            </div>
                                        </form>
                                        <p class="mb-0 roboto-light ls-1">
                                            By providing your information, you agree to our Terms of Use and our Privacy Policy. We use vendors that may also process your information to help provide our services. This site is protected by reCAPTCHA Enterprise and the Google Privacy Policy and Terms of Service apply.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative search-popup d-none">
                    <div class="position-absolute w-100">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="search-popup-container bg-white shadow mt-2">
                                    <div class="pt-2 p-3">
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