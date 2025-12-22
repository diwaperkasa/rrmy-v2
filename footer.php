        <div class="leaderboard-border-bottom">
            <div class="container">
                <div class="leaderboard leaderboard-bottom">
                    <div id='div-gpt-ad-3035191-4'>
                        <script>
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-3035191-4')
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer bg-black" role="contentinfo">
            <div class="container text-white py-4">
                <div class="row mb-4">
                    <div style="--bs-border-color: rgba(255, 255, 255, 0.5)" class="col-lg-3 border-end border-white">
                        <div style="--bs-border-color: rgba(255, 255, 255, 0.5)" class="border-bottom text-center">
                            <a class="text-decoration-none" href="/">
                                <img style="max-height: 60px;" class="invert-color mb-4 img-fluid" src="<?= get_theme_mod('theme_logo' , get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp"); ?>" alt="robbreport-malaysia-logo">
                            </a>
                        </div>
                        <div class="my-4">
                            <p class="mulish fs-small">When the most successful people on the planet seek the finest products, experiences and adventures available to them, they turn to Robb Report. The title, which began as a newsletter for vintage Rolls-Royce enthusiasts nearly half a century ago, has grown to be the leading voice in global luxury, with over 20 international editions and growing. Now, as the tastemaker’s tastemaker, it covers cars, yachts, jets, bikes, fashion, watches, art, design, real estate, wine, spirits, fine dining, philanthropy, travel, cigars, and tech, and rules on the brands and artisans that are truly in a league of their own.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php $menus = get_wp_menu_tree('footer'); ?>
                        <div class="row">
                            <?php foreach ($menus as $menu): ?>
                                <div class="col-6 col-md-4 col-sm-6">
                                    <h2 class="fw-normal h4 oranienbaum mb-3"><?= $menu['title'] ?></h2>
                                    <ul class="list-unstyled">
                                        <?php foreach ($menu['children'] as $children): ?>
                                            <li>
                                                <a href="<?= $children['url'] ?>" class="text-decoration-none mulish text-white text-danger-hover transition-color-hover text-uppercase fs-small"><?= $children['title'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <h2 class="fw-normal h4 oranienbaum">Newsletter</h2>
                                <p class="lora">Sign up for our weekly newsletter for the latest from the universe of luxury.</p>
                                <form target="_blank" action="https://robbreport.us12.list-manage.com/subscribe/post?u=28729885bbfbb9568a4580c7b&id=6523a24d0a" method="POST">
                                    <div class="input-group mb-4">
                                        <input name="EMAIL" type="email" class="fs-small form-control bg-black rounded-0 border text-white mulish px-3 py-2" placeholder="EMAIL ADDRESS" aria-label="EMAIL ADDRESS" required>
                                        <button type="submit" class="fs-small input-group-text rounded-0 mulish px-3 py-2">SIGN UP</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="d-flex justify-content-md-end justify-content-lg-start">
                                    <div>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="text-white fs-small fst-italic">Published by Indochine Media Ventures under license from Robb Report Media, LLC, a subsidiary of Penske Media Corporation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
