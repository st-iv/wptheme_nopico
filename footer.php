<footer>
      <div class="footer__copyright">
            <div class="container">
                  <div class="row">
                        <div class="col-lg-3 footer__item">
                              <img class="header__logo" src="<?php bloginfo('template_url') ?>/img/logo.png" alt="">
                        </div>
                        <div class="col-lg-9">
                              <p class="footer__copyright-desc">
                                    <?php echo nl2br(esc_html(get_theme_mod('footer_top')));?>
                                    <!-- ' Цена указана при тираже 1000 шт. -->
                              </p>
                              <p class="footer__copyright-desc">
                                    <!-- Информация на сайте предназначена для ознакомления. Не является публичной офертой. -->
                                    <?php echo nl2br(esc_html(get_theme_mod('footer_text')));?>
                              </p>
                        </div>
                  </div>
            </div>
      </div>
</footer>
<?php wp_footer(); ?>
</body>
<!-- <script src="js/main.js"></script> -->
</html>