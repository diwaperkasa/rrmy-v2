<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="d-none d-lg-block">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-img">
                        <a href="https://rr1.com/" target="_blank">
                            <svg width="60" height="60" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 720 252" style="enable-background:new 0 0 720 252;" xml:space="preserve">
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
                    </div>
                    <div class="header-img">
                        <a class="text-decoration-none" href="/">
                            <img height="75px" src="<?= get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp" ?> ?>" alt="robbreport-malaysia-logo">
                        </a>
                    </div>
                    <div class="header-img">
                        <a class="subscribe-btn text-uppercase text-black text-decoration-none fw-normal" href="">SUBSCRIBE</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="sticky-top bg-white">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <span type="button" class="text-danger py-2 pe-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                    <svg fill="#fff" stroke="#d02027" width="24" height="24" viewBox="0 0 22 15" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M2 7.5h18m-18 6h18M2 1.5h18" stroke-width="2.09" fill="none" stroke-linecap="square"></path>
                    </svg>
                </span>
                <div class="collapse navbar-collapse primary-menu" id="navbarSupportedContent">
                    <?php $primaryMenus = wp_get_nav_menu_items('primary-menu'); ?>
                    <?php if ($primaryMenus): ?>
                        <ul class="navbar-nav text-nowrap flex-wrap me-auto mb-2 mb-lg-0 fw-bold">
                            <?php foreach ($primaryMenus as $menu): ?>
                                <?php if ($menu->menu_item_parent == 0): ?>
                                    <li class="nav-item flex-shrink-0">
                                        <a class="nav-link text-uppercase text-black text-decoration-none fw-normal" aria-current="page" href="<?= $menu->url ?>"><?= $menu->title ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <li id="subscribe-menu" class="nav-item my-1 border-start border-1 border-dark d-none">
                                <a target="_blank" class="nav-link text-uppercase text-black text-decoration-none" aria-current="page" href="<?= get_theme_mod('subscribe_url', 'javascript:void(0);') ?>">Subscribe</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <span type="button" class="text-danger py-2 ps-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                    <svg fill="#fff" stroke="#d02027" width="24" height="24" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                        <title>Search</title>
                        <g transform="translate(.7)" stroke-width="1.58" fill="none" fill-rule="evenodd">
                            <circle cx="7" cy="7" r="5.71"></circle>
                            <path d="M14 14l3 3" stroke-linecap="square"></path>
                        </g>
                    </svg>
                </span>
            </div>
        </nav>
        <div class="d-block d-lg-none slider-menu-mobile">
            <div class="container">
                <div class="d-flex overflow-auto gap-3 pb-3">
                    <?php foreach ($primaryMenus as $menu): ?>
                        <?php if ($menu->menu_item_parent == 0): ?>
                            <div class="flex-shrink-0">
                                <a class="text-uppercase text-secondary text-decoration-none" href="<?= $menu->url ?>"><?= $menu->title ?></a>
                            </div>
                        <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>