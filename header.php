<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>
    <?php bloginfo('name') ?>
    </title>
    <meta name="description" content="Производство нагрудных знаков, значков с логотипом, спортивных медалей, орденов, сувенирных монет. Разработка дизайн-макета с нуля. Бесплатная доставка по всей РФ.">
    <meta name="keywords" content="производство значков, изготовление значков на заказ, монеты на заказ, сувенирные монеты на заказ, изготовление значков, изготовление монет, иготовление медалей, изготовление брелков, брелки заказ, металлические значки на заказ, изготовление металлических значков, производство монет, изготовление сувенирной продукции, сувенирная продукция с логотипом, сувенирная продукция с логотипом компании недорого, производство сувенирной продукции, изготовление брелоков, изготовление монет на заказ, изготовление кубков на заказ, изготовление медалей по индивидуальному заказу, изготовление значков из металла на заказ, изготовление медалей на заказ, изготовление наградной продукции на заказ, изготовление нагрудных медалей, изготовление сувенирной продукции с логотипом, корпоративная продукция, нопико, нопико рф">
    <meta name="generator" content="2017.0.3.363"/>
    <meta name="yandex-verification" content="856b44fdca01d2c1"/><!-- custom meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"> -->
    <!-- <link rel="stylesheet" href="icons/sprite.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>   
      <div class="container header__top">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md block-left">
            <div class="logo__wrap">
              <a href="<?php echo home_url() ?>">
                <?php the_custom_logo(); ?>
                <span>
                  manufacturing
                </span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md">
            <p class="header__desc">
              <!-- Производство сувенирной и наградной продукции из металла с доставкой по всей России -->
              <?php echo nl2br(esc_html(get_theme_mod('header__desc')));?>
            </p>
          </div>
          <div class="col-sm-12 col-md text-right">
            <a href="#" class="header__mail">
              <!-- zakaz@нопико.рф -->
              <?php echo nl2br(esc_html(get_theme_mod('header__mail')));?>
            </a>
          </div>
          <div class="col-sm-12 col-md">
            <div class="header__callback">
              <a class="header__phone" href="tel:<?php echo nl2br(esc_html(get_theme_mod('header__phone')));?>">
                <?php echo nl2br(esc_html(get_theme_mod('header__phone')));?>
              </a>
              <a href="#popup" class="call-back-btn popup__link">
                Заказать обратный звонок
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="popup" class="mfp-hide popup__contact">
        <?php echo do_shortcode('[contact-form-7 id="191" title="Обратный звонок"]'); ?>
<!--         <form id="contactForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="col-sm-12 text-center">
              <input class="contact-form__input" type="text" placeholder="Имя *" required>
              <input id="phone" class="contact-form__input" type="text" placeholder="Телефон *" required>
            </div>
            
            <div class="col-sm-12 text-center">
              <div id="contact-form__success"></div>
              <input class="send_btn" type="submit" value="позвонить мне">
            </div>
          </div>
        </form> -->
      </div>
      <a href="#" class="nav__link menu-trigger">
        <span>
          Меню
        </span>
        <span class="icon-burger"></span>
      </a>
      <?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'nav__list', 'container'=>'false') ); ?>
      <!--       <nav>
        <ul class="nav__list">
          <li class="nav__item"><a class="nav__link" href="#">О компании</a></li>
          <li class="nav__item"><a class="nav__link" href="#">Производство</a></li>
          <li class="nav__item"><a class="nav__link" href="#">Галерея</a></li>
          <li class="nav__item"><a class="nav__link" href="#">Цены</a></li>
          <li class="nav__item"><a class="nav__link" href="#">База знаний</a></li>
        </ul>
      </nav> -->
    </header>