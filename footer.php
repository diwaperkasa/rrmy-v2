        <div class="leaderboard">
            <div class="container">
                <div class="leaderboard-bottom">
                    
                </div>
            </div>
        </div>
        <footer class="footer bg-black" role="contentinfo">
            <div class="container text-white py-4">
                <div class="row">
                    <div class="col-lg-4 border-end border-white">
                        <div class="border-bottom text-center">
                            <a class="text-decoration-none" href="/">
                                <img style="max-height: 60px;" class="invert-color mb-4 img-fluid" src="<?= get_stylesheet_directory_uri() . "/assets/images/RobbReport_Malaysia-black-01-V2.webp" ?> ?>" alt="robbreport-malaysia-logo">
                            </a>
                        </div>
                        <div class="my-4">
                            <p class="lora">Robb Report is leading voice in the global luxury market. Its discerning audience appreciates and desires quality, exclusivity, heritage, taste, and fine design. It is synonomous aith affluence, luxury, and the best of the best.</p>
                            <p class="text-secondary text-uppercase mulish">ROBB REPORT HONG KONG IS A TRADEMARK OF ROBB REPORT MEDIA, LLC © 2025 ROBB REPORT MEDIA, LLC. ALL RIGHTS RESERVED. PUBLISHED UNDER LICENSE FROM ROBB REPORT MEDIA, LLC, A SUBSIDIARY OF PENSKE MEDIA CORPORATION.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <?php $menus = get_wp_menu_tree('footer'); ?>
                        <div class="row">
                            <?php foreach ($menus as $menu): ?>
                                <div class="col-md-4 col-sm-6">
                                    <h2 class="fw-normal h5 oranienbaum"><?= $menu['title'] ?></h2>
                                    <ul class="list-unstyled">
                                        <?php foreach ($menu['children'] as $children): ?>
                                            <li>
                                                <a href="<?= $children['url'] ?>" class="text-decoration-none mulish text-white text-danger-hover transition-color-hover text-uppercase"><?= $children['title'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h2 class="fw-normal h5 oranienbaum">Newsletters</h2>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <p class="lora">Get Robb Report Hong Kong’s take on what matters most in the world of the luxury, delivered to your inbox every week.</p>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <form action="/">
                                    <div class="input-group mb-3">
                                        <input name="email" type="email" class="form-control bg-black rounded-0 border text-white mulish" placeholder="EMAIL ADDRESS" aria-label="EMAIL ADDRESS" required>
                                        <button type="submit" class="input-group-text rounded-0 mulish">SIGN UP</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
