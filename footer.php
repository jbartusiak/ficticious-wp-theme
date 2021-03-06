<footer class="footer">
    <div class="container">
        <hr class="footer__divider">
        <div class="row">
            <div class="col-12 col-md-6 mb-3 text-center text-md-left order-1 order-md-0">
                <h4 class="footer__title"><?php echo get_bloginfo('name'); ?></h4>
                <div class="credits">
                    <p><strong>ficticious</strong> theme<br>crafted by Bartusiak</p>
                    <?php if (is_user_logged_in()) { ?>
                        <small><a class="text-faded" href="<?php echo get_admin_url() ?>">zarządzanie
                                treścią</a></small><br>
                        <small><a class="text-faded" href="<?php echo wp_logout_url(get_site_url()) ?>">wyloguj się</a></small>
                    <?php } else { ?>
                        <small><a class="text-faded" href="<?php echo wp_login_url() ?>">zaloguj się</a></small>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3 text-center text-md-right order-0 order-md-1">
                <h4 class="footer__title">znajdz mnie</h4>
                <div class="footer__content ">
                    <a class="facebook" href="https://www.facebook.com/bartusiak.k">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a class="linkedin" href="https://www.linkedin.com/in/jakub-bartusiak-jba/">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="github" href="https://github.com/jbartusiak">
                        <i class="fab fa-github-square"></i>
                    </a>
                    <a class="gmail" href="<?php echo get_site_url();?>/contact">
                        <i class="fas fa-envelope-square"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="search-overlay-container" class="search-overlay">
    <div class="search-overlay__input-container">
        <input placeholder="Czego szukasz?" type="text" autofocus>
        <a>x</a>
    </div>
    <div class="container">

    </div>
</div>

<?php wp_footer() ?>

</body>
</html>